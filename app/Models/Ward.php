<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $table = 'wards';

    public function user(){
        return $this->hasMany('App\Models\User', 'xaid','xaid');
    }
    public function homestay(){
        return $this->hasMany('App\Models\Homestay', 'xaid','xaid');
    }
    public function blog(){
        return $this->hasMany('App\Models\Blog', 'xaid','xaid');
    }
    public function district(){
        return $this->belongsTo('App\Models\District', 'maqh','maqh');
    }
}
