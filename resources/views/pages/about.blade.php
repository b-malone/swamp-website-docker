@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    @include('partials.breadcrumb', array(
      'title' => 'about us'
    ))

    <div class="clear"></div>

    <section class=" bg padT100 padB70">

      <div class="theme-heading">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h3>about us</h3>
              <div class="dd-theme-border">
                <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
              </div>
              <p>
                An all volunteer program dedicated to empowering community members to assess and preserve the unique ecological resources for our community.
              </p>
              <br />
              <blockquote>
                <p>We want to educate Clark County residents about the importance of amphibians and their associated habitats,” said Dr. Ritson. “We hope to encourage their protection in several ways: engaging citizens in wildlife protection by training volunteers to survey and monitor pond-breeding amphibian species, providing data essential to species conservation decisions, and increasing public understanding of the importance of wetlands in a rapidly urbanizing region.</p>
                <footer><strong>Dr. Peter Ritsen (PhD)</strong></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <div class="about-us-section">
        <div class="container">
          <div class="row">
            {{-- <div class="col-md-12 hidden-lg hidden-md">
                <figure>
                  <img class="responsive-img img" src="img/survey-sites.png" alt="">
                </figure>
            </div> --}}
            <div class="col-md-4 col-sm-6 col-xs-12">
              <figure>
                <img class="responsive-img img" src="img/survey-sites.png" alt="">
              </figure>
              <div class="about-us">
                <h4>surveys</h4>
                <p>We monitor almost a dozen key sites every year to determine the health of the local amphibian populations and health of wetlands.</p>
              </div>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
              <div class="about-us">
                <figure></figure>
                <img src="assests/img/about-us/Layer-66.jpg" alt="">
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <figure>
                <img class="responsive-img img" src="img/landing_frog_pic.jpg" alt="">
              </figure>
              <div class="about-us">
                <h4>volunteer</h4>
                <p>SWAMP is community and volunteer run. We provide free training, education and adventures!</p>
              </div>
              {{-- <div class="about-us">
                  <h4><a href="#">Reports</a></h4>
                  <p></p>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="clear"></div>
    @include('partials.footer')

@endsection
