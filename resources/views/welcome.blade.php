@extends('layouts.main')
@section('content')
<div class="jumbotron">
  <h1>Hello, world!</h1>
    <p>Name:{{$username}}, Location:{{$location}}</p>
  <p><a class="btn btn-primary btn-lg" href="{{route('aboutus')}}" role="button">About Us</a></p>
</div>
@endsection