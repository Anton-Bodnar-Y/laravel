<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddTagRequest;
use App\Http\Requests\UpdateTagRequest;

use App\Http\Controllers\Controller;

use App\TagsModel;

use Illuminate\Http\Response;

class AdminTagsController extends Controller
{
    //
    public function getIndex(){
		
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
	
	
	
	
	public function edinTeg($id){
		
		if(view()->exists('admin-html/edittag')){
			//return '7777777777777';
			/*
			* get all tags
			**/
			$TagsModel = new TagsModel;
			$tag = $TagsModel->getOneTag($id);
			dump ($tag);
			
			/*
			* call view
			**/
			$view = view('admin-html/edittag', [
									'tag' => $tag, 
								])->withTitle('Теги')
								->withDescription('Теги Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
		}
	}
	
	
	
	
	public function updateTag(UpdateTagRequest $request){
		
		if($request->isMethod('post')){
			$request->flash();
			
			/*
			* update tag
			**/
			$TagsModel = new TagsModel;
			$TagsModel->updateTag($request);
			
		}
		
		/*
		$file = $request->file('img_1');
		$file->move(public_path() . '/path',time().'.jpg');
		dump($file);
		*/
		
		
		
		return redirect()->back();
	}
	
	
	
	
	
	public function addTag(){
		
		/*
		* call view
		**/
		$view = view('admin-html/addtag', [
							])->withTitle('Добавить тег')
							->withDescription('Добавить тег')
							->render();
		
		return (new Response($view))->header('charset', 'utf-8');
		
	}
	
	
	
	
	public function writeTag(AddTagRequest $request){
		
		
		
		if($request->isMethod('post')){
			
			$request->flash();
			
			/*
			* write new
			**/
			$TagsModel = new TagsModel;
			$TagsModel->writeTag($request);
			
		}
		
		return redirect('admin/tags');
		
	}
	
	
	
	
	
	
	public function deleteTag($id){
		
		/*
		* 
		**/
		$deleteTag = new TagsModel;
		$deleteTag->deleteTag($id);
		
		return redirect('admin/tags');
		
	}
	
	
	
	
}
