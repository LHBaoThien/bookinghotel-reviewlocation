<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    public function ward(){
        return $this->hasMany('App\Ward', 'maqh','maqh');
    }
    public function province(){
        return $this->belongsTo('App\Province', 'matp','matp');
    }
    public function homestay(){
        return $this->hasMany('App\Homestay', 'maqh','maqh');
    }
    public function blog(){
        return $this->hasMany('App\Blog', 'maqh','maqh');
    }
}
