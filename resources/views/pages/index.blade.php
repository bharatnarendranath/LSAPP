@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Laravel</h1>
        <p class="lead">This is a simple laravel application which covers all fundamentals.</p>
        <hr class="my-4">
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
      </div>

@endsection
        