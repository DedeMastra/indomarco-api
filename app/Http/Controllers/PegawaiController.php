<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        return Pegawai::all();
    }

    public function create(request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->kode_pegawai = $request->kode_pegawai;
        $pegawai->kode_cabang = $request->kode_cabang;
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->divisi_pegawai = $request->divisi_pegawai;
        $pegawai->jabatan_pegawai = $request->jabatan_pegawai;
        $pegawai->no_pegawai = $request->no_pegawai;
        $pegawai->alamat_pegawai = $request->alamat_pegawai;
        $pegawai->gaji_pegawai = $request->gaji_pegawai;
        $pegawai->shift_pegawai = $request->shift_pegawai;
        
        $pegawai->save();

        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id)
    {
        $pegawai=Pegawai::find($id);
         $pegawai->kode_pegawai = $request->input('kode_pegawai');
         $pegawai->kode_cabang = $request->input('kode_cabang');
         $pegawai->nama_pegawai = $request->input ('nama_pegawai');
         $pegawai->divisi_pegawai = $request->input ('divisi_pegawai');
         $pegawai->jabatan_pegawai = $request->input ('jabatan_pegawai');
         $pegawai->no_pegawai = $request->input ('no_pegawai');
         $pegawai->alamat_pegawai = $request->input ('alamat_pegawai');
         $pegawai->gaji_pegawai = $request->input ('gaji_pegawai');
         $pegawai->shift_pegawai = $request->input ('shift_pegawai');

        $pegawai->save();
         return $pegawai;
    }
    

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return "Data Berhasil di Hapus";
    }


public function show($id)
    {
        $pegawai = Pegawai::whereId($id)->first();
        return $pegawai;

    }
}