@extends('templates.adminContent')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	
        	<a href="{{ route('admin/add/category') }}" class="addElements btn btn-default btn-lg active" role="button">Добавить категорию</a>
        	
            <div class="panel panel-default">
                <div class="panel-heading">Категории</div>
				
                <div class="panel-body">
            		
            		<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								
								<th>id</th>
								<th>Название статьи</th>
								<th>Изменить</th>
								<th>Удалить</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								@if($category['category_id'] != 0)
								
								<td>{{ $category['category_id'] }}</td>
								<td>{{ $category['category_title'] }}</td>
								<td><a href="/admin/edit/category/{{ $category['category_id'] }}">Изменить</a></td>
								<td><a href="/admin/delete/category/{{ $category['category_id'] }}">Удалить</a></td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>