@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<div class="profile-top-title">
	<div class="row">
		<div class="col-sm-4">
			<figure class="has-hover">
				<a href="#">
					<img src="{{asset('public/localry/images/example/thumb-cover-small.jpg')}}">
				</a>
				<div class="hover-menu">
					<a href="#"><i class="fa fa-pencil"></i></a>
				</div>
			</figure>
		</div>
		<div class="col-sm-8">
			<h3 style="text-align: left;">Playlist Tile</h3>
			<h4>Playlist Subtitle</h4>
			<p>2 Videoes</p>
			<ul class="btn-list">
				<li><button>Delete Playlist</button></li>
				<li><button>Preview Playlist</button></li>
				<li><button><i class="fa fa-search"></i> Search Video</button></li>
			</ul>
		</div>
	</div>
</div>
<hr class="separator-line full-width">
<div class="profile-playlist">
	<?php for($i=0;$i<2;$i++){ ?>
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
					<li><a href="#"><i class="fa fa-angle-up"></i></a></li>
					<li><a href="#"><i class="fa fa-angle-down"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
@endsection