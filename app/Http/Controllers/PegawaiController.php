<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    public function index()
    {

        $data = pegawai::all();
        return view('../admin.datapegawai', compact('data'));
    }

    public function tambahpegawai()
    {
        return view('../admin.tambah_pegawai');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        $data = pegawai::create($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {

        $data = pegawai::find($id);
        // dd($data);

        return view('../admin.tampilpegawai', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Di Hapus');
    }
}
