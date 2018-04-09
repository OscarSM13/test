<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function blogs() {
        return $this->hasMany(Blog::class);
    }
}
