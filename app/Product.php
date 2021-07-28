<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getPrice($product_id)
    {
    	$product=Product::find($product_id);
    	return $product->price;
    }
}
