<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

use App\NewModel;
use App\CategoryModel;

class AdminCategoriesController extends Controller
{
    //
    public function getIndex(){
		
		if(view()->exists('admin-html/categories')){
			
			/*
			* get all categories
			**/
			$CategoryModel = new CategoryModel;
			$Categories = $CategoryModel->getIndex();
			
			
			
			
			/*
			* call view
			**/
			
			$view = view('admin-html/categories', [
									'categories' => $Categories, 
								])->withTitle('Категории')
								->withDescription('Категории Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
			
		}
	}
	
	
	
	public function edinCategory($id){
		
		//return $id;
		if(view()->exists('admin-html/new')){
			
			/*
			* get category
			**/
			$CategoryModel = new CategoryModel;
			$category = $CategoryModel->getCategory($id);
			
			
			
			
			
			/*
			* call view
			**/
			$view = view('admin-html/category', [
									'category' => $category,
								])->withTitle('Редактировать новость')
								->withDescription('Редактировать новость')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		}
		
	}
	
	
	public function updateCategory(UpdateCategoryRequest $request){
		
		if($request->isMethod('post')){
			$request->flash();
			
			/*
			* update category
			**/
			$CategoryModel = new CategoryModel;
			$CategoryModel->updateCategory($request);
			
		}
		
		
		
		return redirect()->back();
		
		
		
	}
	
	
	
	
	public function addCategory(){
		
		
		
		/*
		* call view
		**/
		$view = view('admin-html/addcategory', [
							])->withTitle('Добавить категорию')
							->withDescription('Добавить категорию')
							->render();
		
		return (new Response($view))->header('charset', 'utf-8');
		
	}
	
	
	
	
	public function writeCategory(AddCategoryRequest $request){
		
		
		
		if($request->isMethod('post')){
			
			$request->flash();
			
			/*
			* write new
			**/
			$CategoryModel = new CategoryModel;
			$CategoryModel->writeCategory($request);
			
		}
		
		return redirect('admin/categories');
		
	}
	
	
	
	
	
	
	public function deleteCategory($id){
		
		/*
		* get all news
		**/
		$deleteCategory = new CategoryModel;
		$count = $deleteCategory->deleteCategory($id);
		
		return redirect('admin/categories');
		
	}
	
	
	
	
	
}
