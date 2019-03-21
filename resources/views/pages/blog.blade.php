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

            @foreach ($posts as $post)
              <div class="single-blog">
                <div class="blog">
                  <figure class="blog-image">
                    <img class="img responsive-img" src="/storage/{{ $post->image }}" alt="">
                  </figure>
                  <div class="blog-detail">
                    <h4>{{ $post->title }}</h4>

                    <div class="col-lg-6 order-lg-2 text-white showcase-img report-img">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                      <p class="lead mb-0">
                        {!! html_entity_decode($post->body) !!}
                      </p>
                      <hr>
                    </div>

                    <div class="row padT20">
                      <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <div class="blog-member-detail">
                          <p>{{ toName($post->name) }}</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="blog-member-detail  text-right">
                          <p>{{ $post->meta_description }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
          {{-- PREV post --}}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {{ $posts->links() }}
          </div>

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
