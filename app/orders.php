<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    //
    public function users(){
    	return $this->belongsTo('App\Users');
    }
}
