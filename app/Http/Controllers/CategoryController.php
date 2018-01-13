<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    //
    public function getNews($id){
		
		if(view()->exists('news')){
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
			
			dump($new);
			
			$single = view('single', [
									'new' => $new, 
									'pages' => $pages, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($single))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
}
