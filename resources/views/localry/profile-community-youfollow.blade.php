@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>Community</h3>
@include('localry.layouts.inc-profile-community-tab')
<div class="people-list">
	<?php for($i=0;$i<3;$i++){ ?>
	<div class="people-child">
		<figure>
			<a href="#">
				<img src="{{asset('public/localry/images/example/example-people.jpg')}}">
			</a>
		</figure>
		<div class="profile-name"><a href="#">Profile Name</a></div>
		<div class="meta">100 Followers</div>
	</div>
	<?php } ?>
</div>
@endsection