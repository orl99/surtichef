<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class user_favs extends Model
{
    protected $fillable = ["id_user","id_product", "status_favs"];
}
