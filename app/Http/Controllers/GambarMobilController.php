<?php

namespace App\Http\Controllers;

use App\Models\GambarMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarMobilController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'mobil_id' => 'required',
            'gambar.*' => 'image|required',
        ]);

        try {
            if ($request->hasFile('gambar')) {
                foreach ($request->file('gambar') as $file) {
                    // Generate nama file yang unik
                    $fileName = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $file->getClientOriginalName());

                    // Pindahkan file gambar ke direktori yang dituju di public
                    $file->move(public_path('storage/images/mobil'), $fileName);

                    // Simpan gambar ke tabel GambarMobil
                    GambarMobil::create([
                        'mobil_id' => $request->mobil_id,
                        'nama_file' => $fileName, // Simpan nama file
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Data gambar mobil berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan gambar mobil: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $gambar = GambarMobil::find($id);
        if ($gambar) {
            // Hapus gambar dari folder
            $oldImagePath = public_path('storage/images/mobil/' . $gambar->nama_file);
            if (file_exists($oldImagePath) && $gambar->nama_file != null) {
                unlink($oldImagePath); // Hapus file gambar dari folder
            }

            $gambar->delete(); // Hapus entri dari database
            return redirect()->back()->with('success', 'Gambar berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan');
        }
    }
}
