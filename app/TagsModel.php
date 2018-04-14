<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class TagsModel extends Model
{
    //
    
    /**
	* GET TAGS for NEW
	*/
    public function getTags($id){
		$tags = DB::table('tags_to_news')
							->join('tags', 'tags.tag_id', '=', 'tags_to_news.tag_id')
							->where('tags_to_news.new_id', $id)
							->get();
		return $tags;
	}
	
	
	
	/**
	* GET TAGS LIST
	*/
    public function getTagsList(){
		$tags = DB::table('tags')
							->get();
		return $tags;
	}
	
}
