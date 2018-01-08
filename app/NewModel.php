<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class NewModel extends Model
{
    //
    public function getNews($start, $limit){
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->skip($start)->take($limit)
							->get();
		
		dump($news);
		
		return $news;
		
		
	}
    
}
