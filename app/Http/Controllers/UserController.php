<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'ttl' => 'required|date',
            'gambar' => 'required|image', // Validasi gambar
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
                'string',
            ],
        ], [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar, satu huruf kecil, satu angka, dan satu karakter khusus.',
            'gambar.image' => 'File yang di-upload harus berupa gambar.',
            'gambar.required' => 'Gambar harus di-upload.',
        ]);

        try {
            // Mulai transaksi database
            DB::beginTransaction();

            $file = $request->file('gambar');
            $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName()); // Pastikan nama file aman

            // Simpan file ke folder public/images/user
            $file->move(public_path('storage/images/user'), $fileName);

            // Simpan data pengguna menggunakan model User
            User::create([
                'nama' => $request->nama,
                'gambar' => $fileName, // Simpan nama file gambar
                'ttl' => $request->ttl,
                'email' => $request->email,
                'role' => 'Pegawai',
                'password' => bcrypt($request->password),
            ]);

            // Commit transaksi jika semuanya berhasil
            DB::commit();

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Pegawai Berhasil Ditambahkan');
        } catch (\Exception $e) {
            // Rollback transaksi jika ada kesalahan
            DB::rollBack();

            // Jika terjadi kesalahan, redirect dengan pesan error
            return redirect()->back()->with('error', 'Gagal menambahkan pegawai: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Pengecualian email pengguna saat ini
            'ttl' => 'required|date',
            'role' => 'required|in:Admin,Pegawai',
            'gambar' => 'nullable|image', // Gambar tidak wajib
            'password' => [
                'nullable', // Password tidak wajib
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
                'string',
            ],
        ], [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar, satu huruf kecil, satu angka, dan satu karakter khusus.',
            'gambar.image' => 'File yang di-upload harus berupa gambar.',
        ]);

        try {
            DB::beginTransaction();

            // Variabel untuk menyimpan nama file gambar
            $fileName = $user->gambar; // Set default dengan gambar lama

            // Proses gambar jika ada
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName());

                // Hapus gambar lama jika ada
                $oldImagePath = public_path('storage/images/user/' . $user->gambar);
                if (file_exists($oldImagePath) && $user->gambar != null) {
                    unlink($oldImagePath); // Hapus gambar lama
                }

                // Simpan file gambar baru ke folder public/images/user
                $file->move(public_path('storage/images/user'), $fileName);
            }

            // Cek apakah password diisi
            $password = $request->password ? bcrypt($request->password) : $user->password;

            // Update data pengguna
            $user->update([
                'nama' => $request->nama,
                'ttl' => $request->ttl,
                'email' => $request->email,
                'role' => $request->role,
                'password' => $password,
                'gambar' => $fileName,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Pegawai Berhasil Diubah');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Gagal mengubah pegawai: ' . $e->getMessage());
        }
    }


    public function changeAdmin($id)
    {
        $user = User::findOrFail($id);

        try {
            DB::beginTransaction();

            $user->update([
                'role' => 'Admin',
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Pegawai Berhasil Diubah menjadi Admin');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Gagal mengubah pegawai menjadi Admin: ' . $e->getMessage());
        }
    }

    public function datapegawai()
    {
        $users = User::all();
        return view('admin.data-pegawai', compact('users'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            // Ganti = dengan == atau === untuk perbandingan
            if ($user->role == 'Admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role == 'Pegawai') {
                return redirect()->intended('/pegawai/dashboard');
            }
        }

        return redirect('login')->withInput()->with('error', 'Email dan Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function destroy($id)
{
    // Cari user berdasarkan id
    $user = User::find($id);

    // Jika user ditemukan, hapus gambar dan data dari database
    if ($user) {
        // Hapus gambar dari folder public
        $oldImagePath = public_path('storage/images/user/' . $user->gambar); // Path absolut di public
        if (file_exists($oldImagePath) && $user->gambar != null) {
            unlink($oldImagePath); // Menghapus file gambar
        }

        // Hapus user dari database
        $user->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pegawai berhasil dihapus');
    } else {
        // Jika user tidak ditemukan, tampilkan pesan error
        return redirect()->back()->with('error', 'Pegawai tidak ditemukan');
    }
}

}
