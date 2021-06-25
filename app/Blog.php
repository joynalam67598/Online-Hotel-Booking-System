<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['blog_title','writer_name','publication_status','blog_image','blog_image'];
}
