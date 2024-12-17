<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarMobil extends Model
{
    use HasFactory;
    protected $table = 'gambar_mobils';
    protected $fillable = [
        'mobil_id', // Foreign key ke tabel mobil
        'nama_file',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
}
