@extends('layouts.default')

@section('content')
  @include('partials.header')

  <div class="clear"></div>

  <section>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Uh oh!</strong>&nbsp;&nbsp;Something went wrong with your email. Try again later
    </div>

    <div class="clear"></div>
    
    <a class="" href="{{ url('/') }}">Go Home</a>
  </section>

  <div class="clear"></div>

  @include('partials.footer')

@endsection
