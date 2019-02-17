@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    <!-- //***slider-section Start***// -->
    <div class="clear"></div>
    <div class="slider-section">
        <div id="slider" class="owl-carousel owlCarousel">
            <div class="item">
                <figure>
                    <img src="assests/img/slider/Rectangle-41.jpg" alt="" class="hidden-xs hidden-sm">
                    <img src="assests/img/slider/Rectangle-41.jpg" alt="" class="hidden-lg hidden-md">
                </figure>
                <div class="slider-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-box">
                                    <span class="top-border"></span>
                                    <span class="bottom-border"></span>
                                    <h1><span class="divider">Mission</span></h1>
                                    <p>Dedicated to protecting and monitoring the environment in SouthWest Washington, SWAMP surveys local amphibian sites and meaures ecosystem health annually. Amphibians can be indicators of the state of health of wetlands, which are central to environmental health.</p>
                                    {{--  LINK TO BLOG SECTION! --}}
                                    <span class="divider_btn">
                                      <a href="#">read more</a>
                                    </span>
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
                    <div class="item">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="email-detail">
                                <form class="search-bar">
                                    <b>Name</b>
                                    <input type="text" name="Name" placeholder="Full Name">
                                    <b>Email</b>
                                    <input type="text" name="Email" placeholder="info@gmail.com">
                                    <b>Message</b>
                                    <textarea row="8" cols="8" name="Message"></textarea>
                                    </span>
                                    <button type="submit" class="swamp-btn read-more" value="submit">submit</button>
                                </form>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Theme-heading End***// -->
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
                    {{-- <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                            <div class="blog">
                                <figure class="blog-image">
                                    <img src="assests/img/blog/Layer-64.jpg" alt="">
                                </figure>
                                <div class="blog-detail">
                                    <h4><b><a href="blog-single-sidebar.html">Better Life For Children</a></b></h4>
                                    <p>Towards Examined Wherever Less Eel Much Ahead ipsum dolor sit...</p>
                                    <div class="row padT20">
                                        <div class="col-md-6 col-sm-12 col-xs-6">
                                            <div class="blog-member-detail">
                                                <p><a href="#">by Anna Doe</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-6">
                                            <div class="blog-member-detail blog-text text-right">
                                                <p><a href="#">City,</a> <a href="#">Sport</a> <a href="#">people</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- //***Blog-section End***// -->

    <div class="clear"></div>
    @include('partials.footer')


@endsection
