<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    public function language()
    {
    	return $this->belongsTo(Language::class,'idioma_id');
    }

    public function menus()
    {
    	return $this->hasMany(Menu::class);
    }
}
