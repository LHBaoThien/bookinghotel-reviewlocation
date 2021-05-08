<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelBill extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    protected $table = 'cancel_bill';
    protected $fillable = ['bill_id','token'];
}
