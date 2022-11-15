<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATSIMUser extends Model
{
    use HasFactory;

    protected $table = 'vatsim_users';

    protected $fillable = [
        'cid',
        'atc_rating',
        'pilot_rating',
        'region',
        'division',
        'subdivision',
        'last_rating_change',
    ];

    public $primaryKey = 'cid';

    public function pilot_ratings(){
        return $this->hasOne(VATSIMRating::class, 'id', 'pilot_rating');
    }

    public function atc_ratings(){
        return $this->hasOne(VATSIMRating::class, 'id', 'atc_rating');
    }
}
