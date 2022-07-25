<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable = [
        'gambar_paket', 'judul_paket', 'angsuran_paket', 'tanggal', 'jumlah_paket',
    ];

    protected $hidden = [];
}
