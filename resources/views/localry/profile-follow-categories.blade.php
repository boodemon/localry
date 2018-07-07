@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>Following</h3>
@include('localry.layouts.inc-profile-follow-tab')
<div class="profile-list">
	<?php for($i=0;$i<5;$i++){ ?>
	<div class="profile-row">
		<div class="row">
			<div class="col-sm-2">
				<figure>
					<img src="{{asset('public/localry/images/example/thumb-cover-small.jpg')}}">
				</figure>
			</div>
			<div class="col-sm-8">
				<h3>List Name</h3>
				<div class="list-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</div>
			</div>
			<div class="col-sm-2 profile-row-control">
				10 Videos
				<a href="#" class="remove-list"><i class="fa fa-times"></i></a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
@endsection