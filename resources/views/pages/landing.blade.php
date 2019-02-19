@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    <div class="clear"></div>

    {{-- <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      ALERT
    </div> --}}

    @if (session('status'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('status') }}
      </div>
    @elseif (session('error'))
      <div class="alert alert-danger" >
        {{ session('error') }}
      </div>
    @endif

    <div class="clear"></div>

    <div class="slider-section">
      <div id="slider" class="owl-carousel owlCarousel">
        <div class="item">
          <figure>
            <img src="assets/img/slider/Rectangle-41.jpg" alt="" class="hidden-xs hidden-sm">
            <img src="assets/img/slider/Rectangle-41.jpg" alt="" class="hidden-lg hidden-md">
          </figure>
          <div class="slider-text">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="slider-box">
                    <span class="top-border"></span>
                    <span class="bottom-border"></span>
                    <h1><span class="divider hidden-xs">Mission</span></h1>
                    <p class="hidden-xs">Dedicated to protecting and monitoring the environment in SouthWest Washington, SWAMP surveys local amphibian sites and meaures ecosystem health annually. Amphibians can be indicators of the state of health of wetlands, which are central to environmental health.</p>
                    {{--  LINK TO BLOG SECTION! --}}
                    {{-- <span class="divider_btn">
                      <a href="#">read more</a>
                    </span> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clear"></div>

    <section>
      <div class="message-section">
        <div class="container">
          <div class="row">
            <div class="item" style="margin-top: 15px;">
              <div class="col-md-4 col-sm-5 col-xs-12">

                <div class="email-detail">
                  {{-- @if (\Session::has('alert'))
                    <div class="alert alert-success" style="z-index: 1000;">
                      {!! \Session::get('success') !!}
                    </div>
                  @else --}}
                    <form method="post" action="{{ url('/email/message') }}" name="email-message" class="email-message">
                      {{ csrf_field() }}

                      <b>Name</b>
                      <input type="text" name="name" placeholder="Full Name">
                      <b>Email</b>
                      <input type="email" name="email" placeholder="info@gmail.com">
                      <b>Message</b>
                      <textarea row="8" cols="8" name="message"></textarea>
                      </span>
                      <button type="submit" class="swamp-btn read-more" value="submit">submit</button>
                    </form>
                  {{-- @endif --}}
                </div>

              </div>
            </div>
            <div class="col-md-8 col-sm-7 col-xs-12">
              <div class="message">
                <h3>leave us a message</h3>
                <p>Whether you're intersted in volunteering to help the environment, or you simply have questions, we're happy to hear from you. Feel free to send us an email with this form or find us on social media.</p>
                  {{-- <p><a href="#">Read more<i class="fa fa-angle-double-right angle-icon" aria-hidden="true"></i></a></p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="padT100 padB70">

        <div class="theme-heading">
          <div class="container">
            <div class="row">

              <div class="col-md-6 col-md-offset-3">
                <h3>news</h3>
                <div class="dd-theme-border">
                  <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                </div>
                <p>SWAMP is a community and volunteer run organization.
                  Our activities help monitor and improve the health of wetlands in
                  Washington state.
                </p>
                <p>
                  Peter Ritson, PhD., an environmental scientist,
                  is looking for volunteers to search for amphibians and their eggs.
                  This is the tenth year of this entirely volunteer program which monitors
                  Clark County's wetlands by examining amphibian populations. The project
                  involves training community volunteers to search for pond breeding
                  amphibians and their eggs this winter, then reporting the findings to
                  local and state agencies.
                </p>
              </div>

            </div>
          </div>
        </div>

        <div class="bolg-section">
          <div class="container">
            <div class="row">

              <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                      <div class="blog">
                          <div class="blog-detail">
                              <h4><b>2019 Training Day</b></h4>
                              <p>February 16, 2019 <br> 10:00am - 1:30pm</p>
                              <div class="row padT20">
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                      <div class="blog-member-detail">
                                          <p><a class="null-link" href="#">@&nbsp;WSUV VLIB 201</a></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                      <div class="blog">
                          <div class="blog-detail">
                              <h4><b>Surveys are starting!</b></h4>
                              <p>
                                Waiters, equipment, snacks and training provided.
                                <br>
                                Asking for volunteers to help science and your local environment.
                              </p>
                              <div class="row padT20">
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                      <div class="blog-member-detail">
                                          <p><a class="null-link" href="#">Contact Us to Help!</a></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="item">
                <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                  <div class="blog">
                    {{-- <figure class="blog-image">
                        <img src="assets/img/blog/Layer-64.jpg" alt="">
                    </figure> --}}
                    <div class="blog-detail">
                      <h4><b><a href="blog-single-sidebar.html">Actively Monitoring Community</a></b></h4>
                      <p>We have compiled our monitoring sites pinpointed in Google Maps. If you have <strong>Google Earth</strong>, you can also download all the sites to your computer!</p></p>
                      <div class="row padT20">
                        <div class="col-md-6 col-sm-12 col-xs-6">
                          <div class="blog-member-detail">
                            <a class="swamp-btn submit"
                              href="#" href='content/maps/MyPlaces.kmz'
                              target='_self' download='monitoring_sites_map.kmz'>
                              Download GoogleMap's File
                            </a>
                          </div>
                        </div>
                        {{-- <div class="col-md-6 col-sm-12 col-xs-6">
                            <div class="blog-member-detail blog-text text-right">
                                <p><a href="#">City,</a> <a href="#">Sport</a> <a href="#">people</a></p>
                            </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="theme-heading">
          <div class="container">
            <div class="row">

              <div class="col-md-6 col-md-offset-3">
                <h3>Submit Data</h3>
                <div class="dd-theme-border">
                  <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <p>
                    Have some survey data to share with us?
                  </p>
                  <br>
                  <div class="blog-member-detail">
                    <p>
                      <a href="http://spreadsheets.google.com/viewform?key=pNXZClz4xRjo7tL5awlMqAQ&amp;hl=en">
                        Click here to enter it electronically
                      </a>
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

    </section>

    <div class="clear"></div>
    @include('partials.footer')


@endsection
