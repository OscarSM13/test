<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Biography extends Model
{
    use HasTranslations;
    
    public $translatable = ['description'];

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
