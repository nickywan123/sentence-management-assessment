<?php

namespace App\Http\Controllers;

use App\Matrix;
use App\Sentence;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SentencesController extends Controller
{
    public function index(){

        //display all the sentences
       
        $sentences = Sentence::all()->keyBy('matrix');

        return view('index')->with([
            'sentences' => $sentences
        ]);

    }


    public function edit(Sentence $matrix){
        //show edit page for the sentence

        $matrices = Matrix::all();
         
        return view('edit')->with(['sentence' =>$matrix, 'matrices' => $matrices]);
    }

    public function update(Request $request,Sentence $matrix){
        //validate requests
    
        $validated = $request->validate([
            'matrix' => ['required' ,Rule::unique('sentences')->ignore($matrix->id)],
            'color' => ['required'],
        ]);

        //update new matrix position
        $matrix->update([
            'matrix' => $request->matrix,
            'color' => $request->color
        ]);

        return redirect('/');
    }

}
