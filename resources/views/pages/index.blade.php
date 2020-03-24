@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if (!Auth::guest())
        <h1>Welcome To Blog Site {{Auth::user()->name}} </h1>
        @else
        <h1>Welcome To Blog Site</h1>
        <p><a class="btn btn-primary btn-lg" href="/webapp/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/webapp/public/register" role="button">Register</a></p>
        @endif
    </div>
@endsection