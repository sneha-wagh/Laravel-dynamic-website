@extends('layouts.frontend_layout.frontend_design') 
@section('content')
  <section class="section section_header section_header__blog">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                Blog
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Blog</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg blog_bg"></div>
      </section>

      <!-- section blog -->
      <section class="section_blog" id="section_blog">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; Stories &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Read about our latest news, events and much more about life of our friendly family</p>
            </div>
          </div> <!-- .row -->
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_1.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>How to serve a table</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#table,</a> <a href="#">#food,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_3.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>Features of Spanish wine</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#cook,</a> <a href="#">#recipe,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_5.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>Interior and design</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 5 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#bar,</a> <a href="#">#cafe,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
          </div> <!-- .row -->
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_4.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>Cafe as a house</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 10 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 12 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#table,</a> <a href="#">#food,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_10.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>Our food traditions</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#cook,</a> <a href="#">#recipe,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="blog__item blog__item1">
                <div class="blog-item__img">
                  <img src="{{ asset('img/frontend_img/gallery_7.jpg') }}" class="img-responsive" alt="...">
                </div>
                <div class="blog-item__content">
                  <a href="blog_post.html" class="blog-item__title">
                    <h3>Let's cook together!</h3>
                  </a>
                  <div class="blog-item__info">
                    <ul class="item-info__list">
                      <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                      <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 2 Comments</li>
                      <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 7 hours ago</li>
                    </ul>
                  </div>
                  <div class="blog-item__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                  </div>
                  <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#bar,</a> <a href="#">#cafe,</a> <a href="#">#groggery</a></p>
                </div> <!-- / .blog-item__content -->
              </div> <!-- / .blog__item -->
            </div>
          </div> <!-- .row -->
          </div class="row">
            <div class="text-center">
              <button type="button" class="btn btn-default">More posts</button>
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