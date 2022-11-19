<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetails extends Model
{
    use HasFactory;

    protected $table = 'event_details';

    public $primaryKey = 'id';

    public function event_details(){
        return $this->hasOne(VATSIMRating::class, 'id', 'pilot_rating');
    }

    public function event_type(){
        return $this->hasOne(EventType::class, 'id', 'type');
    }

    public function roster_schedule(){
        return $this->hasMany(EventSchedule::class, 'event_id', 'id');
    }
}
