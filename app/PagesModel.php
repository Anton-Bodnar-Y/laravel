<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class PagesModel extends Model
{
    //
    public function getPages(){
		$pages = DB::table('pages')
							->get();
		//dump($pages);
		return $pages;
	}
	
	public function onePage($id){
		$page = DB::table('pages')
							->where('id', $id)
							->get();
		//dump($pages);
		return $page;
	}
}
