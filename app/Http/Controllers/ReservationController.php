<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{

    // public function datareservation()
    // {
    //     $data = reservation::all();
    //     return view('../admin.datareservasi', compact('data'));
    // }


    // public function reservation()
    // {
    //     return view('booking');
    // }

    // public function booking(Request $request)
    // {

    //     $data = reservation::create($request->all());
    //     return redirect()->route('reservation')->with('success', 'Terimakasih Booking Berhasil');
    // }


    public function index()
    {
        $data = reservation::all();
        return view('../admin.datareservation', compact('data'));
    }

    public function tambahreservation()
    {
        return view('../admin.tambah_reservation');
    }

    public function insertdatareservation(Request $request)
    {
        // dd($request->all());
        $data = reservation::create($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect()->route('reservation')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandatareservation($id)
    {

        $data = reservation::find($id);
        // dd($data);

        return view('../admin.tampilreservation', compact('data'));
    }

    public function updatedatareservation(Request $request, $id)
    {
        $data = reservation::find($id);
        $data->update($request->all());
        return redirect()->route('reservation')->with('success', 'Data Berhasil Di Update');
    }

    public function deletereservation($id)
    {
        $data = reservation::find($id);
        $data->delete();
        return redirect()->route('reservation')->with('success', 'Data Berhasil Di Hapus');
    }
}
