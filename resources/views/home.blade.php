@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
	<div id="wrap">
		
		
		
		
		<div id="home_news">
			<p>Новости:</p>
			<div class="new">
			@foreach($news as $new)
				<div class="new_cont"><a href="/public/new/{{ $new['new_id'] }}"><img src="/resources/views/img/{{ $new['img'] }}" alt="" /><a/></div>
				<div class="new_cont"><a href="/public/new/{{ $new['new_id'] }}">{{ $new['title'] }}<a/></div>
				<div class="new_cont">{{ $new['short_desc'] }}</div>
				<div class="new_cont">категория: <a href="">{{ $new['category'] }}</a></div>
				
				<div class="new_cont">{{ date('l dS \o\f F Y h:i:s A', 1515696093) }}</div>
				<div style="clear: both;"></div>
			@endforeach
			</div>
			
			
		</div>
		<div id="home_forum">
			<p>Форумы:</p>
			@foreach($forums as $forum)
				<p>{{ $forum['forum_title'] }}</p>
			@endforeach
		</div>
		
	</div>
@endsection










@section('footer')
	@parent
@endsection