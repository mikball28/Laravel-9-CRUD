<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddData extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'nick_name',
        'phone_number'
    ];
}
