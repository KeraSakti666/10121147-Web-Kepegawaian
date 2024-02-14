<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'data_pegawai';

    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'nomor_telepon',
        'jk'
    ];
}
