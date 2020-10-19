<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [ "IMDB" , "description" , "genre_id"];
}
