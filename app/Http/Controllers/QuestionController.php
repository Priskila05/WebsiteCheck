<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id','asc')->paginate(5);
        return view('question.index',compact('questions'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'tanya'=>'required',
            'opsi1' => 'required',
            'opsi2'=>'required',
        ]);

        Question::create($request->all());
        return redirect()->route('question.index')
                        ->with('success','Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $question = Question::find($id);
        return view('question.detail', compact('question'));
    }

    public function edit($id)
    {
        $question = Question::find($id);
        return view('question.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanya'=>'required',
            'opsi1' => 'required',
            'opsi2'=>'required',
        ]);
        $question = Question::find($id);
        $question->tanya = $request->get('tanya');
        $question->opsi1 = $request->get('opsi1');
        $question->opsi2 = $request->get('opsi2');
        $question->save();
        return redirect()->route('question.index')
                            ->with('success', 'Data berhasil diupdate');
    }

    public function tampil(){
        $fetch_data2 = DB::select('select * from question');
        return view('isiKuisioner.input', ['fetch_data2' => $fetch_data2]);
    }

    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('question.index')
                            ->with('success', 'Data Pertanyaan berhasil dihapus');
    }
}
