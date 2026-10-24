@extends('layouts.auth-master')

@section('content')
    
    <form action="/register" method="POST">
        @csrf
        <h1>Create Account</h1>
        @include('layouts.partials.messages')
        <div class=" form-floating mb-3">
            <input type="text" placeholder="Name"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Name</label>
        </div>
        <div class=" form-floating mb-3">
            <input type="email" placeholder="Email address" name="email" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Email address</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="password" placeholder="Password"name="password" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="password" placeholder="Password Confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
        </div>

        <div class="mb-3">
            <a href="/login">Login</a>
        </div>
        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
@endsection