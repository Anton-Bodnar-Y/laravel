<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveFlagsRequest;

use Illuminate\Http\Response;

use App\Http\Controllers\Controller;



use App\NewModel;
use App\FlagModel;





class AdminFlagsController extends Controller
{
    //
    public function getIndex(){
		//return 'getIndex!';
		if(view()->exists('admin-html/flags')){
			
			/*
			* get all news
			**/
			$NewModel = new NewModel;
			$news = $NewModel->getNewsForFlags();
			
			/*
			* call view
			**/
			$view = view('admin-html/flags', [
									'news' => $news, 
								])->withTitle('Новости')
								->withDescription('Новости Description')
								->render();
			
			return (new Response($view))->header('charset', 'utf-8');
		}
	}
	
	
	
	public function saveFlags(SaveFlagsRequest $request){
		
		$FlagModel = new FlagModel;
		$FlagModel->saveFlag($request->newId);
		
		return redirect()->back();
		
	}
	
	
	
	
}
