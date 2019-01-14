@extends('index')
@section('content')

<h1 class="text-danger">Login Here</h1>

{{Form::open(['route'=>'post.login', 'method'=>'post'])}}

<fieldset>
    <label for="email">
        {{Form::email('Email',null)}}
    </label>
</fieldset>
<fieldset>
    <label for="password">
        {{Form::password('Password',null)}}
    </label>
</fieldset>
<fieldset>
    {{Form::submit('submit',array('class'=>'btn btn-lg btn-primary'))}}
    <input type="reset" name="Login"  class="btn btn-lg btn-success"/>
</fieldset>
{{Form::close()}}
@endsection