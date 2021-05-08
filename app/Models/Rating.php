<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }
    public function homestay(){
        return $this->belongsTo('App\Models\Homestay', 'homestay_id','id');
    }
    public function bill(){
        return $this->belongsTo('App\Models\Bill', 'bill_id','id');
    }
}
