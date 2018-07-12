@extends('localry.layouts.template-profile')
@section('stylesheet')
@endsection
@section('content')
<h3>My Settings</h3>
@include('localry.layouts.inc-profile-setting-tab')
<div class="row">
	<div class="col-sm-8 offset-sm-2 profile-setting-area">
		<div class="row profile-setting-area-top">
			<div class="col-sm-4 offset-sm-4">
				<div class="avartar">
					<figure class="has-hover">
						<img src="{{asset('public/localry/images/common/blank_avatar.jpg')}}">
						<div class="hover-menu">
							<a href="#">Change Cover Image</a>
						</div>
					</figure>
				</div>
			</div>
			<div class="col-sm-12">
				<h3 class="profile-name">Profile Name</h3>
				<a href="{{ url('member') }}" class="default-link">View Profile</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 offset-sm-2 lc-form">
				<input type="text" value="Profile Name">
				<input type="text" value="Email">
				<input type="password" placeholder="Change Password">
				<input type="text" placeholder="First Name">
				<input type="text" placeholder="Last Name">
				<textarea placeholder="Short Bio"></textarea>
				<div class="select-holder">
					<select>
						<option>Select Region</option>
					</select>
					<i class="fa fa-angle-down"></i>
				</div>
				<div class="select-holder">
					<select>
						<option>Choose Your Gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Unset</option>
					</select>
					<i class="fa fa-angle-down"></i>
				</div>
				<div class="row lc-form-field-group">
					<div class="col">
						<label>DATE OF BIRTH</label>
					</div>
					<div class="col">
						<div class="select-holder">
							<select>
								<option>Month</option>
							</select>
							<i class="fa fa-angle-down"></i>
						</div>
					</div>
					<div class="col">
						<div class="select-holder">
							<select>
								<option>Date</option>
							</select>
							<i class="fa fa-angle-down"></i>
						</div>
					</div>
					<div class="col">
						<div class="select-holder">
							<select>
								<option>Year</option>
							</select>
							<i class="fa fa-angle-down"></i>
						</div>
					</div>
				</div>
				<div class="row lc-form-field-group">
					<div class="col-sm-1">
						<input type="checkbox">
					</div>
					<div class="col-sm-11">
						Privacy :  Make my profile visible to the LOCALRY community.
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