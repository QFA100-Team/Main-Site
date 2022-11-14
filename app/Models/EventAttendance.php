<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttendance extends Model
{
    use HasFactory;

    protected $table = 'event_attendance';

    public $primaryKey = 'user_id';

    public function event_details(){
        return $this->hasOne(EventDetails::class, 'id', 'event_id');
    }
}
