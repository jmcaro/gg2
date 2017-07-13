<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    public function language()
    {
    	return $this->belongTo(Language::class);
    }

    public function menus()
    {
    	return $this->hasMany(Menu::class);
    }
}
