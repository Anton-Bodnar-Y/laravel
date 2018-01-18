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
			<div class="new">
			
				
					<?php //var_dump($new) ?>
					@foreach($new as $val)
						<h2>{{ $val['news_title'] }}</h2>
						<p>{{ date('l dS \o\f F Y h:i:s A', $val['date']) }}</p>
						<p>{{ $val['img_1'] }}</p>
						{!! $val['text'] !!}
						<p>{{ $val['img_2'] }}</p>
						<p>{{ $val['img_3'] }}</p>
						
					@endforeach
			
			
			</div>
			
			
			
		</div>
		
		
	</div>
@endsection










@section('footer')
	@parent
@endsection