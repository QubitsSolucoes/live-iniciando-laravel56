<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Eloquent
class Product extends Model
{
    //products
    protected $fillable = ['name','description','price'];

    protected $casts = [
        'name' => 'array'
    ];

}
