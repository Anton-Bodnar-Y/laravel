@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
	<div id="wrap">
		
		<div id="page">
		@foreach($page as $val)
			
			<h3>{{ $val['title'] }}</h3>
			<img src="/resources/views/img/{{ $val['img'] }}" alt="" />
			<p>{{ $val['text'] }}</p>
			
			<div style="clear: both;"></div>
		@endforeach
		</div>
		
		
	</div>
@endsection









@section('footer')
	@parent
@endsection