<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Requests\AddPageRequest;
use App\Http\Requests\UpdatePageRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

use App\PagesModel;

class AdminPagesController extends Controller
{
    //
    public function getIndex(){
		
		if(view()->exists('admin-html/pages')){
			
			/*
			* get all pages
			**/
			$PagesModel = new PagesModel;
			$pages = $PagesModel->getPages();
			
			/*
			* call view
			**/
			$view = view('admin-html/pages', [
									'pages' => $pages, 
								])->withTitle('Cnраницы')
								->withDescription('Cnраницы Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		}
	}
	
	
	
	public function addPage(){
		
		if(view()->exists('admin-html/addpage')){
			
			/*
			* call view
			**/
			$view = view('admin-html/addpage', [
									/*'listNews' => $listNews, */
								])->withTitle('Добавить cтраницу')
								->withDescription('Добавить cтраницу')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		
		}
		
	}
	
	
	
	
	public function writePage(AddPageRequest $request){
		
		if($request->isMethod('post')){
			
			$request->flash();
			
			/*
			* write new
			**/
			$PagesModel = new PagesModel;
			$PagesModel->writePage($request);
			
		}
		
		return redirect('admin/pages');
		
	}
	
	
	
	
	
	public function editPage($id){
		
		//return 'editPage';
		
		
		if(view()->exists('admin-html/editpage')){
			
			
			/*
			* get one page
			**/
			$PagesModel = new PagesModel;
			$page = $PagesModel->onePage($id);
			
			
			
			/*
			* call view
			**/
			$view = view('admin-html/editpage', [
									'page' => $page, 
								])->withTitle('Добавить cтраницу')
								->withDescription('Добавить cтраницу')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		
		}
		
		
	}
	
	public function updatePage(UpdatePageRequest $request){
		
		//return 'updatePage';
		//dump($request->all());
		
		$request->flash();
		
		/*
		* update page
		**/
		$PagesModel = new PagesModel;
		$PagesModel->updatePage($request);
		
		return redirect()->back();
		
	}
	
	public function deletePage($id){
		
		//$request->flash();
		
		/*
		* delete Page
		**/
		$PagesModel = new PagesModel;
		$PagesModel->deletePage($id);
		
		return redirect()->back();
		
		
		
	}
	
	
	
	
	
	
	
}
