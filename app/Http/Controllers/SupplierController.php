<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        // dd(Barang::all()->last()->id);
        return Supplier::all();
    }
    public function show($id)
    {
        $supplier = Supplier::whereId($id)->first();
        return $supplier;

    }

    public function create(request $request)
    {
        $supplier = new Supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->no_supplier = $request->no_supplier;
        
        $supplier->save();
        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->no_supplier = $request->no_supplier;

        $supplier->save();
        return $supplier;
    }
    

    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return "Data Berhasil di Hapus";
    }
}
