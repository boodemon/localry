@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>My Settings</h3>
@include('localry.layouts.inc-profile-setting-tab')
<div class="row">
	<div class="col-sm-8 offset-sm-2 profile-setting-area">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 lc-form">
				<div class="row bottom-btn-group">
					<div class="col-sm-12">
						<button class="btn-social-link"><i class="fa fa-facebook"></i> Link to Your Facebook</button>
					</div>
					<div class="col-sm-12">
						<button class="btn-social-link"><i class="fa fa-twitter"></i> Link to Your Twitter</button>
					</div>
					<div class="col-sm-12">
						<button class="btn-social-link"><i class="fa fa-linkedin"></i> Link to Your LinkedIn</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection