<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    Protected $fillable = ['imagePath', 'desceription', 'title', 'price'];
}
