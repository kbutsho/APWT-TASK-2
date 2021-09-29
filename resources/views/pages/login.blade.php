<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">

</head>
@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 90vh;">
    <form action="{{route('success')}}" class="login-form" method="post">
        {{csrf_field()}}
        <div class="form-group mb-4">
            <label class="fw-bold my-2">Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
    
        <div class="form-group mb-4">
            <label class="fw-bold my-2">Password</label>
            <input type="password" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="row">
            <div class="col-4">
                <input type="submit" class="btn btn-success btn-sm mb-4" value="Login">
            </div>
            <div class="col-8">
               <div class="d-flex justify-content-end">
                <span class="fw-bold text-danger mx-3">New user?</span>
                <a  href="{{ route ('registration') }}" class="btn btn-danger btn-sm">Register</a>
               </div>
            </div>
        </div>
    </form>
</div>
@endsection
</html>