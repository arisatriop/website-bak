<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'photo_album';
    protected $fillable = ['image','album_name'];
}
