<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATSIMRating extends Model
{
    use HasFactory;

    protected $table = 'vatsim_ratings';

    public $primaryKey = 'id';
}
