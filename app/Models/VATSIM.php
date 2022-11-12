<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATSIM extends Model
{
    use HasFactory;

    protected $table = 'vatsim_users';

    public $primaryKey = 'cid';

    public function pilot_ratings(){
        return $this->hasOne(Rating::class, 'id', 'pilot_rating');
    }

    public function atc_ratings(){
        return $this->hasOne(Rating::class, 'id', 'atc_rating');
    }
}
