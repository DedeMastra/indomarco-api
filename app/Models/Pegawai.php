<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pegwai', 
        'kode_cabang', 
        'nama_pegawai', 
        'divisi_pegawai', 
        'jabatan_pegawai',
        'no_pegawai', 
        'alamat_pegawai', 
        'gaji_pegawai', 
        'shift_pegawai'
    ];
}
