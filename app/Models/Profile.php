<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['nama_akun', 'email', 'gender', 'umur', 'tanggal_lahir', 'alamat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
