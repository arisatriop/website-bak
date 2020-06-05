<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'audit';
    protected $fillable = ['name', 'position', 'department', 'faculty', 'quote', 'image'];
}
