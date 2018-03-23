<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddNewRequest;
use App\Http\Requests\UpdateNewRequest;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;






//use Illuminate\Support\Facades\Storage;



use App\NewModel;
use App\CategoryModel;



class AdminNewsController extends Controller
{
    //
	
	
    public function getIndex(){
		
		if(view()->exists('admin-html/news')){
			
			/*
			* get all news
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNews(4);
			
			/*
			* call view
			**/
			$view = view('admin-html/news', [
									'news' => $news, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		}
	}
	
	
	
	public function edinNew($id){
		
		if(view()->exists('admin-html/new')){
			
			/*
			* get new
			**/
			$NewModel = new NewModel;
			$new = $NewModel->oneNew($id);
			
			$NewModel = new NewModel;
			$listNews = $NewModel->getNewsCross();
			
			
			/*
			* get categories
			**/
			$categoryModel = new CategoryModel;
			$category = $categoryModel->getIndex();
			
			
			
			
			/*
			* call view
			**/
			$view = view('admin-html/new', [
									'new' => $new, 
									'category' => $category,
									'listNews' => $listNews,
								])->withTitle('Редактировать новость')
								->withDescription('Редактировать новость')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		}
	}
	
	
	
	public function updateNew(UpdateNewRequest $request){
		
		if($request->isMethod('post')){
			$request->flash();
			
			/*
			* update new
			**/
			$NewModel = new NewModel;
			$new = $NewModel->updateNew($request);
			
		}
		
		/*
		$file = $request->file('img_1');
		$file->move(public_path() . '/path',time().'.jpg');
		dump($file);
		*/
		
		
		
		return redirect()->back();
		
	}
	
	
	public function addNew(){
		
		
		$categoryModel = new CategoryModel;
		$category = $categoryModel->getIndex();
		
		$NewModel = new NewModel;
		$listNews = $NewModel->getNewsCross();
		
		//dump($listNews);
		
		/*
		* call view
		**/
		$view = view('admin-html/addnew', [
								'category' => $category,
								'listNews' => $listNews,
							])->withTitle('Добавить новость')
							->withDescription('Добавить новость')
							->render();
		
		return (new Response($view))->header('charset', 'utf-8');
		
	}
	
	
	
	public function writeNew(AddNewRequest $request){
		
		
		
		if($request->isMethod('post')){
			
			$request->flash();
			
			/*
			* write new
			**/
			$NewModel = new NewModel;
			$new = $NewModel->writeNew($request);
			
		}
		
		return redirect('admin/news');
		
	}
	
	
	
	
	
	
	
	public function deleteNew($id){
		
		/*
		* get all news
		**/
		$deleteNew = new NewModel;
		$deleteNew->deleteNew($id);
		
		return redirect('admin/news');
		
	}
	
	
	
	
	
	
	
}
