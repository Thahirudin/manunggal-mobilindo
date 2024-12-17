<?php

namespace App\Http\Controllers;

use App\Models\GambarMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'detail' => 'required|string',
            'gambar.*' => 'image',
            'harga' => 'numeric|required'
        ]);

        try {
            $mobil = Mobil::create([
                'nama' => $request->nama,
                'detail' => $request->detail,
                'harga' => $request->harga,
                'user_id' => Auth::user()->id,
            ]);

            // Proses upload gambar
            if ($request->hasFile('gambar')) {
                foreach ($request->file('gambar') as $file) {
                    // Generate nama file yang unik
                    $fileName = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName());

                    // Pindahkan file gambar ke direktori yang dituju di public
                    $file->move(public_path('storage/images/mobil'), $fileName);

                    // Simpan nama file ke tabel GambarMobil
                    GambarMobil::create([
                        'mobil_id' => $mobil->id,
                        'nama_file' => $fileName, // Simpan nama file
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Data mobil berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan mobil: ' . $e->getMessage());
        }
    }


    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'detail' => 'required|string',
            'harga' => 'numeric|required',
        ]);

        try {
            $mobil = Mobil::findOrFail($id);
            $mobil->update([
                'nama' => $request->nama,
                'detail' => $request->detail,
                'harga' => $request->harga,
                'user_id' => Auth::user()->id,
            ]);
            return redirect()->back()->with('success', 'Data mobil berhasil diedit!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengedit data mobil: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        // Cari mobil berdasarkan ID
        $mobil = Mobil::find($id);

        if ($mobil) {
            // Ambil semua gambar terkait
            $gambarMobil = GambarMobil::where('mobil_id', $mobil->id)->get();

            // Hapus gambar dari server
            foreach ($gambarMobil as $gambar) {
                $oldImagePath = public_path('storage/images/mobil/' . $gambar->nama_file);
                if (file_exists($oldImagePath) && $gambar->nama_file != null) {
                    unlink($oldImagePath); // Hapus file gambar dari server
                }
            }

            // Hapus semua gambar dari tabel GambarMobil
            GambarMobil::where('mobil_id', $mobil->id)->delete();

            // Hapus mobil dari database
            $mobil->delete();

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Mobil dan gambar berhasil dihapus');
        } else {
            // Jika mobil tidak ditemukan, tampilkan pesan error
            return redirect()->back()->with('error', 'Mobil tidak ditemukan');
        }
    }
}
