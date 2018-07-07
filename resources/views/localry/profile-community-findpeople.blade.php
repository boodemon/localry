@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>Community</h3>
@include('localry.layouts.inc-profile-community-tab')
<div class="community-search-bar">
	<input type="text" placeholder="Type Search Here">
	<button>
		<i class="fa fa-search"></i>
	</button>
</div>

<hr class="separator-line full-width">
<h4 class="small-header">Recommend for You</h3>
<div class="people-list">
	<?php for($i=0;$i<10;$i++){ ?>
	<div class="people-child">
		<figure class="has-hover">
			<a href="#">
				<img src="{{asset('public/localry/images/example/example-people.jpg')}}">
			</a>
			<div class="hover-menu">
				<a href="#"><i class="fa fa-plus"></i></a>
			</div>
		</figure>
		<div class="profile-name"><a href="#">Profile Name</a></div>
		<div class="meta">100 Followers</div>
	</div>
	<?php } ?>
</div>
@endsection