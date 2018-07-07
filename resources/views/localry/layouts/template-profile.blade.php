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
			<div class="profile-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 offset-sm-2 align-self-center">
							<h2>Profile Name</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col profile-left-col">
						<div class="avartar">
							<figure>
								<img src="{{asset('public/localry/images/common/blank_avatar.jpg')}}">
							</figure>
						</div>
						<div class="profile-mainmenu">
							<ul>
								<li class="active"><a href="#">FEED</a></li>
								<li><a href="{{ url('profile/following/playlist') }}">FOLLOWING</a></li>
								<li><a href="{{ url('profile/community/findpeople') }}">COMMUNITY</a></li>
								<li><a href="{{ url('profile/myplaylist/') }}">MY PLAYLISTS</a></li>
								<li><a href="{{ url('profile/myrating/') }}">MY RATINGS</a></li>
								<li><a href="{{ url('profile/recentlywatched/') }}">RECENTLY WATCHED</a></li>
								<li><a href="{{ url('profile/mysetting/') }}">MY SETTINGS</a></li>
								<li><a href="{{ url('/') }}">LOG OUT</a></li>
							</ul>
							<!--
								- !!!! ใส่ Class active ที่ tag li เมื่อกดเมนูเข้าสู่หน้านั้นๆ
							-->
						</div>
					</div>
					<div class="col profile-right-col">
						<!-- content here-->
						@yield('content')
						<!-- end content here -->
					</div>
				</div>
			</div>
		</div>

		@include('localry.layouts.inc-footer')
	</div>
	@yield('javascript')
</body>
</html>