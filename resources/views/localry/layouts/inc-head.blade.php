<?php
	include(public_path('localry') .'/class/Mobile_Detect.php');
	$detect = new Mobile_Detect;
  $device = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- open if have favicon
@include('localry.layouts.inc-favicon')
-->
<!--
<link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
-->
<!-- Bootstrap -->
<link href="{{ asset('public/localry/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('public/localry/css/bootstrap.min.css') }}" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/layout.css') }}" media="screen,projection"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="{{ asset('public/localry/js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('public/localry/js/respond.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/localry/js/PIE_IE678.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/localry/js/PIE.js') }}"></script>
<![endif]-->
<!--[if IE 9]>
<script type="text/javascript" src="{{ asset('public/localry/js/IE9.js') }}"></script>
<![endif]-->

<script type="text/javascript" src="{{ asset('public/localry/js/jquery-1.11.3.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('public/localry/js/bootstrap.min.js') }}"></script>