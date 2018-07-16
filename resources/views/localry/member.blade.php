<!DOCTYPE html>
<html lang="en">
<head>
<title>Localry</title>
@include('localry.layouts.inc-head')
@yield('stylesheet')
</head>
<body>
	<div class="wrapper profile-template">
		@include('localry.layouts.inc-header')
		<div class="profile-body">
			<div class="profile-bar relative">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="avartar">
								<figure>
									<img src="{{asset('public/localry/images/common/blank_avatar.jpg')}}">
								</figure>
							</div>
						</div>
						<div class="col-sm-10 align-self-center">
							<h2>Profile Name</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-10 offset-sm-1">
						<div class="profile-tab no-top-border">
							<div class="row">
								<div class="col"><a href="{{ url('#playlists') }}" class="active">Playlists</a></div>
								<div class="col"><a href="{{ url('#following') }}">Following</a></div>
							</div>
						</div>
						<!-- playlist -->
						<a name="playlists"></a>
						<div class="profile-top-title">
							<h3>Playlists</h3>
						</div>
						<hr class="separator-line full-width">
						<div class="profile-playlist">
							<div class="row">
								<?php for($i=0;$i<5;$i++){ ?>
								<div class="col-sm-6 playlist-row">
									<div class="row">
										<div class="col-sm-5">
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
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

						<!-- Following -->
						<a name="following"></a>
						<div class="profile-top-title">
							<h3>Following</h3>
						</div>
						<hr class="separator-line full-width">
						<div class="people-list">
							<?php for($i=0;$i<7;$i++){ ?>
							<div class="people-child">
								<figure>
									<a href="#">
										<img src="{{asset('public/localry/images/example/example-people.jpg')}}">
									</a>
								</figure>
								<div class="profile-name"><a href="#">Profile Name</a></div>
								<a href="#" class="option-link">Unfollow</a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('localry.layouts.inc-footer')
	</div>
	@yield('javascript')
</body>
</html>