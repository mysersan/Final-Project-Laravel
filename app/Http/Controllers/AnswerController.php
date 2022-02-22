<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answers;
use App\Models\User;

class AnswerController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        //
        $answer = new Answers;
        $answer->body = $request -> body;
        $answer->like = 0;
        $answer->questions_id = $id;
        $answer->users_id = auth()->user()->id ;
        $answer->save();

        
        
        return redirect('/question')->with('success', 'Jawaban berhasil diinput');
    }

    //Menampilkan jawaban dari user yang sedang aktif
    public function indexCurrentUserAnswer()
    {
        $answers = User::find(auth()->user()->id) -> answers() -> get();
        return view('answer.indexcurrent', compact('answers'));
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
        $answer = Answers::where('id',$id)->first();
        return view('answer.edit', compact('answer'));
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
        Answers::where('id', $id)
            ->update([
                'body' => $request->body,
            ]);
        return redirect('/user/answer')->with('success', 'Berhasil Update Jawaban');
    }
    public function updateLike(Request $request, $id)
    {
        //
        Answers::where('id', $id)
            ->update([
                'like' => Answers::where('id',$id)->first()->like+1,
            ]);
        return redirect('/question');
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
        $answer = Answers::find($id);
        $answer->delete();
        return redirect('/user/answer')->with('success', 'Jawaban Berhasil Dihapus');
    }

}
