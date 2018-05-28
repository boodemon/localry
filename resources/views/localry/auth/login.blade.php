@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/login.css') }}" media="screen,projection"/>
@endsection
@section('content')
<div class="card-login">
    <h3 class="text-center default-text py-3"><i class="fa fa-user"></i> Member</h3>
    <!--Body-->
    <form method="{{ url('auth/login') }}">
            <div class="card">
            <article class="card-body">
                <a href="{{ url('register') }}" class="float-right btn btn-outline-primary">Register</a>
                <h4 class="card-title mb-4 mt-1">Sign in</h4>
                <p>
                    <a href="" class="btn btn-block btn-outline-primary"> <i class="fa fa-facebook-square"></i>   Login with facebook</a>
                </p>
                <hr>
                <div class="form-group">
                    <input name="" class="form-control" placeholder="Email or login" type="email">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <input class="form-control" placeholder="******" type="password">
                </div> <!-- form-group// -->                                      
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                        </div> <!-- form-group// -->
                    </div>
                    <div class="col-md-6 text-right">
                        <a class="small text-danger" href="{{ url('forgot') }}">Forgot password?</a>
                    </div>                                            
                </div> <!-- .row// -->                                                                  
            </article>
            </div> <!-- card.// -->

    </form>
</div>
@endsection