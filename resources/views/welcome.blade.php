@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="container mt-5">
    @auth
    <p>You're most welcome <span class="text-primary">{{auth()->user()->name}}</span></p>
    @endauth
</div>

@endsection