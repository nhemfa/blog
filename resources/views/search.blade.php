@extends('index')
@section('contents')
    {{Form::open(['route'=>'post.find','method'=>'post'])}}
    <input type="search" placeholder="Search product" name="search"/>
     {{Form::submit('search')}}
     {{Form::close()}}
@endsection