<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasTranslations;
    use HasMediaTrait;
    
    public $translatable = ['title', 'description'];

    protected $fillable = [
        'image',
        'title', 
        'description', 
        'publish_date',
        'category_id',
    ];

    protected $dates = [
        'publish_date'
    ];

    public function registerMediaCollections(Media $media = null) {
        $this
            ->addMediaConversion('thumb-blog')  
            ->width(1170)
            ->height(520);

        $this
            ->addMediaConversion('thumb-column-blog')
            ->width(100)
            ->height(50);
    }

    public function category() {
        return $this->belongsTo(BlogCategory::class);
    }

    public function tags() {
        return $this->belongsToMany(BlogTag::class);
    }

}
