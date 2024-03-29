 @extends('layouts.frontend_layout.frontend_design') 
@section('content')
 <section class="section section_header section_header__reservation">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                Reservation
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Reservation</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg reservation_bg"></div>
      </section>

      <!-- section reservation -->
      <section class="section_reservation" id="section_reservation">
        <div class="section_row">
          <div class="col-md-5">
            <div class="reservation_img"></div>
          </div>
          <div class="col-md-7">
            <div class="reservation_form_body">
              <h3 class="reservation_form_title">Online reservation</h3>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <form class="reservation_form" id="reservation__form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="reservation__name">Full Name</label>
                      <input type="text" class="form-control" id="reservation__name" name="reservation__name" placeholder="Full Name">
                      <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="reservation__phone">Phone Number</label>
                      <input type="tel" class="form-control" id="reservation__phone" name="reservation__phone" placeholder="Phone Number">
                      <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="reservation__phone">Your e-mail</label>
                      <input type="email" class="form-control" name="reservation__email" id="reservation__email" placeholder="Your e-mail">
                      <div class="help-block"></div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only" for="reservation__people">Number of persons</label>
                      <select class="form-control" id="reservation__people" name="reservation__people">
                        <option value="1" selected="">1 Person</option>
                        <option value="2">2 Persons</option>
                        <option value="3">3 Persons</option>
                        <option value="4">4 Persons</option>
                        <option value="5">5 Persons</option>
                        <option value="6">6 Persons</option>
                      </select>
                      <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="reservation__date">Date</label>
                      <input type="date" class="form-control" name="reservation__date" id="reservation__date" value="2017-10-09">
                      <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="reservation__time">Time</label>
                      <input type="time" class="form-control" id="reservation__time" value="19:00" name="reservation__time">
                      <div class="help-block"></div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Reserve a table</button>
                  </div>
                </div> <!-- .row -->
              </form>
            </div> <!-- .reservation_form_body -->
          </div>
        </div> <!-- .section_row -->
      </section>      

      <!-- section newsletter -->
      <section class="section_newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <p class="section_newsletter_title-sm">Subscribe for our</p>
              <h2 class="section_newsletter_title-lg">Newsletter</h2>
            </div>
            <div class="col-sm-8">
              <!-- Newsletter form -->
              <div id="mc_embed_signup">
                <form class="newsletter__form validate" action="http://themeforest.us16.list-manage.com/subscribe/post-json?u=3c9679e26b601e1a87122b12f&amp;id=e4b9351526&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                  <div id="mc_embed_signup_scroll" class="row">
                    <div class="mc-field-group form-group col-sm-7 col-md-9">
                      <label for="mce-EMAIL" class="sr-only">E-mail address</label>
                      <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input" id="mce-EMAIL" placeholder="Email address">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response"></div>
                      <div class="response" id="mce-success-response"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div aria-hidden="true" id="mce-hidden-input">
                      <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
                    </div>
                    <div class="clear col-sm-5 col-md-3">
                      <button type="submit" class="btn btn-default" id="mc-embedded-subscribe">
                        Subscribe
                      </button>
                    </div>
                  </div>
                </form>
              </div> <!-- #mc_embed_signup -->
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </section>

      <!-- section map -->
      <div class="section_map">
        <div class="section_row">
          <div id="map"></div>
        </div> <!-- / .section_row -->
      </div> <!-- / .section_map -->
    @endsection