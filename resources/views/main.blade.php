@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			
			
			
			<div id="home_news" class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
				@for($i = 0; $i < count($news); $i++)
					<div class="category_block">
						@if(count($news[$i]) > 1)
							<a class="link_category" href="/category/{{ $news[$i]['cat']['id'] }}"><h3>{{ $news[$i]['cat']['name'] }}</h3></a>
							<?php $count = count($news[$i]) - 1; ?>
							@for($t = 0; $t < $count; $t++)
								<a class="link_title" href="/new/{{ $news[$i][$t]['new_id'] }}">{{ $news[$i][$t]['news_title'] }}</a>
							@endfor
						@endif
					</div>
				@endfor
			</div>
			
			
			
			
			<div id="home_block" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="category_block">
					<a class="link_category" href=""><h3>ВАЖНОЕ:</h3></a>
					<div class="ajax_block col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="">
							<img src="/public/img/news/img_preview/new.jpg" alt="" />
							<span class="title">На зерновом терминале Cargill начался монтаж силосных башен</span>
						</a>
						
					</div>
					
					<div class="ajax_block col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="">
							<img src="/public/img/news/img_preview/new.jpg" alt="" />
							<span class="title">На зерновом терминале Cargill начался монтаж силосных башен</span>
						</a>
						
					</div>
					
					<div class="ajax_block col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="">
							<img src="/public/img/news/img_preview/new.jpg" alt="" />
							<span class="title">На зерновом терминале Cargill начался монтаж силосных башен</span>
						</a>
						
					</div>
					
					
				</div>
				
				
			</div>
			
			
			
			
		</div>
		
		
		
		
		
		
		
@endsection










@section('footer')
	@parent
@endsection