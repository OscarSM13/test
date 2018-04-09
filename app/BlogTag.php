<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable = [
        'title',
    ];

    public function blogs() {
        return $this->belongsToMany(Blog::class);
    }
}
