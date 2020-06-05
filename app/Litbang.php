<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Litbang extends Model
{
    protected $table = 'litbang';
    protected $fillable = ['name', 'position', 'department', 'faculty', 'quote', 'image'];
}
