<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    public function datapenjualan()
    {
        $penjualans = Penjualan::all(); // Mengambil semua data
        return view('admin.data-penjualan', compact('penjualans'));
    }

    public function tambahpenjualan($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.tambah-penjualan', compact('mobil'));
    }

    public function editpenjualan($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('admin.edit-penjualan', compact('penjualan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'mobil_id' => 'required',
            'harga' => 'required',
            'nama_pembeli' => 'required',
            'metode_pembayaran' => 'required',
        ]);
        try {
            $penjualan = Penjualan::findOrFail($id);
            $penjualan->update([
                'harga' => $request->harga,
                'nama_pembeli' => $request->nama_pembeli,
                'metode_pembayaran' => $request->metode_pembayaran,
            ]);
            return redirect()->back()->with('success', 'Data mobil berhasil diedit');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengedit data penjualan: ' . $e->getMessage());
        }
    }
    public function storePenjualan(Request $request)
    {
        $request->validate([
            'mobil_id' => 'required',
            'harga' => 'required',
            'nama_pembeli' => 'required',
            'metode_pembayaran' => 'required',
        ]);
        try {
            $penjualan = Penjualan::create([
                'mobil_id' => $request->mobil_id,
                'harga' => $request->harga,
                'nama_pembeli' => $request->nama_pembeli,
                'metode_pembayaran' => $request->metode_pembayaran,
                'pegawai_id' => Auth::user()->id,
            ]);
            $mobil = Mobil::findOrFail($request->mobil_id);
            $mobil->update([
                'status' => 'Sold Out',
            ]);
            return redirect()->route('admin.data-penjualan')->with('success', 'Penjualan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan data penjualan: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        // Cari mobil berdasarkan ID
        $penjualan = penjualan::find($id);
        if ($penjualan) {
            $mobil = Mobil::findOrFail($penjualan->mobil->id);
            $mobil->update([
                'status' => 'Available',
            ]);
            // Hapus mobil dari database
            $penjualan->delete();

            // Redirect dengan pesan sukses
            return redirect()->back()->with('success', 'Penjualan berhasil dihapus');
        } else {
            // Jika mobil tidak ditemukan, tampilkan pesan error
            return redirect()->back()->with('error', 'Penjualan tidak ditemukan');
        }
    }
}
