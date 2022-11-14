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
}
