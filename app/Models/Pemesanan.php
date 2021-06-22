<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    // Primary Key
    public $primaryKey = 'id';
    
    protected $fillable = [
        'kode_barang',
        'kode_supplier',
        'tanggal_pemesanan',
        'jumlah_pemesanan'
    ];
}
