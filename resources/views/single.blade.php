@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		
		
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
		
		
	
@endsection










@section('footer')
	@parent
@endsection