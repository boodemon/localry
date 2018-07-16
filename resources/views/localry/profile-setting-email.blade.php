@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>My Settings</h3>
@include('localry.layouts.inc-profile-setting-tab')
<div class="row">
	<div class="col-sm-8 offset-sm-2 profile-setting-area">
		<div class="row profile-setting-area-top">
			<div class="col-sm-12">
				<h3 class="profile-name">Email Me About</h3>
				<p>
					To update your notification settings,
					you must first verify your email address.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 lc-form">
				<div class="row bottom-btn-group">
					<div class="col-sm-12">
						<button>Resend Verification Link</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection