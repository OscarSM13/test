<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class BlogTag extends Model
{
    use HasTranslations;
    
    public $translatable = ['title'];
    
    protected $fillable = [
        'title',
    ];

    public function blogs() {
        return $this->belongsToMany(Blog::class);
    }
}
