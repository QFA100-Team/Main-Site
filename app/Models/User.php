<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Table Name
    protected $table = 'users';

    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;    

    public function staff_details(){
        return $this->hasOne(Staff::class, 'u_id', 'id');
    }

    public function vatsim_details(){
        return $this->hasOne(VATSIMUser::class, 'cid', 'vatsim_cid');
    }

    public function event_attendance(){
        return $this->hasManyThrough(EventAttendance::class, EventDetails::class, 'id', 'user_id', 'id', 'id');
    }
}
