<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    use HasFactory;
        //Table Name
        protected $table = 'news_type';
        //Primary Key
        public $primaryKey = 'id';
}
