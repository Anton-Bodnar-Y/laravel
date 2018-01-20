@extends('templates.index')














@section('content')
		
	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		
		
		
		
		
		<div id="left_menu">
			<ul>
				@foreach($categories as $category)
				<li><a href="/public/category/{{ $category['category_id'] }}">{{ $category['category_title'] }}</a></li>
				@endforeach
			</ul>
		</div>
		
		
		
		
		
		
		
		
		
		<div id="news_block" class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			
			
			@foreach($news as $new)
			
			
			<div class="new_block col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="/public/new/{{ $new['new_id'] }}"><img src="/resources/views/img/news/img_preview/{{ $new['img'] }}" alt="" /></a>
				<a href="/public/new/{{ $new['new_id'] }}"><h2 class="titlenews">{{ $new['news_title'] }}</h2></a>
				<span class="date">{{ date('j-m-o, G:i', $new['date']) }}</span>
				<p>{{ $new['short_desc'] }}</p>
				
				<a href="/public/new/{{ $new['new_id'] }}" class="fool">Читать далее...</a>
			</div>
			
			
			
			
			
			@endforeach
			
			
		</div>
		
		
		<div style="clear: both;"></div>
		
		
		
		<div class="pagination col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<?php echo $news->render(); ?>
		</div>
		
		
		
		
		
		
		
		
		
	
		
	</div>
		
@endsection










@section('footer')
	@parent
@endsection