<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psdm extends Model
{
    protected $table = 'psdm';
    protected $fillable = ['name', 'position', 'department', 'faculty', 'quote', 'image'];
}
