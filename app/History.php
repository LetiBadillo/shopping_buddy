<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    protected $table = 'users_history';

    protected $fillable = ['user_id', 'plan_id', 'start_date', 'end_date', 'conversations_available',
    'conversations_count', 'renewals'];


    protected $appends = ['plan', 'userName'];
    
    public function getPlanAttribute(){
        return $this->plan()->get()[0];
    }
    public function getUserNameAttribute(){
        return $this->client()->get()[0]['name'].' '.$this->client()->get()[0]['last_name'];
    }

    public function client(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function plan(){
        return $this->belongsTo('App\Plan', 'plan_id', 'id');
    }

}
