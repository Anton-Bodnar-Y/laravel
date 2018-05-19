<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class FlagModel extends Model
{
    //
    public function saveFlag($arrayNews){
		
		
		
		if($arrayNews){
			
			$newsNulls = DB::table('news')
								->orderBy('new_id', 'desc')
								->skip(0)->take(100)
								->pluck('new_id');
								
			foreach($newsNulls as $newsNull){
				DB::table('news')->where('new_id', $newsNull)
		                    	->update([
		                    			'flag' => '',
		                    			]);
			}
			
			foreach($arrayNews as $arrayNew){
				DB::table('news')->where('new_id', $arrayNew)
		                    	->update([
		                    			'flag' => 'flag',
		                    			]);
			}
			
		}
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
}
