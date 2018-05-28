@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/login.css') }}" media="screen,projection"/>
@endsection
@section('content')
<div class=" card-login">
    <h3 class="text-center default-text py-3"><i class="fa fa-user"></i> Register Member</h3>
    <!--Body-->
    <form method="{{ url('auth/login') }}">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name..." class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email..." class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password..." class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password2" placeholder="Verify password..." class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>
    </form>
</div>
@endsection