<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="loginForm/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="loginForm/css/style.css">

</head>
@extends('layouts.app')
@section('content')
{{-- <div class="d-flex justify-content-center align-items-center registration-container" style="height: 91vh;">

    <form action="{{route('success')}}" class="registration-form" method="post">
{{csrf_field()}}
<div class="form-group mb-2">
    <label class="fw-bold">Name</label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control">
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group mb-2">
    <label class="fw-bold">Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class=" form-group mb-2">
    <label class="fw-bold">Date of Birth</label>
    <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
    @error('dob')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group mb-2">
    <label class="fw-bold">Password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control">
    @error('password')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group mb-2">
    <label class="fw-bold">Confirm Password</label>
    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
    @error('password_confirmation')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="row mt-3">
    <div class="col-4">
        <input type="submit" class="btn btn-success btn-sm mb-4" value="Register">
    </div>
    <div class="col-8">
        <div class="d-flex justify-content-end">
            <span class="fw-bold text-danger mx-3">Have an account?</span>
            <a href="{{ route ('login') }}" class="btn btn-danger btn-sm">Login</a>
        </div>
    </div>
</div>
</form>
</div> --}}
<div class="main">
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="{{route('success')}}" method="POST" class="register-form" id="register-form">
                    {{csrf_field()}}

                    <div class="form-group">
                        <div>
                            @error('name')
                            <h6 class="text-danger">{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" value="{{old('name')}}" id="name" placeholder="Your Name" />
                    </div>


                    <div class="form-group">
                        <div>
                            @error('email')
                            <h6 class="text-danger">{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />

                    </div>

                    <div class="form-group">
                        <div>
                            @error('password')
                            <h6 class="text-danger">{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Your Password" />

                    </div>
                    <div class="form-group">
                        <div>
                            @error('password_confirmation')
                            <h6 class="text-danger">{{$message}}</h6>
                            @enderror
                        </div>
                        <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Repeat your password" />

                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="loginForm/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="{{ route ('login') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

</html>






<!-- Sing in  Form -->
{{-- <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="loginForm/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{ route ('registration') }}" class="signup-image-link">Create an account</a>
</div>

<div class="signin-form">
    <h2 class="form-title">Sign up</h2>
    <form method="post" class="register-form" id="login-form" action="{{route('success')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="Your email" />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password"><i class="zmdi zmdi-lock"></i></label>
            <input type="password" name="password" id="password" placeholder="Your Password" />
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                me</label>
        </div>
        <div class="form-group form-button">
            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
        </div>
    </form>
    <div class="social-login">
        <span class="social-label">Or login with</span>
        <ul class="socials">
            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</section> --}}