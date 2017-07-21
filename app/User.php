<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    //

    use Authenticatable;

    public function language()
    {
    	return $this->belongsTo(Language::class,'idioma_id');
    }

    public function menus()
    {
    	return $this->hasMany(Menu::class);
    }

    public function getAuthPassword() {
    return $this->contraseña;
	}
}
