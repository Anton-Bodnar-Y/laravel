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
		<a href="" >Форумы</a>
		<a href="" >Магазин</a>
	</div>
@show















@yield('content')










@section('footer')
	<div id="footer">
		<a href="" >страница 1</a>
		<a href="" >страница 2</a>
		<a href="" >страница 3</a>
		<a href="" >страница 4</a>
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
	height: 300px;
	border: 1px solid #555;
	box-sizing: border-box;
}
#home_news{
	position: relative;
	float: left;
	width: 50%;
	height: 300px;
	border: 1px solid #555;
	box-sizing: border-box;
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
	height: 300px;
	border: 1px solid #555;
	box-sizing: border-box;
}



</style>




