<!-- <?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return Admin::all();
    }

    public function create(request $request)
    {
        $admin = new Admin;
        $admin->nama_dokumen = $request->nama_dokumen;
        $admin->jenis_dokumen = $request->jenis_dokumen;
        $admin->pemilik_dokumen = $request->pemilik_dokumen;
        $admin->tanggal_terbit = $request->tanggal_terbit;
        $admin->save();

        return "Data Berhasil Masuk";
    }


    public function update(Request $request, $id_dokumen)
    {
        $admin = Admin::find($id_dokumen);
        $admin->update($request->all());

        return "Data Berhasil di Update";
    }



    public function delete($id_dokumen)
    {
        $admin = admin::find($id_dokumen);
        $admin->delete();

        return "Data Berhasil di Hapus";
    }
}
 -->