@extends('localry.layouts.template')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('public/localry/css/jquery.bxslider.css') }}">
@endsection
@section('content')
<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="category-header">
					<h2>FASHION & BEAUTY</h2>
					<div class="follow-box">
						<a href="#">FOLLOW THIS CATEGORY</a>
						<span>1,000 users follow category</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="category-banner">
					<a href="{{ url('singleplay/11') }}">
						<div class="banner-title">FASHION & BEAUTY</div>
						<img src="{{ Lib::ybImage( $youtubes[11]['url'] ) }}" alt="feature-banner">
					</a>
					<div class="vid-time-holder">
						<span class="vid-time-num">05:20</span>
					</div>
				</div>
			</div>
		</div>
		<!-- add Item List -->
		<div class="row">
			<div class="col-sm-3">
				<div class="mostplay-title">
					<h4>MOST PLAY IN</h4>
					<h3>FASHION & BEAUTY</h3>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="thumb-slide">
					<ul>
				<?php for($i=9;$i<13;$i++){
					$x = rand(0,12); ?>
					<li>
						<div class="thumb-list-child">
							<div class="thumb-cover">
								<a href="{{ url('playlist') }}">
									<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
								</a>
								<div class="vid-time-num">5:20</div>
							</div>
							<div class="thumb-caption">
								<a href="{{ url('playlist') }}">{{ $youtubes[$x]['title'] }}</a>
							</div>
						</div>
					</li>

				<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end Item List -->

		<hr class="separator-line full-width">

		<!--------- Feature Playlist -------------->

		<section class="feature-playlist full-width">
			<h2 class="section-title">Play List</h2>
			<div class="row">
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('playlist') }}">
								<img src="{{ Lib::ybImage( $youtubes[8]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('playlist') }}">
							{{ $youtubes[8]['title'] }}
								<!--<div class="clear"></div>
								<span>อนาคตการท่องเที่ยวไทย อนาคตการท่องเที่ยวไทย</span>-->
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row thumb-list-row">
						<?php for($i=9;$i<13;$i++){
							$x = rand(0,12); ?>
						<div class="col-sm-6">
							<div class="thumb-list-child">
								<div class="thumb-cover">
									<a href="{{ url('playlist') }}">
										<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
									</a>
									<div class="vid-time-num">5:20</div>
								</div>
								<div class="thumb-caption">
									<a href="{{ url('playlist') }}">{{ $youtubes[$x]['title'] }}</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

		</section>

		<!--------- End Feature Playlist ---------->
		<hr class="separator-line full-width">
		<!-- Editor's Choices -->
		<section class="editor">
			<h2 class="section-title">EDITOR’S CHOICE</h2>
			<div class="row">
				<div class="col-sm-12">
					<div class="editor-banner full-width">
						<a href="{{ url('playlist') }}">
							<div class="banner-title">EDITOR’S CHOICE</div>
							<img src="{{ asset('public/images/example/editor-banner.jpg') }}">
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Editor's Choices -->
		<hr class="separator-line full-width">
		<!--------- Feature Playlist -------------->

		<section class="feature-playlist full-width">
			<h2 class="section-title">Play List</h2>
			<div class="row">
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('playlist') }}">
								<img src="{{ asset('public/images/example/thumb-cover-mid.jpg') }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('playlist') }}">
								อนาคตการท่องเที่ยวไทย
								<span>อนาคตการท่องเที่ยวไทย อนาคตการท่องเที่ยวไทย</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="row thumb-list-row">
						<?php for($i=0;$i<4;$i++){
							$x = rand(0,12); ?>
						<div class="col-sm-6">
							<div class="thumb-list-child">
								<div class="thumb-cover">
									<a href="{{ url('playlist') }}">
										<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
									</a>
									<div class="vid-time-num">5:20</div>
								</div>
								<div class="thumb-caption">
									<a href="{{ url('playlist') }}">{{ $youtubes[$x]['title'] }}</a>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

		</section>

		<!-- ------- End Feature Playlist ---------->

		<hr class="separator-line full-width">

		<!-- category-thumb-list -->
		<section class="category-thumb-list full-width">
			<div class="row">
				<div class="col">
					<div class="selector-holder">
						<img src="{{ asset('public/images/example/dropdown.svg') }}" class="ico">
						<select class="form-selector">
							<option>SORT BY</option>
							<option>Post Date</option>
							<option>Video Length</option>
							<option>Most PLayed</option>
						</select>
					</div>

				</div>
				<div class="col"><h2 class="section-title">PREVIOUS IN CATEGORY</h2></div>
				<div class="col">
					<a href="#" class="top-view-all normal-button">View All</a>
				</div>
			</div>
			<!-- begin big Loop Here -->
			<div class="row">
				<div class="col-sm-12"><h3 class="flag-row">DEC 2017</h3></div>
			</div>
			<div class="row">
				<?php for($i=0;$i<10;$i++){
					$x = rand(0,12);
				?>
				<div class="col-sm-3">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('playlist') }}">
								<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('playlist') }}">{{ $youtubes[$x]['title'] }}</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-sm-12"><h3 class="flag-row">DEC 2017</h3></div>
			</div>
			<div class="row">
				<?php for($i=0;$i<4;$i++){
					$x = rand(0,12);
				?>
				<div class="col-sm-3">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('playlist') }}">
								<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('playlist') }}">{{ $youtubes[$x]['title'] }}</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- end big Loop Here -->


			<div class="row">
				<div class="col loadmore-bar">
					<a href="#" class="loadmore normal-button">LOAD MORE</a>
				</div>
			</div>
		</section>
		<!-- End category-thumb-list -->


    </div>
@endsection
@section('javascript')
	<script type="text/javascript" src="{{ asset('public/localry/js/jquery.bxslider.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var slider = $('.thumb-slide ul').bxSlider({
			            mode: 'horizontal', //mode: 'fade',
			            speed: 300,
			            auto: false,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            minSlides: 1,
						maxSlides: 4,
						slideWidth: 230,
						slideMargin: 10,
						moveSlides: 1,
						pager:false,
			            onSlideAfter: function() {
				           // slider.startAuto();
				        }
			        });
		})
	</script>
@endsection