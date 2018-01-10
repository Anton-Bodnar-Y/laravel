@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
	<div id="wrap">
		
		
		
		
		<div id="home_news">
			<p>Новости:</p>
			@foreach($news as $new)
				<p>{{ $new['title'] }}</p>
			@endforeach
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