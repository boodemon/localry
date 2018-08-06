@extends('localry.layouts.template')
@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('public/localry/css/jquery.bxslider.css') }}">
@endsection
@section('content')
<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<fieldset class="featured-header">
						<legend><h2>ALL VIDEO & CONTENT</h2></legend>
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
@endsection