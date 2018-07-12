@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<div class="profile-top-title">
	<h3>My Rating</h3>

<div class="dropdown title-option">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by : Recently Rate
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Recently Rate</a>
    <a class="dropdown-item" href="#">Highest Rate</a>
  </div>
</div>




</div>
<hr class="separator-line full-width">


@endsection