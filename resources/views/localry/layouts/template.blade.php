<!DOCTYPE html>
<html lang="en">
<head>
<title>Localry</title>
@include('localry.layouts.inc-head')
@yield('stylesheet')
</head>
<body>
	<div class="wrapper">
		@include('localry.layouts.inc-header-no-menu')
		<!-- content here-->
		@yield('content')
		<!-- end content here -->
		@include('localry.layouts.inc-footer')
	</div>
	@yield('javascript')
</body>
</html>