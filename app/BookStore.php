<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookStore extends Model
{
    //
    protected $fillable = [
        'name', 'ISBN', 'value',
    ];
}
