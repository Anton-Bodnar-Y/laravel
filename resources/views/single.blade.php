@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		
		<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			
			
			<div class="new col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
			
			@foreach($new as $val)
				<h3 class="title">{{ $val['news_title'] }}</h3>
				<p class="date"><span class="glyphicon glyphicon-calendar"></span>&#160;{{ date('j-m-o, G:i', $val['date']) }}</p>
				<p class="top_img"><img src="../../public/path/{{ $val['img'] }}" alt=""/></p>
				<div class="text_article">{!! $val['text'] !!}</div>
				
				<div class="block_img" id="block_img" >
					
					@if(!empty($val['img_1']))
					<img class="imgGalery col-lg-4 col-md-4 col-sm-12 col-xs-12" src="../../public/path/{{ $val['img_1'] }}" alt=""/>
					@endif
					@if(!empty($val['img_2']))
					<img class="imgGalery col-lg-4 col-md-4 col-sm-12 col-xs-12" src="../../public/path/{{ $val['img_2'] }}" alt=""/>
					@endif
					@if(!empty($val['img_3']))
					<img class="imgGalery col-lg-4 col-md-4 col-sm-12 col-xs-12" src="../../public/path/{{ $val['img_3'] }}" alt=""/>
					@endif
					
				</div>
				
				
				<div class="qwerty" style="display: none;"></div>
				<div id="show" style="display: none;">
					<div  class="showImages">
						<img id="showImages" class="showImagesImg" src="" alt="" />
					</div>
					<div class="collectionImages">
						@if(!empty($val['img_1']))
						<img class="imgGaleryPopUp" src="../../public/path/{{ $val['img_1'] }}" alt=""/>
						@endif
						@if(!empty($val['img_2']))
						<img class="imgGaleryPopUp" src="../../public/path/{{ $val['img_2'] }}" alt=""/>
						@endif
						@if(!empty($val['img_3']))
						<img class="imgGaleryPopUp" src="../../public/path/{{ $val['img_3'] }}" alt=""/>
						@endif
					</div>
					
					
				</div>
				
			@endforeach
			
			</div>
			
			
			@if(!empty($cross_news))
			<div class="otherNews col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
				
				<h4 class="title">Читайте также:</h4>
				@foreach($cross_news as $new)
				<div class="otherNew col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<a href="/new/{{ $new[0]['new_id'] }}"><h5 class="title">{{ $new[0]['news_title'] }}</h5></a>
					<a href="/new/{{ $new[0]['new_id'] }}"><img src="/public/path/{{ $new[0]['img'] }}" alt=""/></a>
				</div>
				@endforeach
				
			</div>
			@endif
			
			
		</div>
		
	
@endsection










@section('footer')
	@parent
@endsection