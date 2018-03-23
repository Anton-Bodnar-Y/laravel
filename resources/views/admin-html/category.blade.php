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
            		
            		<form class="formEditNew" enctype="multipart/form-data" action="{{ route('updatecategory') }}" method="post">
            			
            			<input type="hidden" name="id" value="{{ $category[0]['category_id'] }}">
            			
            			<h4>Название категории</h4>
						<input class="titleNew" type="text" name="title" value="{{ isset($category[0]['category_title']) ? $category[0]['category_title'] : '' }}"/><br/>
						
						<h4>Описание категории (с HTML)</h4>
						<textarea name="newShortDesc" class="newShortDesc">{{ isset($category[0]['category_desc']) ? $category[0]['category_desc'] : '' }}</textarea><br/>
						
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