<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Homestay extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'homestays';

    protected $fillable = ['id', 'name', 'alias', 'avtar', 'keyword(SE0)', 'status', 'user_id', 'matp', 'maqh','xaid','title','description','point'];

    public function product(){
        return $this->hasMany('App\Models\Product', 'homestay_id','id');
    }
    public function rating(){
        return $this->hasMany('App\Models\Rating', 'homestay_id','id');
    }
    public function image(){
        return $this->hasMany('App\Models\ImageHomestay', 'homestay_id','id');
    }
    public function province(){
        return $this->belongsTo('App\Models\Province', 'matp','matp');
    }
    public function district(){
        return $this->belongsTo('App\Models\District', 'maqh','maqh');
    }
    public function ward(){
        return $this->belongsTo('App\Models\Ward', 'xaid','xaid');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
