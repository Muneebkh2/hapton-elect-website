@extends('layouts.auth', ['title' => 'Login'])
<?php //dd(\Auth::user());?>
@section('content')
<section class="auth">
    <div class="main">
        <div class="container">
            <center>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="middle">
                    <div id="login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset class="clearfix">
                                <p>
                                    <span class="fa fa-user"></span>
                                    <input name="email" type="email" Placeholder="Email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <!-- JS because of IE support; better: placeholder="Username" -->
                                <p>
                                    <span class="fa fa-lock"></span>
                                    <input name="password" type="password" Placeholder="Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <!-- JS because of IE support; better: placeholder="Password" -->
                                <div>
                                    <span style="width:48%; text-align:left;  display: inline-block;">
                                        <a class="small-text" href="#">
                                            Forgot password?
                                        </a>
                                    </span>
                                    <span style="width:50%; text-align:right;  display: inline-block;">
                                        <input class="btn" type="submit" value="Sign In">
                                    </span>
                                </div>
                            </fieldset>
                            <div class="clearfix"></div>
                        </form>
                        <div class="clearfix"></div>
                    </div> <!-- end login -->
                    <div class="logo">
                        <div class="site-logo">
                            <a href="{{ route('home') }}"><img src="assets/Hapton-Logo.png" alt="Hapton"
                                    class="img-fluid"></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</section>
@endsection
