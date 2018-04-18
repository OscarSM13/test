<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class PracticeArea extends Model implements HasMedia
{
    use HasTranslations;
    use HasMediaTrait;
    
    public $translatable = ['title', 'description'];

    protected $fillable = [
        'title', 
        'description',
        'image',
    ];

    public function registerMediaCollections(Media $media = null) {
        $this
            ->addMediaConversion('thumb-single-practice-area')  
            ->width(1920)
            ->height(400);

        $this
            ->addMediaConversion('thumb-practice-areas')
            ->width(279)
            ->height(200);
    }
}
