@extends('templates.index')





@section('header')
	@parent
@endsection







@section('content')
	<div id="wrap">
		
		
		
		
		<div id="home_news">
			
			
			
			<p>Новости:</p>
			<div class="new">
			
			
			
			@for($i = 0; $i < count($news); $i++)
				
				
				@if(count($news[$i]) > 1)
					
					{{ $news[$i]['cat'] }}
					<hr/>
					
					<?php $count = count($news[$i]) - 1; ?>
					
					@for($t = 0; $t < $count; $t++)
						
						{{ $news[$i][$t]['news_title'] }}
						
						<hr/>
						
					@endfor
					
					<hr/><hr/>
				
				@endif
				
			@endfor
			
			</div>
			
			
			
			
			
			
			
	</div>
@endsection










@section('footer')
	@parent
@endsection