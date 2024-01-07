<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KamarController extends Controller
{
    public function index()
    {

        $data = kamar::all();
        return view('../admin.datakamar', compact('data'));
    }

    public function tambahkamar()
    {
        return view('../admin.tambahkamar');
    }

    public function insertdatakamar(Request $request)
    {
        // dd($request->all());
        $data = kamar::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotokamar/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('kamar')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {

        $data = kamar::find($id);
        // dd($data);

        return view('../admin.tampilkamar', compact('data'));
    }

    public function updatedatakamar(Request $request, $id)
    {
        $data = kamar::find($id);
        $data->update($request->all());
        return redirect()->route('kamar')->with('success', 'Data Berhasil Di Update');
    }

    public function deletekamar($id)
    {
        $data = kamar::find($id);
        $data->delete();
        return redirect()->route('kamar')->with('success', 'Data Berhasil Di Hapus');
    }
}
