<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bills';

    public function order(){
        return $this->hasMany('App\Models\Order', 'bill_id','id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }
    public function rating(){
        return $this->hasOne('App\Models\Rating', 'bill_id','id');
    }
}
