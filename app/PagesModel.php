<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class PagesModel extends Model
{
    //
    public function getPages(){
		$pages = DB::table('pages')
							->get();
		//dump($pages);
		return $pages;
	}
	
	public function onePage($id){
		$page = DB::table('pages')
							->join('page_meta', 'page_meta.page_id', '=', 'pages.id')
							->where('pages.id', $id)
							->get();
		//dump($pages);
		return $page;
	}
	
	
	
	/**
	* WRITE Page 
	*/
	public function writePage($request){
		
		
		DB::table('pages')->insert(['title' => $request->titlePage,
									'text' => $request->textPage,
									]);
		
		$idLastPage = DB::table('pages')->orderBy('id', 'desc')->skip(0)->take(1)->get();
		
		DB::table('page_meta')->insert(['page_id' => $idLastPage[0]['id'],
									'meta_title' => $request->meta_title,
									'meta_desc' => $request->meta_desc,
									'meta_keyword' => $request->meta_keyword,
									]);
		
		
		
		if($request->file('imgPage')){
			$name_img = time().'-0.jpg';
	        $file = $request->file('imgPage');
			$file->move(public_path() . '/path/pages',$name_img);
			//dump($file);
			
			
			DB::table('pages')->where('id', $idLastPage[0]['id'])
	                    	->update(['img' => $name_img]);
		}
		
	}
	
	
	
	/**
	* update Page 
	*/
	public function updatePage($request){
		
		DB::table('pages')->where('id', $request->id)
                    	->update([
                    			'title' => $request->title,
                    			'text' => $request->text,
                    			]);
        
        DB::table('page_meta')->where('page_id', $request->id)
                    	->update([
                    			'meta_title' => $request->meta_title,
                    			'meta_desc' => $request->meta_desc,
                    			'meta_keyword' => $request->meta_keyword,
                    			]);
        
        if($request->file('imgPage')){
			$name_img = time().'-0.jpg';
	        $file = $request->file('imgPage');
			$file->move(public_path() . '/path/pages',$name_img);
			//dump($file);
			
			
			DB::table('pages')->where('id', $request->id)
	                    	->update(['img' => $name_img]);
		}
		
	}
	
	
	
	
	
	
	
	/**
	* DELETE Page 
	*/
	public function deletePage($id){
		
		DB::table('pages')->where('id', $id)->delete();
		DB::table('page_meta')->where('page_id', $id)->delete();
		
	}
	
	
	
}
