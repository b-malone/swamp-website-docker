@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    @include('partials.breadcrumb', array(
      'title' => 'members'
    ))

    <div class="clear"></div>

    <section class=" bg padT100 padB70">
      {{-- <div class="row"> --}}

      <div class="row" style="margin-bottom: 45px;">
        <div class="theme-heading">
          <div class="col-sm-4 col-sm-offset-4">
            <h3>SWAMP Leaders</h3>
            <div class="dd-theme-border">
              <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
      </div>

      <div class="clear"></div>

      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="message-description">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                {{-- <a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a> --}}
                <img class="img img-responsive" src="{{ URL::to('/img/peter.jpg') }}" alt="picture of Doctor Peter Ritsen">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h4>Dr. Peter Ritsen</h4>
                <p>PhD and professor @ PCC</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="message-description">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                {{-- <a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a> --}}
                <img class="img img-responsive" src="{{ URL::to('/img/david.jpg') }}" alt="picture of David Newcomb">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h4>David Newcomb</h4>
                <p>Environmental and Science Education</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="message-description">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <img class="img img-responsive" src="{{ URL::to('/img/jack.jpeg') }}" alt="picture of Jack Dojan">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h4>Jack Dojan</h4>
                <p>Environmental Activist</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="message-description">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3">
                <img class="img img-responsive" src="{{ URL::to('/img/michelle2.jpg') }}" alt="picture of Michelle Devlaeminck and owl ">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <h4>Michelle Devlaeminck</h4>
                <p>Public speaker and Environmental Activist</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

    <div class="clear"></div>
    @include('partials.footer')

@endsection
