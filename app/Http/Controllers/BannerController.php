<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            // Ambil file gambar
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $fileName = uniqid() . '_' . $file->getClientOriginalName(); // Generate nama file yang unik

                // Pindahkan file gambar ke folder public/images/banner
                $file->move(public_path('storage/images/banner'), $fileName);

                // Simpan data banner ke database
                DB::table('banners')->insert([
                    'nama' => $request->nama,
                    'gambar' => $fileName, // Simpan nama file gambar
                ]);

                DB::commit();
                return redirect()->back()->with('success', 'Banner Berhasil Ditambahkan');
            } else {
                throw new \Exception('Gambar tidak ditemukan');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menambahkan banner: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string',
        ]);

        try {
            $banner = Banner::findOrFail($id);
            DB::beginTransaction();

            // Variabel untuk menyimpan nama file gambar
            $fileName = $banner->gambar; // Set default dengan gambar lama

            // Ambil file gambar jika ada file baru yang diunggah
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Nama file baru yang unik

                // Hapus gambar lama jika ada
                $oldImagePath = public_path('storage/images/banner/' . $banner->gambar);
                if (file_exists($oldImagePath) && $banner->gambar != null) {
                    unlink($oldImagePath); // Menghapus file gambar lama
                }

                // Pindahkan file gambar baru ke folder public/images/banner
                $file->move(public_path('storage/images/banner'), $fileName);
            }

            // Update data banner di database
            $banner->update([
                'nama' => $request->nama,
                'gambar' => $fileName, // Simpan nama file gambar (lama atau baru)
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Banner Berhasil Diedit');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal mengubah banner: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        // Cari banner berdasarkan id
        $banner = Banner::find($id);

        if ($banner) {
            // Hapus gambar dari folder public
            $oldImagePath = public_path('storage/images/banner/' . $banner->gambar); // Path lengkap
            if (file_exists($oldImagePath) && $banner->gambar != null) {
                unlink($oldImagePath); // Menghapus file gambar
            }

            // Hapus banner dari database
            $banner->delete();

            return redirect()->back()->with('success', 'Banner berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Banner tidak ditemukan');
        }
    }
}
