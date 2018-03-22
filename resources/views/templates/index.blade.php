<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	<meta name="description" content="{{ $description }}" >
		
		
		
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
		<div class="top-header col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
			<a class="logo" href="{{ route('main') }}"><img src="../../public/img/7575757.png" alt="" /></a>
			<p>ESA – European Society for Agronomy Through its web site, ESA acts as an open forum for agronomists, researchers, teachers and students who are concerned with basic and applied science in agronomy: the relationships between crops, soils, climates and agricultural practices, and between agriculture and the environment.</p>
		</div>
		<div class="bottom-header col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<div class="top-menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wrap col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
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
						<li><a href="{{ route('forums') }}" >Форумы</a></li>
						<li><a href="{{ route('shop') }}" >Магазин</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	
	
	
@show















@yield('content')










@section('footer')
	
	
	
			<footer id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wrap col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
						<p>Украина, г. Харьков, пр-т Московский, 95/2</p>
						<p>тел.: &nbsp;&nbsp;&nbsp; 050-219-64-16, &nbsp;&nbsp;&nbsp; 095-731-51-80, &nbsp;&nbsp;&nbsp; 057-859-95-56</p>
						<p>skupe: &nbsp;&nbsp;&nbsp; anton_bodnar</p>
						<p>email: &nbsp;&nbsp;&nbsp; bodnar_anton@ukr.net</p>
					</div>
					
					
					
				</div>
				
				<div class="bottomBlock col-lg-12 col-md-12 col-sm-12 col-xs-12">
					© 2011 ESA, European Society for Agronomy
				</div>
				
			</footer>
@show




	</body>
	</html>








	<script>
		function load1() {
			//content - appeal
			var oBlock = document.getElementById('content');
			//header height
			var headerHeight = document.getElementById('header');
			//alert(headerHeight.offsetHeight);
			//footer height
			var footerHeight = document.getElementById('footer');
			//alert(footerHeight.offsetHeight);
			//workspace height
			var heightClient = document.documentElement.clientHeight;
			//content height - calculation
			var heightContent = heightClient - headerHeight.offsetHeight - footerHeight.offsetHeight;
			//content height - appoint
			if(oBlock.offsetHeight < heightContent){
				document.getElementById('content').style.height = heightContent +"px";
			}
			//leftBlock height - appoint
			document.getElementById('left_block').style.height = oBlock.offsetHeight+"px";
		}
		

		setTimeout('load1()', 2000);


	</script>

<script src="{{ url('public/assets/js/galery.js') }}"></script>