@extends('layout')
@section('title', 'Login')
@section('content')

<div class="container">
<div class="col-md-5 mx-auto mt-5">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{$error}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif

    @if (session()->has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('error')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    @if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


  </div>
  <form action="{{route('login.post')}}" method="post" class="col-md-5 mx-auto my-5 p-4 border">
    @csrf

    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary form-control">Login</button>
  </form>
</div>
@endsection