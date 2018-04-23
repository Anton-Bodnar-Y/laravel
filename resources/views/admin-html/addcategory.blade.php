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
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('addcategory') }}" method="post">
					
						
						
						
						
						
						
						<h4>Название категории</h4>
						<p>required|min:3|max:50</p>
						<input class="formText" type="text" name="title" value="{{ old('title') }}"/><br/>
						
						
						
						<h4>Описание статьи (без HTML)</h4>
						<p>required|min:10|max:1000</p>
						<textarea name="newShortDesc" class="formArea">{{ old('newShortDesc') }}</textarea><br/>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="formSubmit" type="submit" name="saveNew" value="Добавить категорию"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>