<html>
<head>
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />
</head>
<body>



@section('header')
	<div id="header">
		<a href="{{ route('home') }}" >Главная</a>
		<a href="{{ route('news') }}" >Новости</a>
		<a href="{{ route('forums') }}" >Форумы</a>
		<a href="{{ route('shop') }}" >Магазин</a>
	</div>
@show















@yield('content')










@section('footer')
	<div id="footer">
		
		@foreach($pages as $page)
			<a href="/public/page/{{ $page['id'] }}">{{ $page['title'] }}</a>
		@endforeach
		
	</div>
@show





</body>
<html>



<style>
#header a{
	position: relative;
	float: left;
	display: block;
	color: #555;
	margin: 10px;
}
#left_menu a{
	position: relative;
	display: block;
	color: #555;
	margin: 10px;
}
#footer a{
	position: relative;
	float: left;
	display: block;
	color: #555;
	margin: 10px;
}
#header{
	position: relative;
	float: left;
	width: 100%;
	height: 100px;
	border: 1px solid #555;
	box-sizing: border-box;
}
#left_menu{
	position: relative;
	float: left;
	width: 20%;
	height: 500px;
	border: 1px solid #555;
	box-sizing: border-box;
}
#home_forum{
	position: relative;
	float: left;
	width: 50%;
	height: auto;
	border: 1px solid #555;
	box-sizing: border-box;
}
#home_news{
	position: relative;
	float: left;
	width: 50%;
	height: auto;
	border: 1px solid #555;
	box-sizing: border-box;
}
#home_news .new .new_cont a img {
	height: 100px;
	width: 100px;
	float: left;
	margin: 10px;
}
#footer{
	position: relative;
	float: left;
	width: 100%;
	height: 100px;
	border: 1px solid #555;
	box-sizing: border-box;
}





/**
* NEWS PAGES
*/
#news{
	position: relative;
	float: left;
	width: 70%;
	height: auto;
	border: 1px solid #555;
	box-sizing: border-box;
}
#news .new .new_cont a img {
	height: 100px;
	width: 100px;
	float: left;
	margin: 10px;
}


/**
* /LEFT MENU
*/
#left_menu ul {
	list-style-type: none;
}



/**
* /PAGE
*/
#wrap #page{
	height: 500px;
}
#wrap #page img{
	height: 200px;
	width: 200px;
}



/**
* pagination
*/
.pagination {
	list-style-type: none;
}
.pagination li {
	float: left;
	border: 1px solid #000;
	width: 30px;
	height: 30px;
	margin: 5px;
	
}
.pagination li a, span {
	position: relative;
	display: block;
	width: 100%;
	height: 100%;
	text-align: center;
	line-height: 30px;
}


</style>




