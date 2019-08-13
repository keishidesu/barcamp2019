<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function like(){
    	return $this->belongsTo('App\Like');
    }
}
