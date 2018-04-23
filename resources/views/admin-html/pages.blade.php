


@extends('templates.adminContent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <a href="{{ route('admin/add/page') }}" class="addElements btn btn-default btn-lg active" role="button">Добавить страницу</a>
            
            <div class="panel panel-default">
                
                <div class="panel-heading">Список страниц</div>
				
                <div class="panel-body">
            		
            		
            		
					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								<th>id</th>
								<th>Название страницы</th>
								<th>Изменить</th>
								<th>Удалить</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($pages as $page)
							<tr>
								<td>{{ $page['id'] }}</td>
								<td>{{ $page['title'] }}</td>
								<td><a href="/admin/edit/page/{{ $page['id'] }}">Изменить</a></td>
								<td><a href="/admin/delete/page/{{ $page['id'] }}">Удалить</a></td>
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