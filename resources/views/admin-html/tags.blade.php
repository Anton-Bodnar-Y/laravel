@extends('templates.adminContent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <a href="{{ route('admin/add/new') }}" class="btn btn-default btn-lg active" role="button">Добавить тег</a>
            
            <div class="panel panel-default">
                
                <div class="panel-heading">Список тегов</div>
				
                <div class="panel-body">
            		
            		
            		
					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								
								<th>id</th>
								<th>Имя тега</th>
								<th>Изменить</th>
								<th>Удалить</th>
								
							</tr>
							<tbody>
							@foreach($tags as $tag)
							<tr>
								
								<td>{{ $tag['tag_id'] }}</td>
								<td>{{ $tag['tag_name'] }}</td>
								<th><a href="/admin/edit/tag/">Изменить</a></th>
								<th><a href="/admin/delete/tag/">Удалить</a></th>
							</tr>
							@endforeach
						</tbody>
						</thead>
						
					</table>
					
					
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>