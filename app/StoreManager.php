<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreManager extends Model
{
    //
    protected $table = 'store_managers';

    protected $fillable = ['name', 'phone'];

}
