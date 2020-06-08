<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentImages extends Model
{
    protected $table = 'department_images';
    protected $fillable = ['image'];
}
