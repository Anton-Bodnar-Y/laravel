@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		
		<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			
			
			<div class="new col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
					
					
					
					@foreach($new as $val)
						<h3 class="title">{{ $val['news_title'] }}</h3>
						<p class="date">{{ date('j-m-o, G:i', $val['date']) }}</p>
						<p class="top_img"><img src="../../resources/views/img/news/img_preview/{{ $val['img'] }}" alt=""/></p>
						<div class="text_article">{!! $val['text'] !!}</div>
						<div class="block_img">
							<img src="../../resources/views/img/news/img_fool/{{ $val['img_2'] }}" alt=""/>
							<img src="../../resources/views/img/news/img_fool/{{ $val['img_3'] }}" alt=""/>
						</div>
						
						
					@endforeach
					
					
								
			</div>
			
			
			
			<div class="otherNews col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
			
				<h3 class="title">Читайте также:</h3>
				
				<div class="otherNew col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<a href=""><h4 class="title">Название статьи</h4></a>
					<a href=""><img src="../../resources/views/img/news/img_fool/{{ $val['img_2'] }}" alt=""/></a>
				</div>
				
				<div class="otherNew col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<a href=""><h4 class="title">Название статьи</h4></a>
					<a href=""><img src="../../resources/views/img/news/img_fool/{{ $val['img_2'] }}" alt=""/></a>
				</div>
				
			</div>
			
			
			
			
			
		</div>
		
	
@endsection










@section('footer')
	@parent
@endsection