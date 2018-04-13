<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    use HasTranslations;
    
    public $translatable = ['title', 'description'];
    protected $fillable = [
        'title', 
        'description',
        'image',
    ];
}
