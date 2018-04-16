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
            		
					<form class="formEditNew" enctype="multipart/form-data" action="{{ route('updatetags') }}" method="post">
					
						
						<input type="hidden" name="tag_id" value="{{ $tag[0]['tag_id'] }}"> 
						<h4>название тега</h4>
						<input type="text" name="tag_name" value="{{ $tag[0]['tag_name'] }}"> 
						<h4>link тега</h4>
						<input type="text" name="tag_link" value="{{ $tag[0]['tag_link'] }}">
						
						
						
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