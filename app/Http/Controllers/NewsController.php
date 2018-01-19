<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use DB;


use App\NewModel;
use App\PagesModel;


class NewsController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('home')){
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNews(2);
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
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$new = $NewModel->oneNew($id);
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			/*
			* call view
			**/
			
			//dump($new);
			
			$single = view('single', [
									'new' => $new, 
									'pages' => $pages, 
								])->withTitle($new[0]['new_title'])
								->withDescription($new[0]['new_desc'])
								->render();
			
			return (new Response($single))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
	
	
}
