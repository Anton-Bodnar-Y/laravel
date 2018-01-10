<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use DB;


use App\NewModel;



class NewsController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('home')){
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNews(0, 4);
			
			/*
			* call view
			**/
			$view = view('news', [
									'news' => $news, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
