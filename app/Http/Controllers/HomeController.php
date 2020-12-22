<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('daftar-menu.home');
    }

    public function maps(){
        return view('daftar-menu.maps');
    }

    public function check(){
        return view('daftar-menu.check');
    }

    public function pertanyaan(){
        return view('daftar-menu.pertanyaan');
    }

    public function responden(){
        return view('daftar-menu.responden');
    }
}
