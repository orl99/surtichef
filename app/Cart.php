<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CartDetail;
class Cart extends Model
{
    public function details()
    {
    	return $this->hasMany(CartDetail::class);
    }
}
