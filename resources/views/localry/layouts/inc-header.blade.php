<header>
	<div class="container-fluid">
		<div class="row header-box">
			<div class="col">
				<div class="mainmenu-holder ">
					<button class="mainmenu">
						<i class="fa"></i>
					</button>
					<div class="slide-menu">
						<ul>
							<li><a href="#">Playlists</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('/') }}">FEATURE VIDEO</a></li>
							@if( $menus )
								@foreach( $menus as $menu )
								<li><a href="{{ url('category/' . $menu['id'] .'/'. Lib::encodelink( $menu['subject']->$lng ) ) }}">{{ @$menu['subject']->$lng }}</a></li>
								@endforeach
							@endif
							<!--
							<li><a href="{{ url('category') }}">FOOD</a></li>
							<li><a href="{{ url('category') }}">LOVE & TRAVEL</a></li>
							<li><a href="{{ url('category') }}">MUSIC</a></li>
							<li><a href="{{ url('category') }}">PEOPLE</a></li>
							-->
						</ul>
						<ul>
							<li><a href="{{ url('aboutus') }}">ABOUT US</a></li>
						</ul>
						<ul>
							<li><a href="{{ url('contactus') }}">CONTACT US</a></li>
						</ul>
						<div class="social-block">
							<ul>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-fb.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-tw.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-vm.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-ig.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-yt.svg') }}" class="social-ico"></a></li>
							</ul>
						</div>
						<!--<div class="lang-menu">
							<div class="lang-dropdown">
								<a href="#">Languages <i class="fa"></i></a>

							</div>
							<div class="lang-popover">
								<ul>
									<li><a href="#">ภาษาไทย</a></li>
									<li><a href="#">CHAINESE</a></li>
								</ul>
							</div>
						</div>-->
					</div>
					<!--<div class="slide-menu">
						<ul>
							<li><a href="#">Playlists</a></li>
						</ul>
						<ul>
							<li><a href="#">Series</a></li>
						</ul>
						<ul>
							<li class="active"><a href="{{ url('/') }}">FEATURE VIDEO</a></li>
							<li><a href="{{ url('category') }}">FASHION & BEAUTY</a></li>
							<li><a href="{{ url('category') }}">FOOD</a></li>
							<li><a href="{{ url('category') }}">TRAVEL</a></li>
							<li><a href="{{ url('category') }}">MUSIC</a></li>
							<li><a href="{{ url('category') }}">PEOPLE</a></li>
						</ul>
						<ul>
							<li><a href="#">Topics</a></li>
						</ul>
						<ul>
							<li><a href="#">Picks</a></li>
						</ul>
						<ul>
							<li><a href="#">Contributors</a></li>
						</ul>
						<div class="social-block">
							<ul>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-fb.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-tw.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-vm.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-ig.svg') }}" class="social-ico"></a></li>
								<li><a href="#"><img src="{{ asset('public/images/common/ico-yt.svg') }}" class="social-ico"></a></li>
							</ul>
						</div>
						<ul>
							<li><a href="#">Become Contributors</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
						<div class="lang-menu">
							<div class="lang-dropdown">
								<a href="#">Languages <i class="fa"></i></a>

							</div>
							<div class="lang-popover">
								<ul>
									<li><a href="#">ภาษาไทย</a></li>
									<li><a href="#">CHAINESE</a></li>
								</ul>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			<div class="col header-mid-col">
				<a href="{{ url('/') }}" class="mainlogo">
					<img src="{{ asset('public/images/common/mainlogo.svg') }}">
					<h1>Localry</h1>
				</a>
			</div>
			<div class="col">
				<a href="{{ url('login') }}" class="member-menu">
					<img src="{{ asset('public/images/common/member-icon.svg') }}">
				</a>
			</div>
		</div>
	</div>
		<hr class="header-line">

</header>
<div class="top-nav">
	<div class="container">
		<div class="header-category-menu d-none d-sm-block">
			<ul>
				<li><a href="{{ url('/') }}">FEATURE VIDEO</a></li>
				@if( $menus )
				@foreach( $menus as $menu )
					<li><a href="{{ url('category/' . $menu['id']  .'/'. Lib::encodelink( $menu['subject']->$lng )) }}">{{ @$menu['subject']->$lng }}</a></li>
				@endforeach
			@endif
<!--
				<li class="active"><a href="{{ url('/') }}">FEATURE VIDEO</a></li>
				<li><a href="{{ url('category') }}">FASHION & BEAUTY</a></li>
				<li><a href="{{ url('category') }}">FOOD</a></li>
				<li><a href="{{ url('category') }}">TRAVEL</a></li>
				<li><a href="{{ url('category') }}">MUSIC</a></li>
				<li><a href="{{ url('category') }}">PEOPLE</a></li>
-->	
			</ul>
		</div>
	</div>
</div>