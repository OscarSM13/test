<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'publish_date',
    ];

    protected $dates = [
        'publish_date'
    ];
}
