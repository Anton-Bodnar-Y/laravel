@extends('templates.adminContent')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование публикации</div>
				
                <div class="panel-body">
            		
            		@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>- {{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('updatenews') }}" method="post">
					
						
						
						
						<input type="hidden" name="id" value="{{ $new[0]['new_id'] }}">
						
						
						
						
						
						<h4>Название статьи</h4>
						<p>required|min:10|max:255</p>
						<input class="formText" type="text" name="title" value="{{ isset($new[0]['news_title']) ? $new[0]['news_title'] : '' }}"/><br/>
						
						
						<h4>Укажите категорию</h4>
						<select class="formSelect" name="category">
							@foreach($category as $value)
							
								@if($value['category_id'] == $new[0]['category_id'])
								<option selected value="{{ $value['category_id'] }}">{{ $value['category_title'] }}</option>
								@else
								<option value="{{ $value['category_id'] }}">{{ $value['category_title'] }}</option>
								@endif
								
							@endforeach
						</select>
						
						
						
						<h4>Короткое описание статьи (без HTML)</h4>
						<p>required|min:100|max:1000</p>
						<textarea name="newShortDesc" class="formArea">{{ isset($new[0]['short_desc']) ? $new[0]['short_desc'] : '' }}</textarea><br/>
						
						<h4>Полный текст статьи статьи (с HTML)</h4>
						<p>required|min:200|max:10000</p>
						<textarea name="newText" class="formArea">{{ isset($new[0]['text']) ? $new[0]['text'] : '' }}</textarea><br/>
						
						
						
						<hr/>
						
						
						<h4>META TITLE</h4>
						<p>required|min:20|max:255</p>
						<input class="formText" type="text" name="new_title" value="{{ isset($new[0]['new_title']) ? $new[0]['new_title'] : '' }}"/><br/>
						
						<h4>META DESC</h4>
						<p>required|min:20|max:500</p>
						<input class="formText" type="text" name="new_desc" value="{{ isset($new[0]['new_desc']) ? $new[0]['new_desc'] : '' }}"/><br/>
						
						<h4>META KEY</h4>
						<p>required|min:20|max:255</p>
						<input class="formText" type="text" name="new_key" value="{{ isset($new[0]['new_key']) ? $new[0]['new_key'] : '' }}"/><br/>
						
						
						<hr/>
						
						
						
						<h4>Главное изображение</h4>
						<p>mimes:jpeg,bmp,png|max:256</p>
						<p>800 x 250</p>
						@if($new[0]['img'] != '')
						<div style="width: 300px; height: auto;">
							<img class="formImg" src="/public/path/{{ $new[0]['img'] }}" alt="" />
						</div>
						@endif
						<input class="btn btn-default btn-lg" type="file" name="img" /><br/>
						
						<h4>Изображение 1</h4>
						@if($new[0]['img_1'] != '')
						<div style="width: 300px; height: auto;">
							<img class="formImg" src="/public/path/{{ $new[0]['img_1'] }}" alt="" />
						</div>
						@endif
						<input class="btn btn-default btn-lg" type="file" name="img_1" /><br/>
						
						<h4>Изображение 2</h4>
						@if($new[0]['img_2'] != '')
						<div style="width: 300px; height: auto;">
							<img class="formImg" src="/public/path/{{ $new[0]['img_2'] }}" alt="" />
						</div>
						@endif
						<input class="btn btn-default btn-lg" type="file" name="img_2" /><br/>
						
						<h4>Изображение 3</h4>
						@if($new[0]['img_3'] != '')
						<div style="width: 300px; height: auto;">
							<img class="formImg" src="/public/path/{{ $new[0]['img_3'] }}" alt="" />
						</div>
						@endif
						<input class="btn btn-default btn-lg" type="file" name="img_3" /><br/>
						
						
						<hr/>
						
						
						<h4>Кросс-статьи</h4>
						
						<select class="formSelect" name="cross_1">
							<option disabled>Выберите статью</option>
							@foreach($listNews as $value)
								@if(unserialize($new[0]['cross_news'])[0] == $value['new_id'])
								<option selected value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
								@else
								<option value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
								@endif
							@endforeach
						</select>
						
						<select class="formSelect" name="cross_2">
							<option disabled>Выберите статью</option>
							@foreach($listNews as $value)
								@if(unserialize($new[0]['cross_news'])[1] == $value['new_id'])
								<option selected value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
								@else
								<option value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
								@endif
							@endforeach
						</select>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="formSubmit" type="submit" name="saveNew" value="Сохранить"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>