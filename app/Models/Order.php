<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id','id');
    }
    public function bill(){
        return $this->belongsTo('App\Models\Bill', 'bill_id','id');
    }
}
