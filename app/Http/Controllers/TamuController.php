<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function booking()
    {

        return view('booking');
    }
}
