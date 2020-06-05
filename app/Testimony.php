<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonials';
    protected $fillable = ['name','position','quote','avatar'];
}
