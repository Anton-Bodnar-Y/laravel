<?php

namespace App\Http\Controllers\shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function getIndex(){
		return "Shop";
	}
    
}
