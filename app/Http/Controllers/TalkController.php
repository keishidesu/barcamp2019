<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Talk;
use App\Like;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;

class TalkController extends Controller
{
    public function index(){
    	$talks = Talk::orderBy('created_at','desc')-> get();
    	return view('talks.index',['talks'=> $talks	]);
    }
}
