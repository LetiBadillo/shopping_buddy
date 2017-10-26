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
        'feedback',
        'user_id',
        'assigned_employee_id'
    ];

    protected $appends = ['userName', 'employeeName'];

    public function getUserNameAttribute(){
        return $this->client()->get()[0]['name'].' '.$this->client()->get()[0]['last_name'];
    }

    public function getEmployeeNameAttribute(){
        return $this->employee['name'].' '.$this->employee['last_name'];
    }
    public function client(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function employee(){
        return $this->hasOne('App\User', 'id', 'assigned_employee_id');
    }
      
}
