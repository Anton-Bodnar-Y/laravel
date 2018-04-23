@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			
			<div id="home_news" class="col-lg-offset-2 col-md-offset-2 col-lg-6 col-md-6 col-sm-12 col-xs-12">
				@for($i = 0; $i < count($news); $i++)
					
					@if($news[$i]['cat']['id'] != '0')
					
					<div class="category_block">
						@if(count($news[$i]) > 1)
							<a class="link_category" href="/category/{{ $news[$i]['cat']['id'] }}"><h3>{{ $news[$i]['cat']['name'] }}</h3></a>
							<?php $count = count($news[$i]) - 1; ?>
							@for($t = 0; $t < $count; $t++)
								<a class="link_title" href="/new/{{ $news[$i][$t]['new_id'] }}">{{ $news[$i][$t]['news_title'] }}</a>
							@endfor
						@endif
					</div>
					
					@endif
					
				@endfor
			</div>
			
			<div id="home_news_2" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
				
				<h4>Самое читаемое</h4>
				@for($i = 0; $i < count($newsFlag); $i++)
					<a class="link_category" href="/new/{{ $newsFlag[$i]['new_id'] }}">
						<p><span class="glyphicon glyphicon-flag"></span>&#160;{{ $newsFlag[$i]['news_title'] }}</p>
					</a>
				@endfor
				
			</div>
			
			
			
			
			
			
		</div>
		
		
		
		
		
		
		
@endsection










@section('footer')
	@parent
@endsection