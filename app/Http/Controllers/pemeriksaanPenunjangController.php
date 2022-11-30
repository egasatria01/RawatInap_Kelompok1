<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemeriksaanPenunjangController extends Controller
{
    public function index(Request $request)
    {
        return view('pemeriksaanPenunjang');
    }
}
