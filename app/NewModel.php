<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class NewModel extends Model
{
    
    
    
    
    /**
	* GET ALL NEWS
	*/
    public function getNews($paginate){
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->paginate($paginate);
		return $news;
	}
	
	
	
	
	
	/**
	* GET LAST NEWS
	*/
	public function lastNews($start, $limit){
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->skip($start)->take($limit)
							->get();
		return $news;
	}
	
	
	
	
	
	/**
	* GET ONE NEW
	*/
	public function oneNew($id){
		$new = DB::table('news')
							->join('news_content', 'news.new_id', '=', 'news_content.new_id')
							->join('news_meta', 'news.new_id', '=', 'news_meta.new_id')
							->where('news.new_id', $id)
							->get();
		return $new;
	}
	
	
	
	
	
	
	/**
	* GET LAST NEWS ALL CATEGORIES
	*/
	public function lastNewsAllCat($categories){
		for($i = 0; $i < count($categories); $i++){
			$resArr[$i] = DB::table('news')
								->where('category_id', $categories[$i]['category_id'])
								->get();
			$resArr[$i]['cat']['name'] = $categories[$i]['category_title'];
			$resArr[$i]['cat']['id'] = $categories[$i]['category_id'];
		}
		return $resArr;
	}
	
	
	
	
	
}
