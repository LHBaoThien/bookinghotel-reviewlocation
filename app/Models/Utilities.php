<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;

    protected $table = 'utilities';

    public function product(){
        return $this->belongsToMany('App\Models\Product', 'uti_pro','product_id','utilities_id');
    }
}
