<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';

    //Primary Key of posts
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;
}
