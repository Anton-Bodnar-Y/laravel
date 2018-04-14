@extends('templates.adminContent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Панель приборов</div>
				
                <div class="panel-body">
                    
                    <h3>Выберите раздел админпанели</h3>
                    
                    <a class="link-home-admin" href="{{ route('admin/news') }}">Новости</a>
                    <a class="link-home-admin" href="{{ route('admin/categories') }}">Категории</a>
                    <a class="link-home-admin" href="{{ route('admin/tags') }}">Теги</a>
                    <a class="link-home-admin" href="{{ route('admin/pages') }}">Информ-страницы</a>
                    <a class="link-home-admin" href="{{ route('admin/users') }}">Пользователи админки</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



