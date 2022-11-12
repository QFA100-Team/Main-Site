<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VATSIMOnline extends Model
{
    use HasFactory;

    protected $table = 'vatsim_online';

    public $primaryKey = 'cid';

    protected $fillable ='u_cid';
}
