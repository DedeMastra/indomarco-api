<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // Primary Key
    public $primaryKey = 'id';
    
    protected $fillable = [
        'nama_barang',
        'stok_barang',
        'harga_barang',
        'umur_barang',
        'satuan_barang'
    ];
}