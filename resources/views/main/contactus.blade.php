@extends('home')


@section('content')


      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Contact</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div id="contact" class="container">
          <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>We are here to help you</h2>
                </div>
                <p class="lead">Are you curious about something? Do you have some kind of problem with our products? As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built gay party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                <p class="text-sm">Please feel free to contact us, our customer service center is working for you 24/7.</p>
              </div>
            </div>
          </section>
          <section>
            <div class="row text-center">
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                  <h3 class="h4">Address</h3>
                  <p>13/25 New Avenue<br>                                        New Heaven, 45Y 73J<br>                                        England,  <strong>Great Britain</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                  <h3 class="h4">Call center</h3>
                  <p>This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                  <p><strong>+33 555 444 333</strong></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-simple">
                  <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                  <h3 class="h4">Electronic support</h3>
                  <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
                  <ul class="list-unstyled text-sm">
                    <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="bar pt-0">
            <div class="row">
              <div class="col-md-12">
                <div class="heading text-center">
                  <h2>Contact form</h2>
                </div>
              </div>
              <div class="col-md-8 mx-auto">
                @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}
<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('first_name') ? 'has-error' : '' }}">
{!! Form::label('First Name') !!}
{!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder'=>'Enter first name']) !!}
<span class="text-danger">{{ $errors->first('first_name') }}</span>
</div>

<div class="form-group col-sm-6 {{ $errors->has('last_name') ? 'has-error' : '' }}">
  {!! Form::label('Last Name') !!}
  {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>'Enter last name']) !!}
  <span class="text-danger">{{ $errors->first('last_name') }}</span>
  </div>

<div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group col-sm-6 {{ $errors->has('subject') ? 'has-error' : '' }}">
  {!! Form::label('Subject') !!}
  {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter subject']) !!}
  <span class="text-danger">{{ $errors->first('subject') }}</span>
  </div>

<div class="form-group col-sm-12 {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group col-sm-12 text-center">
  <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Send message</button>
</div>
</div>
{!! Form::close() !!}
              </div>
            </div>
          </section>
        </div>
        <div id="map"></div>
      </div>

 

     
 @endsection