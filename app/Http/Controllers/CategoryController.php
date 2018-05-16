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


class CategoryController extends Controller
{
    //
    public function getNews($id){
		
		if(view()->exists('category')){
			
			
			
			/*
			* get news for homePage
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNewsFromCategory(3, $id);
			
			
			
			
			
			
			/*
			* get list categories
			**/
			$CategoryModel = new CategoryModel;
			$categories = $CategoryModel->getIndex();
			
			
			
			/*
			* get meta info
			**/
			$CategoryModel = new CategoryModel;
			$category_meta = $CategoryModel->getMetaInfo($id);
			
			
			
			
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			
			
			
			
			
			$category = view('category', [
									'news' => $news, 
									'categories' => $categories,
									'pages' => $pages, 
								])->withTitle($category_meta[0]['category_title'])
								->withDescription($category_meta[0]['category_desc'])
								->withKeywords($category_meta[0]['category_key'])
								->render();
			
			return (new Response($category))->header('charset', 'utf-8');
			
			
		}
		
	}
	
	
	
}
