@extends('templates.index')





@section('header')
	@parent
@endsection





@section('content')
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		
		
		<div id="page_block" class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<?php //var_dump($page) ?>
			@foreach($page as $val)
				
				<h3>{{ $val['title'] }}</h3>
				<img src="/public/img/pages/{{ $val['img'] }}" alt="" />
				<p>{!! $val['text'] !!}</p>
				
				<div style="clear: both;"></div>
			@endforeach
			
		</div>
		
		
		
	</div>
	
	
@endsection









@section('footer')
	@parent
@endsection