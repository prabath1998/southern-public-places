<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicPlace extends Model
{
    protected $fillable = ['id', 'name', 'amenity', 'latitude', 'longitude'];

}
