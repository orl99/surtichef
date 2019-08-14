<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class user_favs extends Model
{

    protected $fillable = ["id_user","id_product", "status_favs"];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function products()
    {
    	return $this->hasMany(product::class);
    }
}
