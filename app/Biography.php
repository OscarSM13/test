<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    protected $fillable = [
        'name', 
        'surnames', 
        'image',
        'email',
        'phone',
        'phone2',
        'job',
        'description',      
    ];

}
