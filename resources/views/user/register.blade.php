@extends('index')
@section('content')

<div class="col">
    @foreach($login as $register)
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
    @endforeach
</div>
@endsection