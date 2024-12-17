<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'detail',
        'user_id',
        'harga',
        'status'
    ];

    public function gambarMobils()
    {
        return $this->hasMany(GambarMobil::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class); // Relasi banyak ke satu
    }
    public function penjualans()
    {
        return $this->hasOne(Penjualan::class); // Relasi satu ke banyak
    }
}
