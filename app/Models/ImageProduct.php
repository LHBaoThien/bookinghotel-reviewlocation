<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;

    protected $table = 'images_product';

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id','id');
    }
}
