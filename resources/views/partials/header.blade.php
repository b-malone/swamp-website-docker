<style media="screen">
  .navbar-brand>img {
    display: block;
    padding: 0!important;
  }
</style>

<!-- //***Header-section Start***// -->
<div class="main-header">
    <div class="top-bar" id="top-bar-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="contact">
                        <ul>
                            {{-- <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</a></li> --}}
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>clarkfrog@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="social" style="float: right;">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li> --}}
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
                                <a class="navbar-brand" href="{{ url('/') }}">
                                  <img class="site_logo" alt="Site Logo" src="img/swamp-logo.png" style="width: 150px;" />
                                  {{-- <img class="site_logo" alt="Site Logo" src="assests/img/Charity.png" /> --}}
                                </a>
                            </div>
                            <!-- Navbar Collapse -->
                            <div class="navbar-collapse collapse">
                                <!-- nav -->
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{ url('/about') }}" class="{{ isActiveRoute('about') }}">
                                          <i class="fa fa-address-book" aria-hidden="true"></i>about us
                                        </a>
                                    </li>
                                    <li>
                                      <a href="{{ url('/blog') }}" class="{{ isActiveRoute('blog') }}">
                                        <i class="fa fa-book" aria-hidden="true"></i>blog
                                      </a>
                                    </li>
                                    <li>
                                      <a href="{{ url('/resources') }}" class="{{ isActiveRoute('resources') }}">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>resources
                                      </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/events') }}" class="{{ isActiveRoute('events') }}">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>events
                                        </a>
                                    </li>
                                    {{-- <li>
                                      <a href="contact.html">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>contact
                                      </a>
                                    </li> --}}
                                </ul>
                                <!-- navbar-collapse -->
                            </div>
                        </div>
                        <!-- col-md-12 -->
                        {{-- <div class="col-md-2 hidden-sm hidden-xs">
                            <div class="menu-bar-btn">
                                <a class="swamp-btn submit" href="contact.html">submit now</a>
                            </div>
                        </div> --}}
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
