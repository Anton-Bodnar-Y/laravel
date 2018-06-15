<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\CommentModel;








class CommentsController extends Controller
{
    //
    public function getIndex(Request $request){
		
		$request->flash();
		
		/*if(count($request->all()) > 1){
			//return dump($request->comment);
			return strip_tags($request->comment);
		}*/
		
		/*
		* write comment to DB
		**/
		$writeComment = new CommentModel;
		$writeComment->writeComment($request);
		
		$getComments = new CommentModel;
		$comments = $getComments->getComments($request->news_id);
		
		return $comments;
		
	}
}
