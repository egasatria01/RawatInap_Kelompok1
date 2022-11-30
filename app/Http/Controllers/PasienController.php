<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        return view('pasien');
    }
}
