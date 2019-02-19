@extends('layouts.default')

@section('content')
    {{-- <div class="loader"><span class="rotating"></span></div> --}}
    @include('partials.header')

    @include('partials.breadcrumb', array(
      'title' => 'resources'
    ))

    <div class="clear"></div>

    <section class=" bg padT100 padB70">

      {{--
      <div class="row">
        <!-- Data Submission (Online) -->
        <div class="col-xs-12">
          @include('partials.article', array('title' => 'Submitting Data', 'href' => 'http://spreadsheets.google.com/viewform?key=pNXZClz4xRjo7tL5awlMqAQ&amp;hl=en', 'linkText' => 'Click here to enter it electronically'))
        </div>
        --}}

        <div class="faqs-section">
            <div class="container">
                <div class="row">

                  <div class="col-md-12">
                    <div class="faqs marB30">
                      <h3>forms & data</h3>
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
                      <h4 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        Egg Mass Identification
                      </h4>
                      <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="display: block;">
                        <p>A reference sheet for identifying egg masses of amphibians.</p>
                        <br>
                        @include('partials.downloadable', array(
                          'href' => '/content/documents/eggmass_id_sheet.pdf',
                          'title' => '',
                          'subtitle' => 'Eggmass ID Sheet'
                        ))
                      </div>
                      <h4 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        (BLANK) Survey Datasheet
                      </h4>
                      <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                        <p>A fill-in sheet for survey data.</p>
                        <br>
                        @include('partials.downloadable', array(
                          'href' => '/content/forms/survey_sheet.pdf',
                          'title' => '',
                          'subtitle' => 'Survey Sheet'
                        ))
                      </div>

                      <h4 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        Monitoring Sites Data
                      </h4>
                      <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none; ">
                        <p>See where and what amphibians have been found</p>
                        <br>
                        <p>
                          <a class="link-text" aria-label="amphibians spreadsheet" target="_blank"
                          href="https://docs.google.com/spreadsheets/d/1zyH0i3g9N6SN6OgfhuGXCKsXRhEUXPOsd5hEXBBE3-Y/edit?usp=sharing">
                              Amphibians Spreadsheet<i class="glyphicon glyphicon-link"></i>
                          </a>
                        </p>
                      </div>

                      <h4 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1">
                        <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
                        (BLANK) Survey Datasheet
                      </h4>
                      <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none;">
                        <p>See where and what amphibians have been found</p>
                        <br>
                        @include('partials.downloadable', array(
                          'href' => '/content/forms/survey_sheet.pdf',
                          'title' => '',
                          'subtitle' => 'survey_sheet.pdf'
                        ))
                      </div>
                        {{-- <h4 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>phasellus ac libero</h4>
                        <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none; height: 873px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            <img src="assets/img/faqs/Layer-94.jpg" alt="">
                        </div>
                        <h4 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>torquent per conubia</h4>
                        <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none; height: 873px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                        </div> --}}
                        {{-- <h4 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>how to submit</h4>
                        <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true" style="display: none; height: 873px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            <img src="assets/img/faqs/Layer-94.jpg" alt="">
                        </div>
                        <h4 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-11" aria-controls="ui-id-12" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>nam enim risus, molestie</h4>
                        <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-12" aria-labelledby="ui-id-11" role="tabpanel" aria-hidden="true" style="display: none; height: 873px;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                        </div> --}}
                    </div>
                  </div>

                    {{-- <div class="col-md-3 col-sm-4"> --}}
                      {{-- <div class="sidebar">
                        <div class="row">
                          <div class="posts">
                              <div class="col-md-12 section widgets">
                                  <h4 class="marB20">Recent <span>Posts</span></h4>
                                  <div class="recent-posts marB20">
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4 padL0 text-left">
                                              <figure>
                                                  <img src="assets/img/blog/blog4.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Help for children constipation</a></h5>
                                              <p>15 Mar 2017</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="posts marT20">
                              <div class="col-md-12  widgets">
                                  <div class="recent-posts marB20">
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4 padL0 text-left">
                                              <figure>
                                                  <img src="assets/img/blog/blog5.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Help for children constipation</a></h5>
                                              <p>15 Mar 2017</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="posts marT20">
                              <div class="col-md-12  widgets">
                                  <div class="recent-posts marB20">
                                      <div class="blog-recent-post">
                                          <div class="col-md-4 col-sm-4 col-xs-4 padL0 text-left">
                                              <figure>
                                                  <img src="assets/img/blog/blog6.jpg" alt="">
                                              </figure>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-8 padL0 text-left">
                                              <h5><a href="#">Help for children constipation</a></h5>
                                              <p>15 Mar 2017</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12  widgets">
                          <div class="row">
                              <div class="posts padT50">
                                  <h4 class="marB20">About <span>Us</span></h4>
                                  <p>Consectetur adipisicing elit, sed do the eiusmod tempor incididunt magna this aliqua. Ut enim ad minim veniam quis nostrud consequat.</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-12 widgets">
                          <div class="row">
                              <div class="posts padT50">
                                  <h4 class="marB20">social <span>widgets</span></h4>
                                  <div class="social-widgets">
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
                        <div class="col-md-12 col-sm-12 col-xs-12 widgets">
                          <div class="row">
                              <div class="posts padT50">
                                  <h4 class="marB20">Mailing <span>List</span></h4>
                                  <p>Sign up for our mailing list to get latest updates and offers.</p>
                                  <div class="mailing-list search-bar marB10">
                                      <input type="text" name="search" placeholder="Search..">
                                      <button class="button1" type="submit" value=""><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>


      <div class="clear"></div>

    </section>

    <div class="clear"></div>
    @include('partials.footer')

@endsection
