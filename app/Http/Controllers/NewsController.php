<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use DB;


use App\NewModel;
use App\PagesModel;
use App\CategoryModel;
use App\CommentModel;


class NewsController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('news')){
			
			
			
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNews(4);
			
			
			
			
			
			/*
			* get list categories
			**/
			$CategoryModel = new CategoryModel;
			$categories = $CategoryModel->getIndex();
			
			
			
			
			
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			
			
			
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('news', [
									'news' => $news, 
									'categories' => $categories,
									'pages' => $pages, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	public function getOneNew($id){
		
		if(view()->exists('single')){
			
			
			
			
			/*
			* get new
			**/
			$NewModel = new NewModel;
			$new = $NewModel->oneNew($id);
			
			/*
			* get news for 'cross_news'
			**/
			$NewModel = new NewModel;
			$cross_news = $NewModel->crossNews($new[0]['cross_news']);
			
			/*
			* get list categories
			**/
			$CategoryModel = new CategoryModel;
			$categories = $CategoryModel->getIndex();
			
			/*
			* get list comments
			**/
			$commentModel = new CommentModel;
			$comments = $commentModel->getCommentsFirst($id);
			
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			/*
			* call view
			**/
			
			
			
			
			
			$single = view('single', [
									'new' => $new, 
									'cross_news' => $cross_news,
									'categories' => $categories,
									'pages' => $pages, 
									'comments' => $comments, 
								])->withTitle($new[0]['new_title'])
								->withDescription($new[0]['new_desc'])
								->render();
			
			return (new Response($single))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
}
