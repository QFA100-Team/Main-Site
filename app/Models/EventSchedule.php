<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    use HasFactory;

    protected $table = 'event_schedule';

    public $primaryKey = 'id';

    public function assigned_pilot(){
        return $this->hasOne(User::class, 'id', 'pilot_id')->withDefault();
    }
}
