<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table = 'cate';

    protected $fillable = ['name', 'price', 'image'];

}
