<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //Table Name
    protected $table = 'news';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //Get Author Details of News Post
    public function author(){
        return $this->hasOne(User::class, 'id', 'author_id');
    }
}
