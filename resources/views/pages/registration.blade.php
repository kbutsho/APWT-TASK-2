<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">

</head>
@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center registration-container" style="height: 91vh;">
    {{-- <form action="{{route('login')}}" class="registration-form" method="post">
        {{csrf_field()}}
        <div class="form-group mb-2">
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group mb-2">
            <label>Id</label>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class=" form-group mb-2">
            <label>Date of Birth</label>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label>Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label>Phone</label>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
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
                <a  href="{{ route ('login') }}" class="btn btn-danger btn-sm">Login</a>
               </div>
            </div>
        </div>
    </form> --}}


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
                <a  href="{{ route ('login') }}" class="btn btn-danger btn-sm">Login</a>
               </div>
            </div>
        </div>
    </form>
</div>
@endsection
</html>