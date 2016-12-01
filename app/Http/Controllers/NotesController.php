<?php

namespace App\Http\Controllers;
use App\Card;
use App\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
    	$this->validate($request,[
                'body'=>'required|min:10'
            ]);
    	
        $note =new Notes($request->all());
        $card->addNote($note,1);
                

    	return back();

    }

    public function edit(Notes $note)
    {
    	return view('notes.edit',compact('note'));  
    }
    public function update(Request $request,Notes $note,Card $card)
    {
    	$note->update($request->all());
    	return redirect('/cards/');
    }
}
