<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class CategoryModel extends Model
{
    //
    public function getIndex(){
		$categories = DB::table('category')->get();
		
		return $categories;
	}
}
