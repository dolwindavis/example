<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
	protected $fillable=['body'];
    public function card()
    {
    	return $this->belongsTo(Card::class);
    }
    public function by(User $user)
    {
    	$this->user_id=$user->id;
    }
       public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
