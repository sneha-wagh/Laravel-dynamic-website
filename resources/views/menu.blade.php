@extends('layouts.frontend_layout.frontend_design') 
@section('content')
 <section class="section section_header section_header__menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                Image Menu
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="{{ url('index') }}">Home</a></li>
                <li class="active">Image Menu</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg menu_bg"></div>
      </section>

      <!-- section menu -->
      <section class="section_menu" id="section_menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; Menu &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit mollitia, temporibus aliquid quae, repellendus eaque? Illo harum omnis sed debitis ratione dolor.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <ul class="nav nav-tabs menu_nav">
                <li role="presentation" class="active"><a href="#" role="tab" data-filter=".menu_breakfast">Breakfast</a></li>
                <li role="presentation"><a href="#" role="tab" data-filter=".menu_lunch">Lunch</a></li>
                <li role="presentation"><a href="#" role="tab" data-filter=".menu_dinner">Dinner</a></li>
                <li role="presentation"><a href="#" role="tab" data-filter=".menu_drinks">Drinks</a></li>
                <li role="presentation"><a href="#" role="tab" data-filter=".menu_desserts">Desserts</a></li>
              </ul>
            </div>
          </div>

          <div class="row menu__grid">
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_1.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$6.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_2.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$10</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_3.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum<span class="price">$8</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_4.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$7.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_5.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$5.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_breakfast">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/breakfast_6.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$8</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_1.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$15</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_2.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$8.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_3.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$13.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_4.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$7.8</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_5.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$9.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_lunch" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/lunch_6.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$12</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_1.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$14</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_2.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$11.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_3.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$10.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_4.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$13</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_5.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$21</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_6.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$19</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_dinner" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/dinner_7.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$17</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_1.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$6</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_2.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$7</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_3.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$4</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_4.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$18</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_5.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$11</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_6.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$12</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_drinks" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/drinks_7.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$15</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_1.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$11</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_2.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$10</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_3.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$7.5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_4.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$8</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_5.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$5</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
              <div class="menu__item_hover">
                <img src="{{ asset('img/frontend_img/desserts_6.jpg') }}" class="img-responsive" alt="...">
                <div class="menu__item_overlay">
                  <h3>Lorem ipsum <span class="price">$12</span></h3>
                  <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
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