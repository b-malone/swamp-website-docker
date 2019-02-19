<footer class="main-footer">
    <div class="special-style special-style-dark col-md-12">
      <div class="bg-image parallax-style" style="background-image:url('assets/img/background/Layer-62.jpg');"></div>
    </div>
    <a href="#" class="footer-icon"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <div class="upper-footer box padT100 padB70">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-footer-logo text-center marB70">
              <a href="#"><img src="img/swamp-logo.png" alt="" style="max-width: 200px;"></a>
              {{-- <a href="#"><img src="assets/img/footer-logo.png" alt=""></a> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row footer-widget">
          <div class="col-xs-12 col-sm-6">
            <div class="details">
              <h4>discover</h4>
              <ul class="layers">
                {{-- <li><a href="#">Mission</a></li> --}}
                <li><a href="#" style="pointer-events: none; color: ;#BBC0C4">Animals (COMING SOON!)</a></li>
                <li><a href="{{ url('/people') }}">Members</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="details">
              <h4>quick link</h4>
              <ul class="layers">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/resources') }}">Resources</a></li>
                <li><a href="{{ url('/events') }}">Events</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="volunteer padTB30">
      <div class="container">
        <div class="row volunteer-row">
          <div class="col-md-5 col-xs-12 col-sm-5">
            <div class="sign-up-detail">
              <h1>Volunteer for Science</h1>
            </div>
          </div>
          {{-- @if (session('send_volunteer_status'))
            <div class="sign-up-detail">
              <h1>{{ session('status_message') }}</h1>
            </div>
          @else --}}
            <div class="col-md-7 col-sm-7">
              <div class="row">

                <form action="{{ url('/email/volunteer') }}" method="post" name="volunteer-email">
                  {{ csrf_field() }}

                  <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="volunteer-bar marT10">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Name">
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="email" name="email" placeholder="E-mail">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-5 col-xs-12 marT10">
                    <button type="submit" class="swamp-btn">Submit</button>
                  </div>
                </form>

              </div>
            </div>
          {{-- @endif --}}

        </div>
      </div>
    </div>

</footer>
