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
							->where('news.new_id', $id)
							->get();
		return $new;
	}
	/**
	* GET NEWS FROM CATEGORY
	*/
	/*
	public function getCategoryNews($id, $paginate){
		$new = DB::table('news')
							->orderBy('new_id', 'desc')
							->paginate($paginate);
		return $new;
	}
    */
}
