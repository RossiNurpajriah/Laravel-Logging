<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['nama', 'harga', 'stok', 'berat', 'gambar', 'kondisi', 'deskripsi'];
}
