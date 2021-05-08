<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Uti_pro extends Model
{
    use HasFactory;
    use Pivot;

    protected $table = 'uti_pro';
    protected $fillable = ['id', 'product_id', 'utilities_id'];
}
