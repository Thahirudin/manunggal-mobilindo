<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\GambarMobil;
use App\Models\Mobil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $banners = Banner::all();
        $mobils = Mobil::where('status', 'Available')->orderBy('id', 'desc')->limit(6)->get();
        return view('index', compact('banners', 'mobils'));
    }
    public function adminDashboard()
    {
        $banners = Banner::all();
        $mobils = Mobil::orderBy('id', 'desc')->get();
        $users = User::all();
        $totalUser = $users->count();
        $totalMobil = $mobils->count();
        return view('admin.dashboard', compact('users', 'mobils', 'totalUser', 'totalMobil'));
    }
    public function pegawaiDashboard()
    {
        $banners = Banner::all();
        $mobils = Mobil::orderBy('id', 'desc')->get();
        $users = User::all();
        $totalUser = $users->count();
        $totalMobil = $mobils->count();
        return view('pegawai.dashboard', compact('users', 'mobils', 'totalUser', 'totalMobil'));
    }
    public function katalogMobil()
    {
        $mobils = Mobil::where('status', 'Available')->orderBy('id', 'desc')->paginate(6);
        return view('katalog', compact('mobils'));
    }

    public function detailKatalog($id)
    {
        $mobil = Mobil::findOrFail($id);
        $gambarMobils = GambarMobil::where('mobil_id', $id)->get();
        $mobilTerbaru = Mobil::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view('detail-katalog', compact('mobil', 'gambarMobils', 'mobilTerbaru'));
    }

    public function adminDataBanner()
    {
        $banners = Banner::all();
        return view('admin/banner', compact('banners'));
    }
    public function pegawaiDataBanner()
    {
        $banners = Banner::all();
        return view('pegawai/banner', compact('banners'));
    }

    public function adminEditBanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin/edit-banner', compact('banner'));
    }
    public function pegawaiEditBanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view('pegawai/edit-banner', compact('banner'));
    }

    public function adminDataMobil()
    {
        $mobils = Mobil::orderBy('id', 'desc')->get();
        return view('admin/data-mobil', compact('mobils'));
    }
    public function pegawaiDataMobil()
    {
        $mobils = Mobil::orderBy('id', 'desc')->get();
        return view('pegawai/data-mobil', compact('mobils'));
    }

    public function adminEditMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        $gambars = $mobil->gambarMobils;
        return view('admin/edit-mobil', compact('mobil', 'gambars'));
    }
    public function pegawaiEditMobil($id)
    {
        $mobil = Mobil::findOrFail($id);
        $gambars = $mobil->gambarMobils;
        return view('pegawai/edit-mobil', compact('mobil', 'gambars'));
    }

    public function adminProfil()
    {
        $user = Auth::user()->id;
        return view('admin/profil', compact('user'));
    }
    public function pegawaiProfil()
    {
        $user = Auth::user()->id;
        return view('pegawai/profil', compact('user'));
    }
}
