<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class CommentModel extends Model
{
    //
    
    /**
	* write comment to DB
	*/
    public function writeComment($request){
    	
		DB::table('comments')->insert(['name' => $request->name,
									'news_id' => $request->news_id,
									'email' => $request->email,
									'text' => $request->comment,
									'date' => time(),
									]);
													
	}
	
	
	
	/**
	* get comments
	*/
    public function getCommentsFirst($id){
		
		$comments = DB::table('comments')->where('news_id', $id)->get();
		
		return $comments;				
									
	}
	
	
	/**
	* get comments for AJAX
	*/
    public function getComments($id){
		
		$comments = DB::table('comments')->where('news_id', $id)->get();
		
		$res = '';
		foreach($comments as $value){
			$res .= '<div style="margin-left: 15px;">';
			$res .= '<h4 style="margin: 15px 0 0 0;"><i>' . $value['name'] . '</i></h4>';
			$res .= '<p style="margin: 0 0 0 0;"><i>' . date('Y:n:j', $value['date']) . '</i></p>';
			$res .= '<p style="margin: 0 0 15px 0;">' . $value['text'] . '</p>';
			$res .= '</div>';
		}
		
		
		return $res;				
									
	}
	
	
}
