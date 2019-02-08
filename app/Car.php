<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillabe = [
        'title', 'body', 'number_of_doors'
    ];
}
