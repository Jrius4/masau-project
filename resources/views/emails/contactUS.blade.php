<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.4 Cloudways Contact US Form Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Contact US Form</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}

<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
{!! Form::label('First Name:') !!}
{!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder'=>'Enter first name']) !!}
<span class="text-danger">{{ $errors->first('first_name') }}</span>
</div>

<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
  {!! Form::label('Last Name:') !!}
  {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>'Enter last name']) !!}
  <span class="text-danger">{{ $errors->first('last_name') }}</span>
  </div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
  {!! Form::label('Subject:') !!}
  {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter subject']) !!}
  <span class="text-danger">{{ $errors->first('subject') }}</span>
  </div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!}

</div>

</body>
</html>