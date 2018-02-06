<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [

        'name','description','image','video','newsDate','event','eventEndTime','showCount'

    ];
}
