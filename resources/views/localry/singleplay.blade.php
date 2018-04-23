@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/player.css') }}" media="screen,projection"/>
@endsection
@section('content')<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="main-player">
					<div id="main-player"><img src="{{ asset('public/images/contents/'. $content->thumb[0]-> attach_thumb->$lng ) }}" class="cover"></div>
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
					<!--
					<div class="col under-player-child">
						<img src="{{ asset('public/images/common/ico-cart.svg') }}" class="ico"> ADD TO CART
					</div>
					-->
				</div>
			</div>
		</div>
		<div class="row player-content">
			<div class="col-sm-8">
				<div class="post-meta">
					<h2>{{ $content->subject->$lng }}</h2>
				</div>
				<div class="content-section">
					<p>
					{!! $content->detail->$lng !!}
					</p>

					<!-- Gallery Section -->
					<div class="gallery-section row">
						@if( count( $content->gallery ) > 0)
						@foreach( $content->gallery as $gallery)
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
					<?php for($i=0;$i<3;$i++){
						$x = rand(0, count( $recents )-1 );  ?>
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $recents[$x]->id .'/'. Lib::encodelink( $recents[$x]->subject->$lng )) }}">
								<img src="{{ asset('public/images/contents/'. $recents[$x]->thumb[0]-> attach_thumb->$lng ) }}">
							</a>
							<div class="vid-time-num">{{ @$recents[$x]->video_time->$lng }}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $recents[$x]->id .'/'. Lib::encodelink( $recents[$x]->subject->$lng )) }}">{{ $recents[$x]->subject->$lng }}</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="bottom-btn">
					<a href="#" class="normal-button view-less">VIEW LESS</a>
				</div>

			</div>
		</div>
		<hr class="separator-line full-width">
	</div>

	<div class="container">
		<!-- Most View List -->
		<section class="following-update full-width">
			<h2 class="section-title">MOST VIEWED IN FASHION & BEAUTY</h2>
			<div class="row">
				<?php for($i=0;$i<3;$i++){
						$x = rand(0,count( $recents)-1);  ?>
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $recents[$x]->id .'/'. Lib::encodelink( $recents[$x]->subject->$lng )) }}">
								<img src="{{ asset('public/images/contents/'. $recents[$x]->thumb[0]-> attach_thumb->$lng ) }}">
							</a>
							<div class="vid-time-num">{{ @$recents[$x]->video_time->$lng }}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $recents[$x]->id .'/'. Lib::encodelink( $recents[$x]->subject->$lng )) }}">{{ $recents[$x]->subject->$lng }}</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
		<!-- End Most View List -->
		<hr class="separator-line full-width">
	</div>

	<div class="container-fluid">
		<!-- Editor s Choices -->
		<section class="editor">
			<h2 class="section-title">EDITOR’S CHOICE</h2>
			<div class="row">
				<div class="col-sm-12">
					<div class="editor-banner">
						<a href="{{ url('playlist') }}">
						<div class="banner-title">EDITOR’S CHOICE</div>
						<img src="{{ asset('public/images/example/editor-banner.jpg') }}">
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Editor s Choices -->
	</div>


	<div class="container-fluid">
		<!-- recent view -->
		<section class="recent-view full-width">
			<h2 class="section-title">RECENT VIEWS</h2>
			<div class="row">
					@if( count($features) > 0 )
                    @for($i = 0; $i < 5; $i++)
                    <?php $x = rand(0, count( $features )-1); ?>
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $features[$x]->id .'/'. Lib::encodelink( $features[$x]->subject->$lng )) }}">
								<img src="{{ asset('public/images/contents/'. $features[$x]->thumb[0]-> attach_thumb->$lng ) }}"/>
							<div class="vid-time-num">{{ @$features[$x]->video_time->$lng }}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $features[$x]->id .'/'. Lib::encodelink( $features[$x]->subject->$lng )) }}">{{ $features[$x]->subject->$lng }}</a>
						</div>
					</div>
				</div>
				@endfor
                @endif
			</div>
		</section>
		<!-- end recent view -->
    </div>
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
			videoId: '{{ Lib::videoID( $content->video_link->$lng) }}'
			});
		}

		/* include for Galelry */
		$(document).on("click", '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox();
		});

    </script>

@endsection