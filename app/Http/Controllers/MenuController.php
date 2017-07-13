<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //

    public function menu($id = 'No hay datos')
    {
    	$menu = Menu::find($id);
    	$menu->language;
    	$menu->user;
    	return dd($menu);
    }
}
