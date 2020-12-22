<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function dataResponden(){
        //mengambil data dari table kuisioner
        $data_responden = DB::table('kuisioner')->paginate(10);

        //mengirim data kuisioner ke view responden.index
        return view('responden.index', ['data_responden' => $data_responden]);
    }

    public function cari(Request $request){
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table kuisioner sesuai pencarian data
        $data_responden = DB::table('kuisioner')->where('responden', 'like', "%".$cari."%")->paginate();

        //mengirim data kuisionerke view responden.index
        return view('responden.index', ['data_responden' => $data_responden]);
    }
}