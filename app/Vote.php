<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function talk(){
    	return $this->belongsTo('App\Talk');
    }
}
