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
			@foreach($news as $new)
				<div class="new_cont"><a href=""><img src="/resources/views/img/{{ $new['img'] }}" alt="" /><a/></div>
				<div class="new_cont"><a href="">{{ $new['title'] }}<a/></div>
				<div class="new_cont">{{ $new['short_desc'] }}</div>
				<div class="new_cont">категория: <a href="">{{ $new['category'] }}</a></div>
				
				<div class="new_cont">{{ date('l dS \o\f F Y h:i:s A', 1515696093) }}</div>
				<div style="clear: both;"></div>
			@endforeach
			
			
			
			</div>
			
			<?php echo $news->render(); ?>
			
		</div>
		
		
	</div>
@endsection










@section('footer')
	@parent
@endsection