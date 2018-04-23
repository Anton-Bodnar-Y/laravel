@extends('templates.adminContent')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление страницы</div>
				
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
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('addpage') }}" method="post">
					
						
						
						
						
						
						
						<h4>Название страницы</h4>
						<input class="formText" type="text" name="titlePage" value="{{ old('titlePage') }}"/><br/>
						
						<h4>Текст страницы (с HTML)</h4>
						<textarea name="textPage" class="formArea">{{ old('textPage') }}</textarea><br/>
						
						<h4>meta_title</h4>
						<input class="formText" type="text" name="meta_title" value="{{ old('meta_title') }}"/><br/>
						
						<h4>meta_desc</h4>
						<input class="formText" type="text" name="meta_desc" value="{{ old('meta_desc') }}"/><br/>
						
						<h4>meta_keyword</h4>
						<input class="formText" type="text" name="meta_keyword" value="{{ old('meta_keyword') }}"/><br/>
						
						
						
						<h4>Изображение</h4>
						<input class="btn btn-default btn-lg" type="file" name="imgPage" /><br/>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="formSubmit" type="submit" name="savePage" value="Добавить страницу"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>