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
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('addnews') }}" method="post">
					
						
						
						
						
						
						
						<h4>Название статьи</h4>
						<input class="titleNew" type="text" name="title" value="{{ old('title') }}"/><br/>
						
						
						<h4>Укажите категорию</h4>
						<select class="categorySelect" name="category">
							@foreach($category as $value)
							
							<option value="{{ $value['category_id'] }}">{{ $value['category_title'] }}</option>
							
							@endforeach
						</select>
						
						
						
						<h4>Короткое описание статьи (без HTML)</h4>
						<textarea name="newShortDesc" class="newShortDesc">{{ old('newShortDesc') }}</textarea><br/>
						
						<h4>Полный текст статьи статьи (с HTML)</h4>
						<textarea name="newText" class="newText">{{ old('newText') }}</textarea><br/>
						
						
						
						
						
						<h4>META TITLE</h4>
						<input class="metaInfo" type="text" name="new_title" value="{{ old('new_title') }}" /><br/>
						
						<h4>META DESC</h4>
						<input class="metaInfo" type="text" name="new_desc" value="{{ old('new_desc') }}" /><br/>
						
						<h4>META KEY</h4>
						<input class="metaInfo" type="text" name="new_key" value="{{ old('new_key') }}" /><br/>
						
						
						
						
						<h4>Главное изображение</h4>
						<input class="btn btn-default btn-lg" type="file" name="img" /><br/>
						
						<h4>Изображение 1</h4>
						<input class="btn btn-default btn-lg" type="file" name="img_1" /><br/>
						
						<h4>Изображение 2</h4>
						<input class="btn btn-default btn-lg" type="file" name="img_2" /><br/>
						
						<h4>Изображение 3</h4>
						<input class="btn btn-default btn-lg" type="file" name="img_3" /><br/>
						
						
						
						
						<h4>Кросс-статьи</h4>
						
						<select class="crossSelect" name="cross_1">
							<option disabled>Выберите статью</option>
							@foreach($listNews as $value)
								<option value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
							@endforeach
						</select>
						
						<select class="crossSelect" name="cross_2">
							<option disabled>Выберите статью</option>
							@foreach($listNews as $value)
								<option value="{{ $value['new_id'] }}">{{ $value['news_title'] }}</option>
							@endforeach
						</select>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="btn btn-default btn-lg btn-block" type="submit" name="saveNew" value="Добавить новость"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>