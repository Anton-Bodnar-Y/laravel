@extends('templates.admin')

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
						<input class="titleNew" type="text" name="title" value="{{ isset($new[0]['news_title']) ? $new[0]['news_title'] : '' }}"/><br/>
						
						
						<h4>Укажите категорию</h4>
						<select name="category">
							@foreach($category as $value)
							
							<option value="{{ $value['category_id'] }}">{{ $value['category_title'] }}</option>
							
							@endforeach
						</select>
						
						
						
						<h4>Короткое описание статьи (без HTML)</h4>
						<textarea name="newShortDesc" class="newShortDesc">{{ isset($new[0]['short_desc']) ? $new[0]['short_desc'] : '' }}</textarea><br/>
						
						<h4>Полный текст статьи статьи (с HTML)</h4>
						<textarea name="newText" class="newText">{{ isset($new[0]['text']) ? $new[0]['text'] : '' }}</textarea><br/>
						
						
						
						
						
						
						<h4>META TITLE</h4>
						<input class="titleNew" type="text" name="new_title" value="{{ isset($new[0]['new_title']) ? $new[0]['new_title'] : '' }}"/><br/>
						
						<h4>META DESC</h4>
						<input class="titleNew" type="text" name="new_desc" value="{{ isset($new[0]['new_desc']) ? $new[0]['new_desc'] : '' }}"/><br/>
						
						<h4>META KEY</h4>
						<input class="titleNew" type="text" name="new_key" value="{{ isset($new[0]['new_key']) ? $new[0]['new_key'] : '' }}"/><br/>
						
						
						
						
						<h4>Главное изображение</h4>
						<div style="width: 300px; height: auto;">
							<img class="imgUpdate" src="/public/path/{{ $new[0]['img'] }}" alt="" />
						</div>
						<input class="btn btn-default btn-lg" type="file" name="img" /><br/>
						
						<h4>Изображение 1</h4>
						<div style="width: 300px; height: auto;">
							<img class="imgUpdate" src="/public/path/{{ $new[0]['img_1'] }}" alt="" />
						</div>
						<input class="btn btn-default btn-lg" type="file" name="img_1" /><br/>
						
						<h4>Изображение 2</h4>
						<div style="width: 300px; height: auto;">
							<img class="imgUpdate" src="/public/path/{{ $new[0]['img_2'] }}" alt="" />
						</div>
						<input class="btn btn-default btn-lg" type="file" name="img_2" /><br/>
						
						<h4>Изображение 3</h4>
						<div style="width: 300px; height: auto;">
							<img class="imgUpdate" src="/public/path/{{ $new[0]['img_3'] }}" alt="" />
						</div>
						<input class="btn btn-default btn-lg" type="file" name="img_3" /><br/>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="btn btn-default btn-lg btn-block" type="submit" name="saveNew" value="Сохранить"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>