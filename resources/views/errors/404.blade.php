@extends('layouts.errors')
@section('content')

  <header class="masthead-404 text-white text-center">
    {{-- <div class="overlay"></div> --}}

    <div class="container-fluid">
      <div class="row">

        <div class="col-xl-12">
          <h1 class="mb-5">Aw, schucks!</h1>
          <br />
          <br />
          <h2><small>You probably didn't mean to navigate here.</small></h2>
          <p>Head on back to our <a class="link-text" href="{{ url('/') }}">home page</a> and watch your step out there!</p>
        </div>

      </div>
    </div>

  </header>

@stop
