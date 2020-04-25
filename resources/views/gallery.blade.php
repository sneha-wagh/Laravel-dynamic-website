 @extends('layouts.frontend_layout.frontend_design') 
@section('content')
 <section class="section section_header section_header__gallery">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                Gallery
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Gallery</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg gallery_bg"></div>
      </section>

      <!-- section gallery -->
      <section class="section_gallery">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; Interior &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iure, quos maxime amet nostrum reiciendis, provident quisquam nulla!</p>
            </div>
          </div> <!-- .row -->
          <div class="row gallery__grid">
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_1.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_1.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_2.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_2.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_3.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_3.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_4.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_4.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_5.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_5.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_6.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_6.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_7.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_7.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_8.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_8.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_9.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_9.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
            <div class="col-sm-4 col-xs-6 gallery__item">
              <a href="{{ asset('img/frontend_img/gallery_10.jpg') }}" data-lightbox="gallery">
                <img src="{{ asset('img/frontend_img/gallery_10.jpg') }}" class="img-responsive" alt="...">
              </a>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
      </section>

      <!-- section photo -->
    

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