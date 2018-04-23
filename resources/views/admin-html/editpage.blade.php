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
            		
            		
            		
            		<form class="formEditPage" enctype="multipart/form-data" action="{{ route('updatepage') }}" method="post">
					
						
						
						<input type="hidden" name="id" value="{{ $page[0]['page_id'] }}">
						
						
						<h4>Название страницы</h4>
						<input class="formText" type="text" name="title" value="{{ isset($page[0]['title']) ? $page[0]['title'] : '' }}"/><br/>
						
						<h4>Текст страницы (с HTML)</h4>
						<textarea name="text" class="formArea">{{ isset($page[0]['text']) ? $page[0]['text'] : '' }}</textarea><br/>
						
						<h4>meta_title</h4>
						<input class="formText" type="text" name="meta_title" value="{{ isset($page[0]['meta_title']) ? $page[0]['meta_title'] : '' }}"/><br/>
						
						<h4>meta_desc</h4>
						<input class="formText" type="text" name="meta_desc" value="{{ isset($page[0]['meta_desc']) ? $page[0]['meta_desc'] : '' }}"/><br/>
						
						<h4>meta_keyword</h4>
						<input class="formText" type="text" name="meta_keyword" value="{{ isset($page[0]['meta_keyword']) ? $page[0]['meta_keyword'] : '' }}"/><br/>
						
						
						
						<h4>Главное изображение</h4>
						<div style="width: 300px; height: auto;">
							<img class="formImg" src="/public/path/pages/{{ $page[0]['img'] }}" alt="" />
						</div>
						<input class="btn btn-default btn-lg" type="file" name="imgPage" /><br/>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="formSubmit" type="submit" name="savePage" value="Изменить страницу"/>
						
						
						
					</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>