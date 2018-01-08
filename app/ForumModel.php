<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class ForumModel extends Model
{
    //
    public function getForums($start, $limit){
		$forums = DB::table('forum')
							->orderBy('forum_id', 'desc')
							->skip($start)->take($limit)
							->get();
		
		dump($forums);
		
		return $forums;
		
		
	}
}