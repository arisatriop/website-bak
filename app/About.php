<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['info1', 'info2', 'info3', 'info4', 'info5', 'info6', 'info7'];
}
