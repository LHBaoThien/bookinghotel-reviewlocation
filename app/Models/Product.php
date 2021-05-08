<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities;
use App\Models\Uti_Pro;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['id', 'homestay_id', 'room_type_id', 'name', 'prices', 'area','discount', 'avatar', 'description', 'status'];

    public function roomType(){
        return $this->belongsTo('App\Models\RoomType', 'room_type_id','id');
    }
    public function homestay(){
        return $this->belongsTo('App\Models\Homestay', 'homestay_id','id');
    }
    public function utilities(){
        return $this->belongsToMany('App\Models\Utilities', 'uti_pro','product_id','utilities_id');
    }
    public function order(){
        return $this->hasMany('App\Models\Order','product_id','id');
    }
    public function image(){
        return $this->hasMany('App\Models\ImageProduct','product_id','id');
    }

}
