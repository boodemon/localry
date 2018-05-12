@extends('localry.layouts.template')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('public/localry/css/jquery.bxslider.css') }}">
@endsection
@section('content')
<div class="container-fluid">
        @if( count($features) > 0 )
		<div class="row">
			<div class="col-sm-12">
				<div class="feature-banner">
					<a href="{{ url('singleplay/' . $features[0]->id ) }}">
						<img src="{{ asset('public/images/contents/'. $features[0]->thumb[0]->attach_thumb->$lng ) }}" alt="feature-banner">
					</a>
					<div class="vid-time-holder">
						<span class="vid-time-num">{{ @$features[0]->video_time->$lng }}</span>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="thumb-slide">
					<ul>
                @foreach( $features as $feature )
					<li>
						<div class="thumb-list-child">
							<div class="thumb-cover">
								<a href="{{ url('playlist') }}">
									<img src="{{ asset('public/images/contents/'. $feature->thumb[0]->attach_thumb->$lng ) }}">
								</a>
								<div class="vid-time-num">{{ @$feature->video_time->$lng }}</div>
							</div>
							<div class="thumb-caption">
								<a href="{{ url('playlist') }}">{{ $feature->subject->$lng }}</a>
							</div>
						</div>
					</li>

                @endforeach
					</ul>
				</div>
			</div>
        </div>
        @endif
        <!-- feature Video by Category -->
        @if( count( $category ) > 0 )
        @foreach( $category as $cate )
		<section class="feature-section full-width">
			<div class="row">
				<div class="col-sm-12">
					<fieldset class="featured-header">
						<legend><h2>{{ @$cate->subject->$lng }}</h2></legend>
					</fieldset>
				</div>
			</div>
			<div class="row thumb-list-row">
                <?php $cid = $cate->id ?>
                @if( count( $contents->$cid ) > 0 )
                @foreach( $contents->$cid as $content )
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/' . $content->id .'/'. Lib::encodelink(@$content->subject->$lng) ) }}">
								<img src="{{ asset('public/images/contents/'. @$content->thumb[0]->attach_thumb->$lng ) }}">
							</a>
							<div class="vid-time-num">{{ @$content->video_time->$lng }}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/' .  $content->id .'/'. Lib::encodelink($content->subject->$lng) ) }}">{{ $content->subject->$lng }}</a>
						</div>
					</div>
                </div>
                @endforeach
                @endif
			</div>
        </section>
        @endforeach
        @endif
		
		<!-- End feature Video by Category -->
		<hr class="separator-line full-width">

		<!-- Editor s Choices -->
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
		<!-- End Editor s Choices -->

		<!-- most love most watched -->
		<section class="most-section">
			<div class="row"></div>
			<div class="row vid-row">
				<?php for($i=4;$i<6;$i++){ ?>
				<div class="col">
					<h3>MOST LOVE</h3>
					<div class="row">
						<div class="col-sm-12 section-grid">
							<div class="row">
								<div class="col-sm-8 offset-sm-2">
									<div class="thumb-list-child">
										<div class="thumb-cover">
											<a href="{{ url('singleplay'. $features[$i]->id .'/'. Lib::encodelink( $features[$i]->subject->$lng ) ) }}">
												<img src="{{ asset('public/images/contents/'. $features[$i]->thumb[0]-> attach_thumb->$lng ) }}">
											</a>
											<div class="vid-time-num">{{ @$features[$i]->video_time->$lng }}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 offset-sm-2">
								<div class="thumb-list-child">
									<div class="thumb-caption">
										<a href="{{ url('singleplay/'. $features[$i]->id .'/'. Lib::encodelink( $features[$i]->subject->$lng )) }}">{{ $features[$i]->subject->$lng }}</a>
									</div>
								</div>
							</div>

					</div>

				</div>
				<?php } ?>
			</div>
		</section>
		<!-- end most love most watched -->
		<hr class="separator-line full-width">

		<!-- Editor s Story -->
		<section class="editor-story full-width">
			<div class="row">
				<div class="col-sm-10 offset-sm-1">
					<div class="row">
						<div class="col">
							<figure class="direct-img">
								<img src="{{ asset('public/images/example/director.jpg') }}">
							</figure>
						</div>
						<div class="col">
							<h2>sorrakrai tanigul</h2>
							<h3>DIRECTOR</h3>
							<hr>
							<div class="row thumb-list-row">
                                @if( count( $playlist ) > 0 )
                                @foreach( $playlist as $play )
								<div class="col-sm-6">
									<div class="thumb-list-child">
										<div class="thumb-cover">
											<a href="{{ url('playlist') }}">
												<img src="{{ asset('public/images/contents/'. $play->thumb[0]-> attach_thumb->$lng ) }}">
											</a>
											<div class="vid-time-num">{{ @$play->video_time->$lng }}</div>
										</div>
										<div class="thumb-caption">
											<a href="{{ url('playlist') }}">{{ $play->subject->$lng }}</a>
										</div>
									</div>
								</div>
                                @endforeach
                                @endif
							</div>



						</div>
					</div>
					<div class="row">
						<div class="col">
							<p>
								“I’M NOT A DIRECTOR” I HAVE FOUND THAT “DIRECTOR” IS ACTUALLY JUST ONE OF POSITIONS IN THE TEAMWORK. AND, THE MOST IMPORTANT PART OF THE CORE MEANING OF DIRECTING WORK IS HOW WE CAPTURING THE GREAT MOMENT IN EACH SHOT. BY CAPTURING THE EXPRESSION, THE MOOD, THE FEELING OF HUMAN INTO FRAMES IN ORDER TO TELL STORIES WITH MUSIC, MELODY AND VISUAL ART….I FIND THESE ARE THE THINGS I LOVE. I LOVE TO MAKE A FILMS...I MAKE A FILMS TO BE A LIFE. FROM NOW ON, IF ANYONE ASKS ME WHAT IS MY ROLE IN THE EARTH, I WILL BE PROUDLY RESPONSE THAT… ”I AM A CAPTURER” I HAVE BEEN CHOSEN TO WORK FOR BRANDS SUCH AS WRANGLER, NIVEA, AQUARUIS, TESCO, FINELINE, LAMINA FILM FOR INSTANCE. “I’M NOT A DIRECTOR” I HAVE FOUND THAT “DIRECTOR” IS ACTUALLY JUST ONE OF POSITIONS IN THE TEAMWORK. AND, THE MOST IMPORTANT PART OF THE CORE MEANING OF DIRECTING WORK IS HOW WE CAPTURING THE GREAT MOMENT IN EACH SHOT. BY CAPTURING THE EXPRESSION, THE MOOD,
							</p>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- End Editor s Story -->

		<hr class="separator-line full-width">

		<!-- following Chanel -->
		<section class="following-update full-width">
			<h2 class="section-title">UPDATE FROM FOLLOWING CHANEL</h2>
			<div class="row">
                    @if( count($features) > 0 )

                    @for($i = 0; $i < 3; $i++)
                    <?php $x = rand(0, count( $features )); ?>
				<div class="col">
                        <div class="thumb-list-child">
                                <div class="thumb-cover">
                                    <a href="{{ url('playlist') }}">
                                        <img src="{{ asset('public/images/contents/'. $features[$x]->thumb[0]-> attach_thumb->$lng ) }}">
                                    </a>
                                    <div class="vid-time-num">{{ @$features[$x]->video_time->$lng }}</div>
                                </div>
                                <div class="thumb-caption">
                                    <a href="{{ url('playlist') }}">{{ $features[$x]->subject->$lng }}</a>
                                </div>
                            </div>
				</div>
				@endfor
                @endif
			</div>
		</section>
		<!-- End following Chanel -->

		<hr class="separator-line full-width">

		<!-- recent view -->
		<section class="recent-view full-width">
			<h2 class="section-title">RECENT VIEWS</h2>
			<div class="row">
                    @if( count($features) > 0 )
                    @for($i = 0; $i < 5; $i++)
                    <?php $x = rand(0, count( $features )); ?>
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. @$features[$x]->id .'/'. Lib::encodelink( @$features[$x]->subject->$lng )) }}">
								<img src="{{ asset('public/images/contents/'. @$features[$x]->thumb[0]-> attach_thumb->$lng ) }}"/>
							<div class="vid-time-num">{{ @$features[$x]->video_time->$lng }}</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. @$features[$x]->id .'/'. Lib::encodelink( $features[$x]->subject->$lng )) }}">{{ $features[$x]->subject->$lng }}</a>
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
						maxSlides: 5,
						slideWidth: 230,
						slideMargin: 20,
						moveSlides: 1,
						pager:false,
			            onSlideAfter: function() {
				           // slider.startAuto();
				        }
			        });
		})
	</script>
@endsection