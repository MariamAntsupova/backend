<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechComments extends Model
{
    protected $fillable=[
    	"name","mail","post_id","comment"
    ];
}
