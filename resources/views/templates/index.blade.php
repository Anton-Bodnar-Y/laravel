<html>
<head>
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />
</head>
<body>



@section('header')
	<div id="header">
		<a href="{{ route('home') }}" >Главная</a>
		<a href="" >Новости</a>
		<a href="" >Форумы</a>
		<a href="" >Сообщество</a>
	</div>
@show



@section('left_menu')
	<div id="left_menu">
		<ul>
			<li><a href="" >Категория 1</a></li>
			<li><a href="" >Категория 2</a></li>
			<li><a href="" >Категория 3</a></li>
			<li><a href="" >Категория 4</a></li>
		</ul>
	</div>
@show

<div id="forum">
	@yield('forum')
</div>

<div id="content">
	@yield('content')
</div>


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
#forum{
	position: relative;
	float: left;
	width: 40%;
	height: 300px;
	border: 1px solid #555;
	box-sizing: border-box;
}
#content{
	position: relative;
	float: left;
	width: 40%;
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
</style>




