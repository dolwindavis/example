<?php

namespace App\Http\Controllers;
use App\Card;
use App\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
    	
    	$note=new Notes;
        $note->user_id=1;
    	// $note->body=$request->body;
    	// $card->notes()->save($note);
        $card->addNote($note);
                

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
