@extends('templates.index')





@section('header')
	@parent
@endsection



@section('left_menu')
	@parent
@endsection



@section('forum')

	@foreach($forums as $forum)
		<p>{{ $forum['forum_title'] }}</p>
	@endforeach

@endsection




@section('content')

	@foreach($news as $new)
		<p>{{ $new['title'] }}</p>
	@endforeach

@endsection










@section('footer')
	@parent
@endsection