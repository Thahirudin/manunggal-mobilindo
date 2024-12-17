<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'mobil_id',
        'pegawai_id',
        'harga',
        'nama_pembeli',
        'metode_pembayaran',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'pegawai_id'); // Relasi banyak ke satu
    }
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id'); // Relasi banyak ke satu
    }
}
