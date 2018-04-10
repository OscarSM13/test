<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'publish_date',
        'category_id',
    ];

    protected $dates = [
        'publish_date'
    ];

    public function category() {
        return $this->belongsTo(BlogCategory::class);
    }

    public function tags() {
        return $this->belongsToMany(BlogTag::class);
    }
}
