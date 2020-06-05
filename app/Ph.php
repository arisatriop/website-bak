<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ph extends Model
{
    protected $table = 'ph';
    protected $fillable = ['name','position','department','faculty','quote','image'];
}
