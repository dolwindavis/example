<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\card;
class CardsController extends Controller
{
    public function index()
    {
    	$cards=card::all();
    	return view('cards.index',compact('cards'));
    }
    public function show(card $card)
    {
    	$card->load('notes.User');
    	return view('cards.show',compact('card'));
    }

}
