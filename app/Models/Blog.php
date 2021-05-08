<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    public function district(){
        return $this->belongsTo('App\Models\District', 'maqh','maqh');
    }
    public function image(){
        return $this->hasMany('App\Models\ImageBlog', 'blog_id','id');
    }
}
