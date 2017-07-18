<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function language()
    {
    	return $this->belongsTo(Language::class,'idioma_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
