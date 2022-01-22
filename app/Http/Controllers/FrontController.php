<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function jam()
    {
        return view('front.jam');
    }
    public function lihat()
    {
        return view('front.lihat');
    }
}
