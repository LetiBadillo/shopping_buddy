<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $fillable = ['name',
    'last_name', 'email', 'password', 'user_type', 'birthday', 'gender'];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function conversation(){
        return $this->belongsTo('App\Conversation', 'user_id', 'id');
    }
    
    public function conversation_employee(){
        return $this->belongsTo('App\Conversation', 'assigned_employee_id', 'id');
    }
    public function history(){
        return $this->belongsTo('App\History', 'user_id', 'id');
    }

    public function sale(){
        return $this->belongsTo('App\Sale', 'user_id', 'id');
    }

    

}
