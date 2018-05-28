@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/login.css') }}" media="screen,projection"/>
@endsection
@section('content')
<div class="card-forgot">
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><i class="fa fa-key"></i> Password Reset</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="inputResetPasswordEmail">Email</label>
                    <input type="email" class="form-control" id="inputResetPasswordEmail" required="">
                    <span id="helpResetPasswordEmail" class="form-text small text-muted">
                            Password reset instructions will be sent to this email address.
                        </span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection