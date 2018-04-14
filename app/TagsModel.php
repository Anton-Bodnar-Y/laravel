<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class TagsModel extends Model
{
    //
    
    /**
	* GET TAGS
	*/
    public function getTags($id){
		$tags = DB::table('tags_to_news')
							->join('tags', 'tags.tag_id', '=', 'tags_to_news.tag_id')
							->where('tags_to_news.new_id', $id)
							->get();
		return $tags;
	}
	
}
