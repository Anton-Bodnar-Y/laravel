<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class CategoryModel extends Model
{
    //
    public function getIndex(){
		$categories = DB::table('category')->get();
		
		return $categories;
	}
	
	public function getCategory($id){
		$category = DB::table('category')->Where('category_id',$id)->get();
		
		return $category;
	}
	
	public function updateCategory($request){
		//dump($request->all());
		DB::table('category')->where('category_id', $request->id)
                    	->update([
                    			'category_title' => $request->title,
                    			'category_desc' => $request->newShortDesc,
                    			
                    			]);
		
	}
	
	
	/**
	* WRITE Category 
	*/
	public function writeCategory($request){
		
		dump($request->all());
		
		DB::table('category')->insert(['category_title' => $request->title,
									'category_desc' => $request->newShortDesc,
									]);
		
	}
	
	
	
	/**
	* DELETE Category 
	*/
	public function deleteCategory($id){
		
		$countArt = DB::table('news')->where('category_id', $id)->count();
		
		if($countArt != 0){
			DB::table('news')->where('category_id', $id)
                    	->update([
                    			'category_id' => '0',
                    			
                    			]);
		}
		
		DB::table('category')->where('category_id', $id)->delete();
		
	}
}
