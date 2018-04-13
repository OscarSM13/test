<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class BlogCategory extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
    ];

    public $translatable = ['title'];

    public function blogs() {
        return $this->hasMany(Blog::class);
    }

}
