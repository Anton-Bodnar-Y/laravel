<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use DB;


use App\NewModel;
use App\ForumModel;


class HomeController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('home')){
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNews(0, 4);
			/*
			* get last forums for homePage
			**/
			$ForumModel = new ForumModel;
			$forums = $ForumModel->getForums(0, 3);
			/*
			* call view
			**/
			$view = view('home', [
									'news' => $news, 
									'forums' => $forums
								])->withTitle('Главная')
								->withDescription('Главная Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
