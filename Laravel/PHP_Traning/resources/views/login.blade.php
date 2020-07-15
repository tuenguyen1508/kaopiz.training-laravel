@extends('master')

@section('title')
    Log In
@endsection

@section('content')
    <br>
    <form class="login-form">
        <input type="text" placeholder="username"/>
        <br>
        <input type="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
@endsection
