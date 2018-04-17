<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Slider extends Model
{
    use HasTranslations;
    
    public $translatable = ['title', 'description', 'button'];

    protected $fillable = [
        'image',
        'title', 
        'description',
        'button',
        'link',
    ];

}
