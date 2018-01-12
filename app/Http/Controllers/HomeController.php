<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use DB;


use App\NewModel;
use App\ForumModel;
use App\PagesModel;


class HomeController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('home')){
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->lastNews(0, 3);
			/*
			* get last forums for homePage
			**/
			$ForumModel = new ForumModel;
			$forums = $ForumModel->getForums(0, 3);
			
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
									'forums' => $forums,
									'pages' => $pages,
								])->withTitle('Главная')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
