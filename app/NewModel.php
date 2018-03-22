<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

use DB;

class NewModel extends Model
{
    
    
    
    
    /**
	* GET ALL NEWS
	*/
    public function getNews($paginate){
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->paginate($paginate);
		return $news;
	}
	
	
	
	
	
	
	/**
	* GET ALL LIST NEWS FOR CROSS-NEWS in ADMIN
	*/
    public function getNewsCross(){
		//$news = DB::table('news')->orderBy('new_id', 'desc');
		$news = DB::table('news')
								->orderBy('new_id', 'desc')
								->skip(0)->take(10)
								->get();
		return $news;
	}
	
	
	
	
	
	/**
	* GET LAST NEWS
	*/
	public function lastNews($start, $limit){
		$news = DB::table('news')
							->orderBy('new_id', 'desc')
							->skip($start)->take($limit)
							->get();
		return $news;
	}
	
	
	
	
	
	/**
	* GET ONE NEW
	*/
	public function oneNew($id){
		$new = DB::table('news')
							->join('news_content', 'news.new_id', '=', 'news_content.new_id')
							->join('news_meta', 'news.new_id', '=', 'news_meta.new_id')
							->where('news.new_id', $id)
							->get();
		
		return $new;
	}
	
	
	
	
	
	
	
	
	
	/**
	* GET NEWS 'CROSSNEWS'
	*/
	public function crossNews($arrayNewsId){
		
		$arrayNewsId = unserialize($arrayNewsId);
		
		if($arrayNewsId != false){
			foreach($arrayNewsId as $val){
				$news[] = DB::table('news')
									->where('new_id', $val)
									->get();
			}
			return $news;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	* GET LAST NEWS ALL CATEGORIES
	*/
	public function lastNewsAllCat($categories){
		for($i = 0; $i < count($categories); $i++){
			$resArr[$i] = DB::table('news')
								->where('category_id', $categories[$i]['category_id'])
								->orderBy('new_id', 'desc')->skip(0)->take(3)
								->get();
			$resArr[$i]['cat']['name'] = $categories[$i]['category_title'];
			$resArr[$i]['cat']['id'] = $categories[$i]['category_id'];
		}
		return $resArr;
	}
	
	
	
	
	
	
	
	
	
	/**
	* GET NEWS CATEGORY
	*/
	public function getNewsFromCategory($category_id){
		
		$news = DB::table('news')
								->where('category_id', $category_id)
								->orderBy('new_id', 'desc')
								->get();
		
		return $news;
	}
	
	
	
	
	
	/**
	* UPDATE NEW
	*/
	public function updateNew($request){
		
		//dump($request->all());
		
		DB::table('news')->where('new_id', $request->id)
                    	->update([
                    			'news_title' => $request->title,
                    			'category_id' => $request->category,
                    			'short_desc' => $request->newShortDesc,
                    			
                    			]);
        
        /*
        DB::table('news_content')->where('new_id', $request->id)
	                    	->update(['text' => $request->newText]);
		*/
		DB::table('news_content')->where('new_id', $request->id)
	                    	->update([
	                    			'text' => $request->newText,
	                    			'cross_news' => serialize(array($request->cross_1,$request->cross_2)),
	                    			]);
        
        
        
        if($request->file('img')){
			$name_img = time().'-0.jpg';
	        $file = $request->file('img');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news')->where('new_id', $request->id)
	                    	->update(['img' => $name_img]);
		}
		
		if($request->file('img_1')){
			$name_img = time().'-1.jpg';
	        $file = $request->file('img_1');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $request->id)
	                    	->update(['img_1' => $name_img]);
		}
		
		if($request->file('img_2')){
			$name_img = time().'-1.jpg';
	        $file = $request->file('img_2');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $request->id)
	                    	->update(['img_2' => $name_img]);
		}
		
		if($request->file('img_3')){
			$name_img = time().'-1.jpg';
	        $file = $request->file('img_3');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $request->id)
	                    	->update(['img_3' => $name_img]);
		}
		
		
		
		
		
		DB::table('news_meta')->where('new_id', $request->id)
	                    	->update([
	                    			'new_title' => $request->new_title,
	                    			'new_desc' => $request->new_desc,
	                    			'new_key' => $request->new_key,
	                    			]);
		
		
        
	}
	
	
	
	
	/**
	* WRITE NEW 
	*/
	public function writeNew($request){
		
		dump($request->all());
		
		DB::table('news')->insert(['news_title' => $request->title,
									'category_id' => $request->category,
									'short_desc' => $request->newShortDesc,
									'date' => time(),
									]);
		
		
        
        $idLastNew = DB::table('news')->orderBy('new_id', 'desc')->skip(0)->take(1)->get();
        
        DB::table('news_content')->insert(['new_id' => $idLastNew[0]['new_id']]);
        DB::table('news_meta')->insert(['new_id' => $idLastNew[0]['new_id']]);
		
		
		DB::table('news_content')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update([
	                    			'text' => $request->newText,
	                    			'cross_news' => serialize(array($request->cross_1,$request->cross_2)),
	                    			
	                    			]);
		
		
		if($request->file('img')){
			$name_img = time().'-0.jpg';
	        $file = $request->file('img');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update(['img' => $name_img]);
		}
		
		
		
		
		
		if($request->file('img_1')){
			$name_img = time().'-1.jpg';
	        $file = $request->file('img_1');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update(['img_1' => $name_img]);
		}
		
		if($request->file('img_2')){
			$name_img = time().'-2.jpg';
	        $file = $request->file('img_2');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update(['img_2' => $name_img]);
		}
		
		if($request->file('img_3')){
			$name_img = time().'-3.jpg';
	        $file = $request->file('img_3');
			$file->move(public_path() . '/path',$name_img);
			dump($file);
			
			DB::table('news_content')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update(['img_3' => $name_img]);
		}
		
		
		
		
		DB::table('news_meta')->where('new_id', $idLastNew[0]['new_id'])
	                    	->update([
	                    			'new_title' => $request->new_title,
	                    			'new_desc' => $request->new_desc,
	                    			'new_key' => $request->new_key,
	                    			]);
        
        
	}
	
	
	
	
	
	
	
	
	
	/**
	* DELETE NEW 
	*/
	public function deleteNew($id){
		
		DB::table('news')->where('new_id', $id)->delete();
		DB::table('news_content')->where('new_id', $id)->delete();
		DB::table('news_meta')->where('new_id', $id)->delete();
		
	}
	
	
	
	
	
}
