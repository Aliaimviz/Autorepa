<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $fillable = [
        'id','name', 'location', 'description', 'created_at', 'updated_at', 
    ];
}
