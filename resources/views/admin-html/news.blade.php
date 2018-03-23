@extends('templates.adminContent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <a href="{{ route('admin/add/new') }}" class="btn btn-default btn-lg active" role="button">Добавить новость</a>
            
            <div class="panel panel-default">
                
                <div class="panel-heading">Панель приборов</div>
				
                <div class="panel-body">
            		
            		
            		
					<table class="table table-striped">
						<thead class="thead-inverse">
							<tr>
								<th>Выделить все</th>
								<th>id</th>
								<th>Название статьи</th>
								<th>Дата</th>
								<th>Изменить</th>
								<th>Удалить</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($news as $new)
							<tr>
								<td><input type="checkbox" name=""/></td>
								<td>{{ $new['new_id'] }}</td>
								<td><a href="/admin/edit/new/{{ $new['new_id'] }}">{{ mb_substr($new['news_title'], 0, 50) }}{{ strlen($new['news_title']) > 50 ? '...' : ''}}</a></td>
								<td></span>{{ date('j-m-o', $new['date']) }}</span></td>
								<td><a href="/admin/edit/new/{{ $new['new_id'] }}">Изменить</a></td>
								<td><a href="/admin/delete/new/{{ $new['new_id'] }}">Удалить</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
					
                	
                    <div class="pagination col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<?php echo $news->render(); ?>
					</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<style>





</style>