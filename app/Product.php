<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Product extends Model
{
    protected $fillable = ['image','name','price','description'];

    public function category(){
    	return $this->hasMany(Category::class);
    }
}
