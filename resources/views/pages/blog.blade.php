@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    @include('partials.breadcrumb', array(
      'title' => 'blog'
    ))

    <div class="clear"></div>

    <section class=" bg padT100 padB70">
      <div class="container">

        <div class="row">
          <div class="col-md-12">

            <div class="single-blog">
              <div class="blog">
                <figure class="blog-image">
                  <img class="img responsive-img" src="/img/calm-frog.jpg" alt="">
                </figure>
                <div class="blog-detail">
                  <h4>Initial Findings Report</h4>

                  <div class="col-lg-6 order-lg-2 text-white showcase-img report-img">
                    {{-- <img class="img responsive-img" src="/img/calm-frog.jpg" alt=""> --}}
                  </div>
                  <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <p class="lead mb-0">
                      Our first report is out! Read about our initial findings from 2009 in the <span md-colors="{color:'accent'}">Clark County Amphibians Report</span> by clicking the link above.
                    </p>
                    <hr>

                    <a class="swamp-btn submit" href="#" href='/content/documents/clark_county_amphibian_report.pdf' target='_self' download='report_2009.pdf'>Download Amphibians Report</a>
                    {{-- <button type="button" class="btn btn-primary btn-lg btn-block">
                      <a href='/content/documents/clark_county_amphibian_report.pdf' target='_self' download='report_2009.pdf' class="btn btn-large swamp-btn" style="color: #fff;">
                        Download Amphibians Report&nbsp;&nbsp;<i class="glyphicon glyphicon-download"></i>
                      </a>
                    </button> --}}
                  </div>

                  <div class="row padT20">
                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                      <div class="blog-member-detail">
                        <p>by Peter Ritson, PhD</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="blog-member-detail  text-right">
                        <p>Vancouver, WA &nbsp;&nbsp; WSU-Vancouver</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          {{-- PREV post --}}
          {{-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="paginations post-pagination">
              <a href="#"><span>previous post</span></a>
              <a href="#">
                <h5>Heading Title of Children</h5>
              </a>
            </div>
          </div> --}}
          {{-- NEXT post --}}
          {{-- <div class="col-md-6 col-sm-6 col-xs-12 text-right">
            <div class="post-pagination">
              <a href="#"><span>next post</span></a>
              <a href="#">
                <h5>Heading Title of Children</h5>
              </a>
            </div>
          </div> --}}
          {{-- TAGS --}}
          {{-- <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="category-tags marT50">
              <h4>tags</h4>
              <div class="tags">
                <ul>
                  <li><a href="#">Animals</a></li>
                  <li><a href="#">Nature</a></li>
                  <li><a href="#">Recycle</a></li>
                  <li><a href="#">Events</a></li>
                </ul>
              </div>
            </div>
          </div> --}}
          {{-- blockquote --}}
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="author marT50">
                  <blockquote>Stay up to date on SWAMP events, reports and environmental actions by reading our blog and joining us for protecting the local wetlands.</blockquote>
              </div>
          </div>
        </div>

      </div>
    </section>

    <div class="clear"></div>
    @include('partials.footer')

@endsection
