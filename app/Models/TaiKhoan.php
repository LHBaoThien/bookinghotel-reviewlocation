<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];
}
