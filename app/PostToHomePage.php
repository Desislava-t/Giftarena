<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostToHomePage extends Model
{
    protected $fillable=[
        'title',
        'content',
    ];
}
