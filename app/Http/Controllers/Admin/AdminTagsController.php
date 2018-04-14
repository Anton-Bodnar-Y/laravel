<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TagsModel;

use Illuminate\Http\Response;

class AdminTagsController extends Controller
{
    //
    public function getIndex(){
		//return '77777777777777777';
		if(view()->exists('admin-html/tags')){
			
			/*
			* get all tags
			**/
			$TagsModel = new TagsModel;
			$tags = $TagsModel->getTagsList();
			
			/*
			* call view
			**/
			$view = view('admin-html/tags', [
									'tags' => $tags, 
								])->withTitle('Теги')
								->withDescription('Теги Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
		}
	}
}
