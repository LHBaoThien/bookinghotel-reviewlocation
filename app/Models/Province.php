<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'provinces';

    public function district(){
        return $this->hasMany('App\Models\District', 'matp','matp');
    }
    public function homestay(){
        return $this->hasMany('App\Models\Homestay', 'matp','matp');
    }
}
