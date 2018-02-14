@extends('templates.admin')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование публикации</div>
				
                <div class="panel-body">
            		
            		
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('addcategory') }}" method="post">
					
						
						
						
						
						
						
						<h4>Название категории</h4>
						<input class="titleNew" type="text" name="title" value=""/><br/>
						
						
						
						<h4>Описание статьи (без HTML)</h4>
						<textarea name="newShortDesc" class="newShortDesc"></textarea><br/>
						
						
						
						<!--<input type="hidden" name="_method" value="put">-->
						{!! csrf_field() !!}
						
						
						
						<input class="btn btn-default btn-lg btn-block" type="submit" name="saveNew" value="Добавить категорию"/>
						
					</form>
					
                	
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>