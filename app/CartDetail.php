<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\product;
class CartDetail extends Model
{
   public function product()
   {
   	return $this->belongsTo(Product::class);
   }
}
