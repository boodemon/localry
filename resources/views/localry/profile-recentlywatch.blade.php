@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<div class="profile-top-title">
	<h3>My Playlist</h3>

<div class="dropdown title-option">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by : Most Recent
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Most Recent</a>
    <a class="dropdown-item" href="#">Playlist Title</a>
    <a class="dropdown-item" href="#">Highest Rate</a>
  </div>
</div>


</div>
<hr class="separator-line full-width">
<div class="row">
	<div class="offset-sm-2 col-8">
		<div class="row thumb-list-row">
			<?php for($i=0;$i<10;$i++){ ?>
			<div class="col-sm-6">
				<div class="thumb-list-child">
					<div class="thumb-cover">
						<a href="#">
							<img src="{{asset('public/localry/images/example/thumb-cover-small.jpg')}}">
						</a>
						<div class="vid-time-num"></div>
					</div>
					<div class="thumb-caption">
						<a href="#">EveryThink: Elephant Nature Park ศูนย์อภิบาลช้าง ที่เป็นมากกว่าบ้านของสัตว์ทุกตัว</a>
					</div>
					<div class="vote-box" style="margin-top: 10px;">
						RATE :
						<div class="vote-row">
							<a class="vote-child active"></a>
							<a class="vote-child active"></a>
							<a class="vote-child active"></a>
							<a class="vote-child active"></a>
							<a class="vote-child"></a>
						</div>
						4.5
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
@endsection