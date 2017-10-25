<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table = 'sales';

    protected $fillable = ['user_id', 'type', 'plan_id', 'payment', 'payment_type'];
    
    public function client(){
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function plan(){
        return $this->hasOne('App\History', 'plan_id', 'id');
    }
}
