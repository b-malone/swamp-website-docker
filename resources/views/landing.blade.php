@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    <!-- //***Header-section Start***// -->
    <div class="main-header">
        <div class="top-bar" id="top-bar-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="contact">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-menu" class="wa-main-menu main-menu">
            <!-- Menu -->
            <div class="wathemes-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default theme-bg mar0" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="navbar-header">
                                    <!-- Button For Responsive toggle -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    <!-- Logo -->
                                    <a class="navbar-brand" href="index.html">
                                    <img class="site_logo" alt="Site Logo" src="assets/img/Charity.png" />
                                    </a>
                                </div>
                                <!-- Navbar Collapse -->
                                <div class="navbar-collapse collapse">
                                    <!-- nav -->
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>home</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-file-text" aria-hidden="true"></i>pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="single-volatee.html">volunteer detail</a></li>
                                                <li><a href="gallery.html">our gallery</a></li>
                                                <li><a href="error.html">error 404</a></li>
                                                <li><a href="comming-soon.html">comming soon</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html"><i class="fa fa-cog" aria-hidden="true"></i>services</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="event-full.html">event full</a></li>
                                                <li><a href="event-page.html">event page</a></li>
                                                <li><a href="events-details.html">events details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-style-1.html">Blogs Style 1</a></li>
                                                <li><a href="blog-style-2.html">Blogs Style 2</a></li>
                                                <li><a href="blog-style-3.html">Blogs Style 3</a></li>
                                                <li class="left-side">
                                                    <a href="#" class="hidden-xs">Single Blog <i class="fa fa-angle-right hidden-xs" aria-hidden="true"></i></a>
                                                    <a href="#" class="hidden-sm hidden-lg hidden-md">Single Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog-single-sidebar.html">With Sidebar</a></li>
                                                        <li><a href="blog-single-full-width.html">Without Sidebar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="FAQs.html"><i class="fa fa-life-ring" aria-hidden="true"></i>FAQs</a></li>
                                        <li><a href="contact.html"><i class="fa fa-phone" aria-hidden="true"></i>contact</a></li>
                                    </ul>
                                    <!-- navbar-collapse -->
                                </div>
                            </div>
                            <!-- col-md-12 -->
                            <div class="col-md-2 hidden-sm hidden-xs">
                                <div class="menu-bar-btn">
                                    <a class="swamp-btn submit" href="contact.html">submit now</a>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
                <!-- navbar -->
            </div>
            <!--  Menu -->
        </div>
    </div>
    <!-- //***Header-section End***// -->
    <!-- //***slider-section Start***// -->
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
                                    <h1><span class="divider">Save the Life</span></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span class="divider_btn"><a href="#">read more</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="item">
                <figure>
                    <img src="assets/img/slider/bnr04.jpg" alt="" class="hidden-xs hidden-sm">
                    <img src="assets/img/slider/bnr04.jpg" alt="" class="hidden-lg hidden-md">
                </figure>
                <div class="slider-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-box">
                                    <span class="top-border"></span>
                                    <span class="bottom-border"></span>
                                    <h1><span class="divider">Save the Life</span></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span class="divider_btn"><a href="#">read more</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="assets/img/slider/bnr02.jpg" alt="" class="hidden-xs hidden-sm">
                    <img src="assets/img/slider/bnr02.jpg" alt="" class="hidden-lg hidden-md">
                </figure>
                <div class="slider-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-box">
                                    <span class="top-border"></span>
                                    <span class="bottom-border"></span>
                                    <h1><span class="divider">Save the Life</span></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <span class="divider_btn"><a href="#">read more</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- //***slider-section End***// -->
    <div class="clear"></div>
    <!-- //***Message-section Start***// -->
    <section>
        <div class="message-section">
            <div class="container">
                <div class="row">
                    <div class="item">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="email-detail">
                                <form class="search-bar">
                                    <b>Name</b>
                                    <input type="text" name="Name" value=" Full Name">
                                    <b>Username or Email</b>
                                    <input type="text" name="Username or Email" value="info@gmail.com">
                                    <span class="remember-me">
                                    <input type="checkbox" value="forever" id="rememberme1" name="rememberme1">
                                    <label class="inline radio-label" for="rememberme1"><a href="#" class="wa-theme-color no-hover">remember me</a></label>
                                    <span class="box-check"><span class="inside"></span></span>
                                    </span>
                                    <button type="submit" class="swamp-btn read-more" value="submit">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <div class="message">
                            <h3>leave us a message</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget lorem magna. Fusce eu urna a sapien fringilla viverra. Morbi ut est ac diam sagittis auctor. Suspendisse ut eros et est elementum sollicitudin. lacus vel viverra molestie...</p>
                            <p><a href="#">Read more<i class="fa fa-angle-double-right angle-icon" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="message-section-description padT100 padB70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">Lnteractive Elements</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">submit</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-usd text-center" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">submit</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">Contribute</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">Participate</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message-description">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="#"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <h4><a href="services.html">Lnteractive Elements</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusm tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //***Message-section End***// -->
    <div class="clear"></div>
    <!-- //***About-us-section Start***// -->
    <section class=" bg padT100 padB70">
        <!-- //***Theme-heading Start***// -->
        <div class="theme-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3>about us</h3>
                        <div class="dd-theme-border">
                            <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                        </div>
                        <p>Charixy is the charity, Non-profit government organization, fundraising.Our activities help entrepreneurs get the target.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Theme-heading End***// -->
        <div class="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 hidden-lg hidden-md">
                        <figure>
                            <img src="assets/img/about-us/Layer-66.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="about-us">
                            <h4><a href="#">donation</a></h4>
                            <p>Vision is our mission. Restoring vision to people in developing nations is our cause. We are a nonpr local phy sicians</p>
                        </div>
                        <div class="about-us">
                            <h4><a href="#">fundrise</a></h4>
                            <p>Vision is our mission. Restoring vision to people in developing nations is our cause. We are a nonpr local physicians</p>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <div class="about-us">
                            <figure></figure>
                            <img src="assets/img/about-us/Layer-66.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="about-us">
                            <h4><a href="#">scholarship</a></h4>
                            <p>Vision is our mission. Restoring vision to people in developing nations is our cause. We are a nonpr local physicians</p>
                        </div>
                        <div class="about-us">
                            <h4><a href="#">volunteer</a></h4>
                            <p>Vision is our mission. Restoring vision to people in developing nations is our cause. We are a nonpr local physicians</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //***About-us-section End***// -->


    <!-- //***Gallery-section Start***// -->
    <section class="padT100">
        <!-- //***Theme-heading Start***// -->
        <div class="theme-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3>our gallery</h3>
                        <div class="dd-theme-border">
                            <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                        </div>
                        <p>Charixy is the charity, Non-profit government organization, fundraising.Our activities help entrepreneurs get the target.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Theme-heading End***// -->
        <div class="gallery-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-67.jpg" alt="">
                                <figcaption>
                                    <div class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-67.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="row ">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-45.jpg " alt=" ">
                                <figcaption>
                                    <div  class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-45.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="row">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-46.jpg" alt="">
                                <figcaption>
                                    <div class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-46.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="row ">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-48.jpg " alt=" ">
                                <figcaption>
                                    <div class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-48.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-50.jpg" alt="">
                                <figcaption>
                                    <div class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-50.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <figure class="gallery-image">
                                <img src="assets/img/gallery/Layer-51.jpg" alt=" ">
                                <figcaption>
                                    <div  class="gallery-hover">
                                        <a href="assets/img/gallery/Layer-51.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //***Gallery-section End***// -->
    <!-- //***Blog-section Start***// -->
    <section class="padT100 padB70">
        <!-- //***Theme-heading Start***// -->
        <div class="theme-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3>our blog</h3>
                        <div class="dd-theme-border">
                            <span class="theme-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                        </div>
                        <p>Charixy is the charity, Non-profit government organization, fundraising.Our activities help entrepreneurs get the target.</p>
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
                                <figure class="blog-image">
                                    <img src="assets/img/blog/Layer-63.jpg" alt="">
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
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                            <div class="blog">
                                <figure class="blog-image">
                                    <img src="assets/img/blog/Layer-54.jpg" alt="">
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
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-4 col-xs-12 marB30">
                            <div class="blog">
                                <figure class="blog-image">
                                    <img src="assets/img/blog/Layer-64.jpg" alt="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //***Blog-section End***// -->

    <div class="clear"></div>
    <!-- //***Main-footer Start***// -->
    <footer class="main-footer">
        <div class="special-style special-style-dark col-md-12">
            <div class="bg-image parallax-style" style="background-image:url('assets/img/background/Layer-62.jpg');"></div>
        </div>
        <a href="#" class="footer-icon"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <div class="upper-footer box padT100 padB70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-footer-logo text-center marB80">
                            <a href="index.html"><img src="assets/img/footer-logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row footer-widget">
                    <div class="col-md-3 col-sm-6">
                        <div class="details">
                            <h4>about us</h4>
                            <ul class="layers">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Volunteer Engagement</a></li>
                                <li><a href="#">Communication</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="details">
                            <h4>discover</h4>
                            <ul class="layers">
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Where We are Headed</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Board and Staff</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="details">
                            <h4>quick link</h4>
                            <ul class="layers">
                                <li><a href="#">Earth hour</a></li>
                                <li><a href="#">Save Water</a></li>
                                <li><a href="#">Equality</a></li>
                                <li><a href="#">Women</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="details">
                            <h4>tags</h4>
                            <ul class="tag-cloud">
                                <li><a href="#">Faith</a></li>
                                <li><a href="#">Forgiveness</a></li>
                                <li><a href="#">Donation</a></li>
                                <li><a href="#">Animals</a></li>
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Recycle</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***volunteer Start***// -->
        <div class="volunteer padTB30">
            <div class="container">
                <div class="row volunteer-row">
                    <div class="col-md-5 col-xs-12 col-sm-5">
                        <div class="sign-up-detail">
                            <h1>Sign up for our volunteer</h1>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="row">
                            <form>
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <div class="volunteer-bar marT10">
                                        <input type="text" placeholder="Enter your E-mail">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12 marT10">
                                    <button type="submit" class="swamp-btn">subcribes now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***volunteer End***// -->
        <!-- //***Footer-copyright Start***// -->
        <div class="copyright">
            <div class="container">
                <div class="row copyright-row">
                    <div class="col-md-12">
                        <p>Copyright 2017 All Right Reserved<a href="#"><span>swamp</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //***Footer-copyright End***// -->
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    {{-- <script src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script> --}}
    {{-- <script src="assets/plugins/megamenu/js/hover-dropdown-menu.js"></script> --}}
    {{-- <script src="assets/plugins/megamenu/js/jquery.hover-dropdown-menu-addon.js"></script> --}}
    <script src="assets/plugins/fancyBox/js/jquery.fancybox.pack.js"></script>
    <script src="assets/plugins/fancyBox/js/jquery.fancybox-media.js"></script>
    {{-- <script src="assets/plugins/appear/js/jquery.appear.js"></script> --}}
    {{-- <script src="assets/plugins/switcher/js/switcher.js"></script> --}}
    <script src="assets/js/main.js"></script>
@endsection
