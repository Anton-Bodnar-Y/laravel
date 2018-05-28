<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<title>{{ isset($title) ? $title : ''}}</title>
	<meta name="description" content="{{ isset($description) ? $description : ''}}" >
	<meta name="keywords" content="{{ isset($keywords) ? $keywords : ''}}" >
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" type="path-to/favicon.ico" href="{{ url('public/img/favicon.ico') }}">
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" >
		<link href="https://fonts.googleapis.com/css?family=Exo+2:700" rel="stylesheet" >
		
		<!-- НОВОЕ ПОДКЛЮЧЕНИЕ -->
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/reset.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/bootstrap.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/styles.css') }}" />
		
		<!--<link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/styles.less') }}" />
		<link rel="stylesheet" type="text/css" href="{{ url('public/assets/js/less.js') }}" />-->
		
	</head>
	<body>



@section('header')
	
	<header id="header" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="top-header col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			<a class="logo" href="{{ route('main') }}"><img src="../../public/img/7575757.png" alt="" /></a>
			<p>NewsArgo - Аграрные новости Украины и Мира. Новости зернового и масличного рынка, законы, рейдерство, коррупция в аграрном секторе, аналитика цен на продукцию мировых и украинских аграриев.</p>
			
			
			
			<form id="searchForm" action="{{ route('search') }}" method="post">
			
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li style="color: #ba0000; font-size: 14px;">- {{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				
				<input type="text" class="searchText" name="searchText" placeholder="поиск по статьям" required/>
				{!! csrf_field() !!}
				<input type="submit" class="searchSubmit" name="searchSubmit" value="Искать" />
			</form>
			
		</div>
		<div class="bottom-header col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<div class="top-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wrap col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
					<ul>
						<li><a href="{{ route('main') }}" >Главная</a></li>
						<li>
							<a href="{{ route('news') }}" >Новости</a>
							<div class="wrap_child">
								<ul>
									@foreach($categories as $category)
									
									@if($category['category_id'] != 0)
									<li><a href="/category/{{ $category['category_id'] }}">{{ $category['category_title'] }}</a></li>
									@endif
									
									@endforeach
								</ul>
							</div>
						</li>
						<li><a href="" >Магазин</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	
	
	
@show















@yield('content')










@section('footer')
	
	
	
			<footer id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wrap col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="left-block col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<h3><span style="font-size: 22px;" class="glyphicon glyphicon-info-sign"></span>&#160;Информация</h3>
						<ul>
							
							@foreach($pages as $page)
								<li><a href="/page/{{ $page['id'] }}">{{ $page['title'] }}</a></li>
							@endforeach
							
						</ul>
					</div>
					<div class="right-block col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<h3><span style="font-size: 22px;" class="glyphicon glyphicon-earphone"></span>&#160;Контакты</h3>
						<p>Украина, Харьковская обл., Харьков</p>
						<p>тел.: &nbsp;&nbsp;&nbsp; +38 (050) 406-23-02, &nbsp;&nbsp;&nbsp; +38 (067) 682-24-02</p>
						<p>skupe: &nbsp;&nbsp;&nbsp; .......</p>
						<p>email: &nbsp;&nbsp;&nbsp; khaskom_trade@ukr.net</p>
					</div>
					
					
					
				</div>
				
				<div class="bottomBlock col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php echo "© 2018 - " . Date('Y') . " Agro-News, аграрные новости Украины" ?>
				</div>
				
			</footer>
@show

	<div id="goToUp" class="goToUp"><p>НАВЕРХ</p></div>


	</body>
	</html>








	<script type="text/javascript">
		
		(function() {
			
			'use strict';
			
			
			
			window.onscroll = function() {
				var btnScrollDown = document.querySelector('#goToUp');
				var scrolled = window.pageYOffset || document.documentElement.scrollTop;
				if(scrolled > 200){
					btnScrollDown.style.opacity = '0.7';
				}else{
					btnScrollDown.style.opacity = '0.1';
				}
			}
			
			
			
			
		})();
		
		
		
		(function() {
			var btnScroll = document.querySelector('#goToUp');
			btnScroll.onclick = function() {
				window.scrollTo(500, 0);
			}
		})();
		
	</script>

<script src="{{ url('public/assets/js/galery.js') }}"></script>

