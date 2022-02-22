<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Categories;
use App\Models\Answers;
use App\Models\User;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Questions::all();
        return view('question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('question.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $question = new Questions;
        
        $question->title = $request -> title;
        $question->body = $request -> body;
        $question->categories_id = $request -> categories_id;
        
        $question->users_id = auth()->user()->id ;
        if($request->hasFile('image') && $request->file('image')->isValid()){
        $question->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $question->save();
        
        

        
        
        return redirect('/question')->with('success', 'Pertanyaan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $question = Questions::where('id',$id)->first();
        return view('question.show', compact('question'));
    }

    
    public function indexCurrentUserQuestion()
    {
        //
        $questions = User::find(auth()->user()->id) -> questions() -> get();
        return view('question.indexcurrent', compact('questions'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Questions::where('id',$id)->first();
        $categories = Categories::all();
        return view('question.edit', compact('question','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Questions::where('id', $id)
            ->update([
                'title' => $request->title,
                'body' => $request->body,
                'categories_id' => $request -> categories_id,
            ]);
        return redirect('/question')->with('success', 'Berhasil Update Pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $question = Questions::find($id);
        $answer = Answers::where('questions_id', $id);
        $answer->delete();
        $question->delete();
        return redirect('/user/question')->with('success', 'Pertanyaan Berhasil Dihapus');
    }
}
