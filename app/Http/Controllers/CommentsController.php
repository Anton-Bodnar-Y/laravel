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
		
		//return 'NAME: ' . $request->name . ', MAIL: ' . $request->email;
		$request->flash();
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
