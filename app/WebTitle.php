<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebTitle extends Model
{
    protected $table = 'web_titles';
    protected $fillable = ['bak_name','uii_name','description'];
}
