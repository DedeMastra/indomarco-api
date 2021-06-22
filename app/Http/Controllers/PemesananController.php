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
        echo Pemesanan::has('barangs.id')->get();

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
        $supplier->kode_barang = $request->kode_barang;
        $supplier->kode_supplier = $request->kode_supplier;
        $supplier->tanggal_pemesanan = $request->tanggal_pemesanan;
        $supplier->jumlah_pemesanan = $request->jumlah_pemesanan;
        
        $supplier->save();
        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id)
    {
        $supplier = Pemesanan::find($id);
        $supplier->kode_barang = $request->kode_barang;
        $supplier->kode_supplier = $request->kode_supplier;
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
