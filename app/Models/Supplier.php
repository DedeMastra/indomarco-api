<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    // Primary Key
    public $primaryKey = 'supplier_id';
    
    protected $fillable = [
        'nama_supplier',
        'no_supplier'
    ];

    public function Pemesanan()
    {
        return $this->hasMany('App\Models\Pemesanan');
    }
}
