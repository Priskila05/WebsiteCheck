<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kuisioner;

class KuisionerController extends Controller
{
    public function tampil(){
        $fetch_data2 = DB::select('select * from question');
        return view('isiKuisioner.input', ['fetch_data2' => $fetch_data2]);
    }

    public function postAnswer(Request $request){
        $this->validate($request, [
            'responden' => 'required|min:5',
            'pertanyaan1'        => 'required',
            'pertanyaan2'        => 'required',
            'pertanyaan3'        => 'required',
            'pertanyaan4'        => 'required',
            'pertanyaan5'        => 'required',
            'pertanyaan6'        => 'required'
        ]);

        Kuisioner::create($request->all());
        return redirect('isiKuisioner/berhasil');
    }
}
