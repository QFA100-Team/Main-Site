<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //Table Name
    protected $table = 'users';

    protected $fillable = [
        'f_name',
        'l_name',
        'vatsim_cid',
        'dob',
        'display_name',
        'name_url',
        'is_pilot',
        'is_staff',
        'is_approved',
        'email',
        'password',
    ];

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

    //Get Events Attended by User
    public function event_attendance(){
        return $this->hasMany(EventAttendance::class, 'user_id', 'id');
    }
}
