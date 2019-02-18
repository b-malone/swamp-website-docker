@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    @include('partials.breadcrumb', array(
      'title' => 'events'
    ))

    <div class="clear"></div>

    <section class=" bg padT100 padB70">
      <h4>Coming Soon!</h4>
    </section>

    <div class="clear"></div>
    @include('partials.footer')

@endsection
