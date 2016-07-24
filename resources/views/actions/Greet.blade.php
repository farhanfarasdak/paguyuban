@extends('layout.master')

@section('content2')
    <a href = "{{route('home')}}">Back</a>
    <h1>I greet {{ $name == null ? 'you' : $name}}!</h1>
@endsection    