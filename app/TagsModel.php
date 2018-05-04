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
	
	
	
	/**
	* GET ONE TAG
	*/
    public function getOneTag($id){
		$tag = DB::table('tags')
							->where('tag_id', $id)
							->get();
		return $tag;
	}
	
	
	
	
	/**
	* UPDATE TAG
	*/
	public function updateTag($request){
		
		//dump($request->all());
		
		DB::table('tags')->where('tag_id', $request->tag_id)
                    	->update([
                    			'tag_name' => $request->tag_name,
                    			'tag_link' => $request->tag_link,
                    			]);
        
	}
	
	
	
	
	/**
	* WRITE TAG 
	*/
	public function writeTag($request){
		
		dump($request->all());
		
		DB::table('tags')->insert(['tag_name' => $request->tag_name,
									'tag_link' => $request->tag_link,
									]);
		
	}
	
	
	
	
	/**
	* DELETE TAG 
	*/
	public function deleteTag($id){
		
		DB::table('tags')->where('tag_id', $id)->delete();
		DB::table('tags_to_news')->where('tag_id', $id)->delete();
		
	}
	
	
	
	
	
	
}
