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


class HomeController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('home')){
			
			
			
			
			
			/*
			* get Category
			**/
			$categoryModel = new CategoryModel;
			$categories = $categoryModel->getIndex();
			
			
			
			
			
			
			
			
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->lastNewsAllCat($categories);
			
			
			
			dump($news);
			
			
			
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			
			
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('home', [
									'news' => $news, 
									'categories' => $categories, 
									'pages' => $pages,
								])->withTitle('Главная')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
