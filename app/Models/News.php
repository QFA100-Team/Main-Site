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
        return $this->hasOne(User::class, 'id', 'author_id')->withDefault();
    }

    //Gain Access to staff_roles from users tab
    public function author_roles()
    {
        return $this->hasOne(Staff::class, 'u_id', 'author_id')->withDefault();
    }

    public function news_type(){
        return $this->hasOne(NewsType::class, 'id', 'type_id');
    }
}
