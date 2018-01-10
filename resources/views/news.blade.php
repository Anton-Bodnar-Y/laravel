@extends('templates.index')














@section('content')
	<div id="wrap">
		
		<div id="left_menu">
			<ul>
				<li><a href="" >Категория 1</a></li>
				<li><a href="" >Категория 2</a></li>
				<li><a href="" >Категория 3</a></li>
				<li><a href="" >Категория 4</a></li>
			</ul>
		</div>
		
		
		
		
		<div id="news">
			<p>Новости:</p>
			@foreach($news as $new)
				<p>{{ $new['title'] }}</p>
			@endforeach
		</div>
		
		
	</div>
@endsection










@section('footer')
	@parent
@endsection