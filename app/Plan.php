<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plans';

    protected $fillale = ['name', 'conversations_available', 'duration', 'duration_string',  'price', 'assesment', 'search'];
    
    public function user_history(){
        return $this->belongsTo('App\History', 'id', 'plan_id');
    }
    public function sales(){
        return $this->belongsTo('App\Sale', 'id', 'plan_id');
    }
}
