<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATSIM extends Model
{
    use HasFactory;

    protected $table = 'vatsim_db';

    public $primaryKey = 'cid';
}
