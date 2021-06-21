<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        // dd(Barang::all()->last()->id);
        return Barang::all();
    }
    public function show($id)
    {
        $barang = Barang::whereId($id)->first();
        return $barang;

    }

    public function create(request $request)
    {
        $barang = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->stok_barang = $request->stok_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->umur_barang = $request->umur_barang;
        $barang->satuan_barang = $request->satuan_barang;
        
        $barang->save();
        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->stok_barang = $request->stok_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->umur_barang = $request->umur_barang;
        $barang->satuan_barang = $request->satuan_barang;

        $barang->save();
        return $barang;
    }
    

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return "Data Berhasil di Hapus";
    }
}
