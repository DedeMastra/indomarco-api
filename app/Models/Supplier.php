<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    // Primary Key
    // public $primaryKey = 'supplier_id';
    
    // protected $fillable = [
    //     'nama_supplier',
    //     'no_supplier'
    // ];

    protected $table = "suppliers";

    public function pemesanan()
    {
        return $this->hasMany('App\Models\Pemesanan');
        // return $this->belongsTo('App\Models\Pemesanan');
    }
}
