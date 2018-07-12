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
				<h3 class="profile-name">Notifications</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 offset-sm-3 lc-form">
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						New Video
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						New Follower
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						New Playlist within Community
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						New Comments
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						My Playlist Rate
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						My Video Rate within Community
					</div>
				</div>
				<div class="row bottom-btn-group">
					<div class="col-sm-4 offset-sm-4">
						<button>SAVE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection