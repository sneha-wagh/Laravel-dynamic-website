@extends('layouts.frontend_layout.frontend_design') 
@section('content')
<section class="section section_header section_header__events">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                Events
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Events</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg events_bg"></div>
      </section>

      <!-- section events -->
      <section class="section_events">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; This week &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda vitae earum voluptatibus.</p>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="events">
                <div class="events__item events__item_jazz">
                  <div class="events-item__body">
                    <div class="events-item__content">
                      <h2>Jazz</h2>
                      <h3 class="events-item__content_extra extra_title">Jazz Jam session</h3>
                      <p class="events-item__content_extra extra_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem molestias minus, fuga dolor.</p>
                      <ul class="events-item__content_extra">
                        <li><i class="icon ion-ios-calendar-outline"></i> September 28, 2016</li>
                        <li><i class="icon ion-ios-clock-outline"></i> 19:30</li>
                      </ul>
                      <div class="events-item__content_extra">
                        <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .events_item -->
                <div class="events__item events__item_music">
                  <div class="events-item__body">
                    <div class="events-item__content">
                      <h2>Concert</h2>
                      <h3 class="events-item__content_extra extra_title">Live concert with our friends</h3>
                      <p class="events-item__content_extra extra_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sint similique beatae eius, reprehenderit corporis.</p>
                      <ul class="events-item__content_extra">
                        <li><i class="icon ion-ios-calendar-outline"></i> October 5, 2016</li>
                        <li><i class="icon ion-ios-clock-outline"></i> 19:00</li>
                      </ul>
                      <div class="events-item__content_extra">
                        <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .events_item -->
                <div class="events__item events__item_poetry">
                  <div class="events-item__body">
                    <div class="events-item__content">
                      <h2>Poetry</h2>
                      <h3 class="events-item__content_extra extra_title">Modern poetry</h3>
                      <p class="events-item__content_extra extra_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione vero commodi enim, ullam ex sit mollitia, saepe assumenda.</p>
                      <ul class="events-item__content_extra">
                        <li><i class="icon ion-ios-calendar-outline"></i> October 9, 2016</li>
                        <li><i class="icon ion-ios-clock-outline"></i> 20:00</li>
                      </ul>
                      <div class="events-item__content_extra">
                        <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .events_item -->
                <div class="events__item events__item_wine">
                  <div class="events-item__body">
                    <div class="events-item__content">
                      <h2>Wine</h2>
                      <h3 class="events-item__content_extra extra_title">Large selection of delicious wine</h3>
                      <p class="events-item__content_extra extra_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius minima, dolorum eveniet amet aperiam eaque esse animi.</p>
                      <ul class="events-item__content_extra">
                        <li><i class="icon ion-ios-calendar-outline"></i> October 17, 2016</li>
                        <li><i class="icon ion-ios-clock-outline"></i> 19:30</li>
                      </ul>
                      <div class="events-item__content_extra">
                        <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .events_item -->
              </div> <!-- .events -->
            </div>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </section>

      <!-- section events-alt -->
      <section class="section_events-alt">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; This Month &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda vitae earum voluptatibus.</p>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="event_card">
                <div class="event_card__img">
                  <img src="{{ asset('img/frontend_img/events_1.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="event_card__body">
                  <div class="event_card__date">
                    <i class="icon ion-ios-calendar-outline"></i> 04 November
                  </div>
                  <h4 class="event_card__title">
                    Wine degustation
                  </h4>
                  <div class="event_card__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exasperiores quos in quibusdam tempore dolore.
                  </div>
                  <div class="event_card__time">
                    <i class="ion-ios-clock-outline"></i> 19:00 - 23:00
                  </div>
                  <div class="event_card__price">
                    <i class="ion-ios-pricetags-outline"></i> $50
                  </div>
                  <hr>
                  <div class="event_card__btn">
                    <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="event_card">
                <div class="event_card__img">
                  <img src="{{ asset('img/frontend_img/drinks_3.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="event_card__body">
                  <div class="event_card__date">
                    <i class="icon ion-ios-calendar-outline"></i> 15 November
                  </div>
                  <h4 class="event_card__title">
                    Craft beer festival
                  </h4>
                  <div class="event_card__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exasperiores quos in quibusdam tempore dolore.
                  </div>
                  <div class="event_card__time">
                    <i class="ion-ios-clock-outline"></i> 19:00 - 23:00
                  </div>
                  <div class="event_card__price">
                    <i class="ion-ios-pricetags-outline"></i> $80
                  </div>
                  <hr>
                  <div class="event_card__btn">
                    <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                  </div>
                </div>
              </div>
            </div>            
          </div> <!-- .row -->
          <div class="row">
            <div class="col-sm-6">
              <div class="event_card">
                <div class="event_card__img">
                  <img src="{{ asset('img/frontend_img/slider_bg2.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="event_card__body">
                  <div class="event_card__date">
                    <i class="icon ion-ios-calendar-outline"></i> 16 November
                  </div>
                  <h4 class="event_card__title">
                    Groggery 7 birthday
                  </h4>
                  <div class="event_card__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exasperiores quos in quibusdam tempore dolore.
                  </div>
                  <div class="event_card__time">
                    <i class="ion-ios-clock-outline"></i> 15:00 - 23:00
                  </div>
                  <div class="event_card__price">
                    <i class="ion-ios-pricetags-outline"></i> $100
                  </div>
                  <hr>
                  <div class="event_card__btn">
                    <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="event_card">
                <div class="event_card__img">
                  <img src="{{ asset('img/frontend_img/events_jazz.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="event_card__body">
                  <div class="event_card__date">
                    <i class="icon ion-ios-calendar-outline"></i> 30 November
                  </div>
                  <h4 class="event_card__title">
                    Jazz evening
                  </h4>
                  <div class="event_card__desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exasperiores quos in quibusdam tempore dolore.
                  </div>
                  <div class="event_card__time">
                    <i class="ion-ios-clock-outline"></i> 19:00 - 21:00
                  </div>
                  <div class="event_card__price">
                    <i class="ion-ios-pricetags-outline"></i> $25
                  </div>
                  <hr>
                  <div class="event_card__btn">
                    <a href="{{ url('reservation') }}" class="btn btn-default">Book now</a>
                  </div>
                </div>
              </div>
            </div>            
          </div> <!-- .row -->          
        </div> <!-- .container -->
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