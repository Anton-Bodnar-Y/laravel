@extends('templates.adminContent')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление публикации</div>
				
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
					
					<form class="formFlags" enctype="multipart/form-data" action="{{ route('saveflags') }}" method="post">
					
					<table class="table table-striped">
					<thead class="thead-inverse">
						<tr>
							<th>id</th>
							<th></th>
							<th>Название статьи</th>
						</tr>
					</thead>
					
					<tbody>
						@foreach($news as $new)
						<tr>
							<td>
								{{ $new['new_id'] }}
							</td>
							<td>
								<?php 
								if(empty($new['flag'])) {
									echo '<input type="checkbox" name="newId[]" value="' . $new["new_id"] . '" />';
								}
								else{
									echo '<input type="checkbox" name="newId[]" value="' . $new["new_id"] . '" checked />';
								}
								?>
							</td>
							<td>
								{{ $new['news_title'] }}
							</td>
						</tr>
						@endforeach
						{!! csrf_field() !!}
					</tbody>
					
                	</table>
                    
                    <input class="formSubmit" type="submit" name="saveFlags" value="Сохранить список"/>
						
					</form>
					
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>