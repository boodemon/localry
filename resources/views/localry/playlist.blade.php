@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/player.css') }}" media="screen,projection"/>
@endsection
@section('content')
<div class="container">
	@if( $playlist )
		<div class="row">
			<div class="col-sm-12">
				<div class="main-player">
				<div id="main-player"></div>
					<a href="#" class="play-btn">
						<img src="{{ asset('public/images/common/ico-play.svg') }}">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<div class="row under-player-section">
					<div class="col under-player-child vote-box">
						VOTE
						<div class="vote-row">
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child"></a>
						</div>
						4.5
					</div>
					<div class="col under-player-child add-comment-box">
						<a href="#">
							<img src="{{ asset('public/images/common/ico-plus.svg') }}" class="ico"> ADD TO PLAY LIST
						</a>
					</div>
					<div class="col under-player-child">
						<img src="{{ asset('public/images/common/ico-comment.svg') }}" class="ico"> COMMENT (100)
					</div>
					<div class="col under-player-child">
						<img src="{{ asset('public/images/common/ico-cart.svg') }}" class="ico"> ADD TO CART
					</div>
				</div>
			</div>
		</div>
		<div class="row player-content">
			<div class="col-sm-8">
				<div class="post-meta">
					<h2>{{ @$playlist[0]->subject->$lng}}</h2>
				</div>
				<div class="content-section">
					<p>{!! @$playlist[0]->detail->$lng !!}</p>

					<!-- Gallery Section -->
					<div class="gallery-section row">
						@if( count( @$playlist[0]->gallery ) > 0)
							@foreach( @$playlist[0]->gallery as $gallery)
								<a href="{{ asset('public/images/contents/'. $gallery->attach_file .'?image=251' ) }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
								<img src="{{ url('public/images/contents/'. $gallery->attach_file .'?image=251' ) }}" class="img-fluid rounded">
							  </a>
							  @endforeach
						@endif													
					</div>
					<!-- end Gallery Section -->

				</div>
			</div>
			<div class="col-sm-3 offset-sm-1 related-sidebar">
				<div class="top-btn">
					<a href="#" class="normal-button view-more">VIEW MORE</a>
				</div>
				<div class="related-list">
					<h3>RELATED</h3>
					<?php 
					if( $playlist ){
					for($i=0;$i<3;$i++){
						$x = rand(0,count($playlist)-1); ?>
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{  url('singleplay/'. @$playlist[$x]->id .'/'. Lib::encodelink( $playlist[$x]->subject->$lng )) }}">
								<img src="{{ asset('public/images/contents/'. $playlist[$x]->thumb[0]-> attach_thumb->$lng ) }}">
							</a>
							<div class="vid-time-num">{{@$recents[$x]->video_time->$lng}}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{  url('singleplay/'. @$playlist[$x]->id .'/'. Lib::encodelink( $playlist[$x]->subject->$lng )) }}">{{ $playlist[$x]->subject->$lng }}</a>
						</div>
					</div>
					<?php } }?>
				</div>
				<div class="bottom-btn">
					<a href="#" class="normal-button view-less">VIEW LESS</a>
				</div>

			</div>
		</div>
		<hr class="separator-line full-width">
		<!-- play list Zone -->
		<div class="row playlist-section">
			<div class="col-sm-8 offset-sm-2">
				@if( count($playlist) > 0 )
                @foreach($playlist as $play)
				<div class="thumb-list-child row">
						<div class="col">
							<div class="thumb-cover">
								<a href="{{ url('singleplay/'. $play->id .'/'. Lib::encodelink( $play->subject->$lng )) }}">
									<img src="{{ asset('public/images/contents/'. $play->thumb[0]-> attach_thumb->$lng ) }}">
								</a>
								<div class="vid-time-num">{{ @$play->video_time->$lng }}</div>
							</div>
						</div>
						<div class="thumb-caption col">
							<a href="{{ url('singleplay/'. $play->id .'/'. Lib::encodelink( $play->subject->$lng )) }}">{{$play->subject->$lng}}</a>
						</div>
				</div>
				@endforeach
                @endif

			</div>
		</div>
		<!-- end play list Zone -->
	</div>
	@endif
@endsection
@section('javascript')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css"> <!-- include for Galelry -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script> <!-- include for Galelry -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".view-more").click(function(e){
				e.preventDefault();
				$(".content-section").slideDown().fadeIn();
				setTimeout(function(){
					$(".player-content").addClass("active");
					$(".related-list").fadeIn();
				}, 100);
			})
			$(".view-less").click(function(e){
				e.preventDefault();
				$(".player-content").removeClass("active");
				$(".related-list").fadeOut('fast');
				$(".content-section").slideUp().fadeOut();
			})
		})
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/player_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// Replace the 'ytplayer' element with an <iframe> and
		// YouTube player after the API code downloads.
		var player;
		function onYouTubePlayerAPIReady() {
			player = new YT.Player('main-player', {
			height: '100%',
			width: '100%',
			videoId: '{{ Lib::videoID( @$playlist[0]->video_link->$lng ) }}',
			playlist:'{{ Lib::videoID( @$playlist[0]->video_link->$lng ) }}',
			});
		}

		/* include for Galelry */
		$(document).on("click", '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox();
		});

	</script>
@endsection