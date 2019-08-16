<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Talk;
use App\Vote;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TalkController extends Controller
{
    public function index(){
    	$talks = Talk::orderBy('created_at','desc')-> get();


    	return view('talks.index',['talks'=> $talks]);
    }

    public function voteTalk(Request $request){
    	$talk_id = $request['talkId'];


    	$is_vote = $request['isVote'] === 'true';
    	$update = false;
    	$talk = Talk::find($talk_id);

    	if (!$talk) {
    		return null;
    	}

    	$user = Auth::user();
    	$vote = $user -> votes()-> where('talk_id', $talk_id)->first();
    	if ($vote){
    		$already_vote = $vote->vote;
    		$update = true;
    		if ($already_vote == $is_vote){
    			$vote->delete();
    			return null;
    		}
    	} else{
    		$vote = new Vote();
    	}


    	$vote->vote = $is_vote;
    	$vote->user_id = $user->id;
    	$vote->talk_id = $talk->id;


    	if ($update){
    		$vote->update();
    	} else{
    		$vote->save();
    	}

    	return null;
    }
}
