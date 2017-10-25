<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $table = 'users_history';

    protected $fillable = ['user_id', 'plan_id', 'start_date', 'end_date', 'conversations_available',
    'conversations_count', 'renewals'];


    public function client(){
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function plan(){
        return $this->hasOne('App\History', 'plan_id', 'id');
    }

}
