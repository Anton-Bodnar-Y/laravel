@extends('templates.index')














@section('content')
		
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		
		
		
		
		
		<div id="left_menu">
			<ul>
				@foreach($categories as $category)
				@if($category['category_id'] != 0)
				<li><a href="/category/{{ $category['category_id'] }}">{{ $category['category_title'] }}</a></li>
				@endif
				@endforeach
			</ul>
		</div>
		
		
		
		
		
		
		
		
		<div id="news_block" class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			
			
			@if(count($news) > 0)
				
				@foreach($news as $new)
					
					<div class="new_block col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="/new/{{ $new['new_id'] }}"><img src="/public/path/{{ $new['img'] }}" alt="" /></a>
						<a href="/new/{{ $new['new_id'] }}"><h2 class="titlenews">{{ $new['news_title'] }}</h2></a>
						<span class="date"><span class="glyphicon glyphicon-calendar"></span>&#160;{{ date('j-m-o, G:i', $new['date']) }}</span>
						<p>{{ $new['short_desc'] }}</p>
						
						<a href="/new/{{ $new['new_id'] }}" class="fool">Читать далее...</a>
					</div>
					
				@endforeach
				
				<div style="clear: both;"></div>
				
				
				
				<div class="pagination col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php echo $news->render(); ?>
				</div>
				
			@else
				<p class="noNews">В данном разделе еще нет новостей. Но скоро будут</p>
			@endif
			
			
		</div>
		
		
		
		
		
	</div>
		
@endsection










@section('footer')
	@parent
@endsection