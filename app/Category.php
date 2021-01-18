<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
    protected $fillable = ['category_name'];

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
