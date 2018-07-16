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

<div class="profile-playlist">
	<?php for($i=0;$i<5;$i++){ ?>
	<div class="playlist-row">
		<div class="row">
			<div class="col-sm-3">
				<figure>
					<a href="#">
						<img src="{{asset('public/localry/images/example/thumb-cover-small.jpg')}}">
					</a>
				</figure>
			</div>
			<div class="col-sm-7">
				<div class="playlist-meta">
					<h3><a href="#">List Name</a></h3>
					<div class="vote-box">
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
			<div class="col-sm-2 ">
				<div class="control">
					<ul>
					<li><a href="#"><i class="fa fa-times"></i></a></li>
					<li><a href="{{ url('profile/edit-playlist') }}"><i class="fa fa-pencil"></i></a></li>
					<li><a href="#"><i class="fa fa-share"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
@endsection