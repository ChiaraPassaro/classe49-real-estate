<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'address',
        'city',
        'rooms',
        'mq',
        'level',
        'photo',
        'is_rent',
        'is_sale',
        'price',
        'created_at',
        'updated_at'
    ];
}
