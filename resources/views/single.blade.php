@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
		
		<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
			
			
			<div id="left_menu">
				<ul>
					@foreach($categories as $category)
					@if($category['category_id'] != 0)
					<li><a href="/category/{{ $category['category_id'] }}">{{ $category['category_title'] }}</a></li>
					@endif
					@endforeach
				</ul>
			</div>
			
			
			
			
			
			
			
			
			<div class="new col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
			
			@foreach($new as $val)
				<h3 class="title">{{ $val['news_title'] }}</h3>
				<p class="date"><span class="glyphicon glyphicon-calendar"></span>&#160;{{ date('j-m-o, G:i', $val['date']) }}</p>
				<p class="top_img"><img src="../../public/path/{{ $val['img'] }}" alt=""/></p>
				<div class="text_article">{!! $val['text'] !!}</div>
				
				<div class="block_img col-lg-12 col-md-12 col-sm-12 col-xs-12" id="block_img" >
					
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
				
				@if($tags)
				<div id="tags" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p><i>Теги:</i></p>
					<hr/>
					@foreach($tags as $tag)
					<a href="/tag/{{ $tag['tag_id'] }}"><span class="glyphicon glyphicon-tag"></span>&#160;{{ $tag['tag_name'] }}</a>
					@endforeach
				</div>
				@endif
			</div>
			
			
			
			
			
			
			
			<div class="comments col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
				
				
				
				
				<p><i>Комментарии:</i></p>
				<hr/>
				@if(empty($comments))
					<p class="message"><i>-- Здесь еще нет комментариев --</i></p>
				@endif
				<div class="commentsBlock">
					
					@foreach($comments as $value)
					<div style="margin-left: 15px;">
						<h4 style="margin: 15px 0 0 0;"><i>{{ $value['name'] }}</i></h4>
						<p style="margin: 0 0 0 0;"><i>{{ date('Y:n:j', $value['date']) }}</i></p>
						<p style="margin: 0 0 15px 0;">{{ $value['text'] }}</p>
					</div>
					@endforeach
					
					
				</div>
				
				
				
				
				
				<hr/>
				
				<form id="form" method="POST">
					<label>Имя:<br/><input type="text" name="name" class="inputText" id="name"/></label><br/>
					<label>Почта:<br/><input type="text" name="email" class="inputText" id="email"/></label><br/>
					<label>Текст комментария:<br/><textarea name="textConnemt" id="comment"></textarea></label><br/>
					
					<input type="hidden" name="news_id" value="{{ $new[0]['new_id'] }}" id="news_id"/>
					
					<input type="submit" name="btn" value="Отправить" class="inputBtn"/>
				</form>
				
			</div>
			
			
			@if(!empty($cross_news))
			<div class="otherNews col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
				
				<h4 class="title">Читайте также:</h4>
				@foreach($cross_news as $new)
				<div class="otherNew col-lg-6 col-md-6 col-sm-6 col-xs-6">
					
					<a href="/new/{{ $new[0]['new_id'] }}"><img src="/public/path/{{ $new[0]['img'] }}" alt=""/></a>
					<a href="/new/{{ $new[0]['new_id'] }}"><h5 class="title">{{ $new[0]['news_title'] }}</h5></a>
				</div>
				@endforeach
				
			</div>
			@endif
			
			
		</div>
		
	
@endsection










@section('footer')
	@parent
@endsection






<script type="text/javascript">
	
	
	
	
	
	
	
	
	(function () { 
		
		window.onload = function() {
			
			var form = document.getElementById('form');
			
			form.onsubmit = function(e){
				
				e.preventDefault();
				
				var data = "comment=" + encodeURIComponent(document.getElementById('comment').value) + "&name=" + encodeURIComponent(document.getElementById('name').value) + "&email=" + encodeURIComponent(document.getElementById('email').value) + "&news_id=" + encodeURIComponent(document.getElementById('news_id').value);
				
				
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "{{ route('sendcomment') }}", true);
				xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				xhr.send(data);
				
				xhr.onreadystatechange = function(){
					//alert(xhr.responseText);
					console.log( xhr.responseText );
					
					document.getElementsByClassName('commentsBlock')[0].innerHTML = xhr.responseText;
				}
				
				document.getElementById('name').value = '';
				document.getElementById('email').value = '';
				document.getElementById('comment').value = '';
				
				
				document.getElementsByClassName('message')[0].style.display = 'none';
				
				
				
				
				
			}
		}
	})();
	
	
	
	
	
	
	
	
	
</script>