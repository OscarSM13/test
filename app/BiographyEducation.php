<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class BiographyEducation extends Model
{
    use HasTranslations;
    
    public $translatable = ['title', 'description'];

    protected $fillable = [
        'title', 
        'description',
    ];

}
