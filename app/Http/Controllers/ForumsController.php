<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ForumsController extends Controller
{
    //
    public function getIndex(){
		
		
		
		return "Forums";
		
		
		
		
		/*
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->paginate($paginate);
		
		//dump($news);
		
		return $news;
		*/
		
	}
}
