@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>My Settings</h3>
@include('localry.layouts.inc-profile-setting-tab')
<div class="row">
	<div class="col-sm-6 offset-sm-3 profile-setting-area">
		<div class="row profile-setting-area-top">
			<div class="col-sm-12">
				<p>
					If you want to delete your account, click the button below. Please note that this cannot be undone
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 lc-form">
				<div class="row bottom-btn-group">
					<div class="col-sm-12">
						<button>Delete Account</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection