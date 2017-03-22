@extends('layouts.main')
@section('content')
<div class="jumbotron">
  <h1>Aboutus</h1>
  <p>Name:{{$username}}, Location:{{$location}}</p>
  <p><a class="btn btn-primary btn-lg" href="{{route('home')}}" role="button">Back To Home</a></p>
</div>
@endsection