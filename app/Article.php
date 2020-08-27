<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    // protected $fillable = ['title','author','image','content', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7','date', 'tanggal', 'image_caption'];
    protected $guarded = ['id'];
}
