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
									<img src="{{ asset('public/images/contents/'. @$feature->thumb[0]->attach_thumb->$lng ) }}">
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

			<div class="row">
				<div class="col-sm-12">
					<fieldset class="featured-header">
						<legend><h2>{{ $subject }}</h2></legend>
					</fieldset>
				</div>
			</div>
        <!-- feature Video by Category -->
		<section class="feature-section full-width">
			<div class="row thumb-list-row">
                @if( count( $contents ) > 0 )
                @foreach( $contents as $content )
				<div class="col-md-3 col-sm-3 col-lg-3">
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
                    <div class="text-center col-md-12 col-sm-12">
                        {!! $rows->links() !!}
                    </div>

                @endif
			</div>
            </div>
        </section>
	
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