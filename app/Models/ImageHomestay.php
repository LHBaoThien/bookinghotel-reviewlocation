<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageHomestay extends Model
{
    use HasFactory;

    protected $table = 'images_homestay';
    protected $fillable = ['id', 'url', 'homestay_id', 'status'];

    public function homestay(){
        return $this->belongsTo('App\Models\Homestay', 'homestay_id','id');
    }


}
