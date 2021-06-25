<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['location_id','hotel_name','room_numbers','minimum_price','hotel_facilities','address','description','hotel_image'];
}
