<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Supplier;
use App\Models\Barang;

class PemesananController extends Controller
{
    public function index()
    {
        // dd(Barang::all()->last()->id);
        // $barang = Barang::all();
        // $supplier = Supplier::all();
        // echo Barang::all();
        // echo Supplier::all();
        // echo Pemesanan::where('Barang', 'Barang.id')->get();
        // echo Pemesanan::has('barang.id')->get(); // untuk manggul di model barang ada method id

        return Pemesanan::with('Barang', 'Supplier')->get();
    }
    public function show($id)
    {
        $supplier = Pemesanan::whereId($id)->first();
        return $supplier;

    }

    public function create(request $request)
    {
        $supplier = new Pemesanan;
        $supplier->barang_id = $request->barang_id;
        $supplier->supplier_id = $request->supplier_id;
        $supplier->tanggal_pemesanan = $request->tanggal_pemesanan;
        $supplier->jumlah_pemesanan = $request->jumlah_pemesanan;
        
        $supplier->save();
        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id)
    {
        $supplier = Pemesanan::find($id);
        $supplier->barang_id = $request->barang_id;
        $supplier->supplier_id = $request->supplier_id;
        $supplier->tanggal_pemesanan = $request->tanggal_pemesanan;
        $supplier->jumlah_pemesanan = $request->jumlah_pemesanan;

        $supplier->save();
        return $supplier;
    }
    

    public function delete($id)
    {
        $supplier = Pemesanan::find($id);
        $supplier->delete();

        return "Data Berhasil di Hapus";
    }
}
