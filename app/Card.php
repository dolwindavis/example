<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
    	return $this->hasMany('App\Notes');
    }
    public function path()
    {
    	return '/cards/'.$this->id;
    }
    public function addNote(Notes $note,$userid)
    {
        $note->user_id=$userid;
    	return $this->notes()->save($note);
    }
 }
