<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kuisioner;

class ChartController extends Controller
{
    public function total() {
        $data =  Kuisioner::all()->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan1_j1() {
        $data =  Kuisioner::where('pertanyaan1', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan1_j2() {
        $data =  Kuisioner::where('pertanyaan1', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan2_j1() {
        $data =  Kuisioner::where('pertanyaan2', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan2_j2() {
        $data =  Kuisioner::where('pertanyaan2', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan3_j1() {
        $data =  Kuisioner::where('pertanyaan3', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan3_j2() {
        $data =  Kuisioner::where('pertanyaan3', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan4_j1() {
        $data =  Kuisioner::where('pertanyaan4', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan4_j2() {
        $data =  Kuisioner::where('pertanyaan4', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan5_j1() {
        $data =  Kuisioner::where('pertanyaan5', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan5_j2() {
        $data =  Kuisioner::where('pertanyaan5', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan6_j1() {
        $data =  Kuisioner::where('pertanyaan6', 'Ya')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function pertanyaan6_j2() {
        $data =  Kuisioner::where('pertanyaan6', 'Tidak')->count();
        return view('daftar-menu.grafHasil', ['data' => $data]);
    }

    public function getKuisioner(){
        $query = DB::select('select * from kuisioner');
        return view('daftar-menu.grafHasil', ['query' => $query]);
    }

}
