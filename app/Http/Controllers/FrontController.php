<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $jam=Barang::all();
        return view('front.home',compact('jam'));
    }
    public function jam()
    {
        $jam=Barang::all();
        return view('front.jam',compact('jam'));
    }
    public function lihat(Barang $barang)
    {
        return view('front.lihat',compact('barang'));
    }
}
