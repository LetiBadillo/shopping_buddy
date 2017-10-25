<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = 'conversations';

    protected $fillable = [
        'message',
        'brands',
        'effectiveness',
        'feedback'
    ];

    public function client(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    public function employee(){
        return $this->hasOne('App\User', 'id', 'assigned_employee_id');
    }
      
}
