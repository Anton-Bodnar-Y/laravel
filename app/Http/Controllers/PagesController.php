<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;



use App\PagesModel;
use App\CategoryModel;

class PagesController extends Controller
{
    //
    public function getIndex($id = false){
		
		
		
		/*
		* get news for homePage
		**/
		$PagesModel = new PagesModel;
		$page = $PagesModel->onePage($id);
		$pages = $PagesModel->getPages();
		
		
		
		
		/*
		* get list categories
		**/
		$CategoryModel = new CategoryModel;
		$categories = $CategoryModel->getIndex();
		
		
		
		
		
		//dump($page);
		
		$view = view('page', ['page' => $page, 'pages' => $pages, 'categories' => $categories,])
								->withTitle($page[0]['meta_title'])
								->withDescription($page[0]['meta_desc'])
								->withKeywords($page[0]['meta_keyword'])
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		
	}
}
