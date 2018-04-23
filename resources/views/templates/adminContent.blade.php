<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            /*font-family: 'Lato';*/
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="toHome navbar-brand" href="{{ url('/') }}">
                    На сайт
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('admin') }}">Главная</a></li>
                    <li><a href="{{ route('admin/news') }}">Новости</a></li>
                    <li><a href="{{ route('admin/categories') }}">Категории</a></li>
                    <li><a href="{{ route('admin/tags') }}">Теги</a></li>
                    <li><a href="{{ route('admin/pages') }}">Информ-страницы</a></li>
                    <li><a href="{{ route('admin/users') }}">Пользователи</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Вход</a></li>
                        <li><a href="{{ url('/register') }}">Регистрация</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Выход</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>




<!-- https://color.adobe.com/ru/Flat-Design-Colors-color-theme-10679945/edit/?copy=true&base=1&rule=Custom&selected=0&name=Копия%20Flat%20Design%20Colors&mode=hsv&rgbvalues=0.89,0.4841600000000777,0.24920000000000003,0.27299999999999996,0.7,0.6146000000000776,0.87,0.35510499999980555,0.28709999999999997,0.198,0.3005999999999803,0.36,0.94,0.7908533333331782,0.30079999999999996&swatchOrder=0,1,2,3,4 -->


<style>




h3{
	line-height: 50px;
	color: #555;
	padding: 0 15px;
}
.link-home-admin{
	position: relative;
	display: block;
	line-height: 50px;
	color: #555;
	padding: 0 15px;
}
.link-home-admin:hover{
	background-color: #555;
	color: #fff;
}
th {
    font-weight: 100;
    text-align: -internal-center;
}








/*
.titleNew{
	height: 50px;
	width: 100%;
}
.newShortDesc{
	height: 100px;
	width: 100%;
}
.newText{
	height: 200px;
	width: 100%;
}
.imgUpdate{
	position: relative;
	display: inline-block;
	width: 100px;
	height: auto;
	float: left;
}
.categorySelect{
	height: 50px;
}
.crossSelect{
	height: 50px;
	margin: 10px 0;
}
.metaInfo{
	height: 50px;
	width: 100%;
}
.btn{
	border-radius: 0px;
}



.pagination {
}
.pagination ul li {
}
.pagination ul li a {
}
.pagination ul li a:hover {
}
.pagination ul .active span {
}
.pagination ul .disabled span {
}
*/

.toHome{
	background: #324D5C;
	color: #E37B40 !important;
}
.toHome:hover{
	color: #324D5C !important;
}
#app-layout{
	background: #324D5C !important;
}
.panel{
	border-radius: 0;
	border: none;
	background: #e7e7e7;
}
.panel-heading{
	background: #E37B40 !important;
	border-radius: 0;
}



hr{
	height: 2px;
	border: none;
	margin: 50px 0;
	background: #E37B40;
}



.formText{
	border: 1px solid #324D5C;
	padding: 0 25px;
	width: 100%;
	height: 50px;
	color: #324D5C;
}
.formSelect{
	border: 1px solid #324D5C;
	padding: 0 25px;
	width: 300px;
	height: 50px;
	color: #324D5C;
}
.formArea{
	border: 1px solid #324D5C;
	padding: 25px 25px;
	width: 100%;
	height: 100px;
	color: #324D5C;
}
.formImg{
	width: 200px;
	height: auto;
}
.formSubmit{
	width: 100%;
	height: 50px;
	border: none;
	border-radius: 0;
	margin: 30px 0;
	color: #324D5C;
	background: #E37B40 !important;
}

.addElements{
	background: #E37B40 !important;
	border-radius: 0;
	border: none;
	margin: 5px 0;
}


.pagination{
	border-radius: 0 !important;
}
.pagination li a{
	border: 1px solid #E37B40 !important;
	color: #324D5C;
	border-radius: 0 !important;
}
.pagination li span{
	border: 1px solid #E37B40 !important;
	border-radius: 0 !important;
}
.pagination .active span{
	background: #E37B40 !important;
	border-radius: 0 !important;
}
.panel-body a{
	color: #E37B40;
}

</style>

