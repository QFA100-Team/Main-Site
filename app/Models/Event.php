<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'event_details';

    //Primary Key
    public $primaryKey = 'id';
}
