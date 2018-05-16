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


class MainController extends Controller
{
    public function getIndex(){
		
		if(view()->exists('main')){
			
			
			
			
			
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
			
			
			
			
			/*
			* get news for flag-block
			**/
			$NewModel = new NewModel;
			$newsFlag = $NewModel->newsFlagBlock();
			
			
			
			//dump($news);
			
			
			
			/*
			* get pagesInfo
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			
			
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('main', [
									'news' => $news, 
									'categories' => $categories, 
									'newsFlag' => $newsFlag, 
									'pages' => $pages,
								])->withTitle('Главная - Новости аграрного сектора Украины, мира, Европы')
								->withDescription('Новости аграрного сектора Украины, импорт, экспорт, новости животноводства, посевные культуры')
								->withKeywords('Аграрные новости Украины, новости Украины, животноводство, посевная, экспорт пшеницы, агроэкспорт')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
			
		}
		
	}
}
