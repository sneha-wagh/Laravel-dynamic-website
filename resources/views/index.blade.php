@extends('layouts.frontend_layout.frontend_design') 
@section('content')


    <!-- CONTENT
    ================================================== -->

    <!-- section welcome -->
    <section class="section_welcome" id="section_welcome">
      <?php  ?>
      @foreach($banner as $banner)
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-12">
            <div class="welcome_content">
              <h1 class="welcome-video_content_heading">{{$banner ?? ''->title}}</h1>
              <p class="welcome_content_subheading">Bar & Restaurant</p>
              <ul class="welcome_content_logo">
                <li><i class="icon ion-ios-minus-empty"></i></li>
                <li><i class="icon ion-fork"></i></li>
                <li><i class="icon ion-wineglass"></i></li>
                <li><i class="icon ion-knife"></i></li>
                <li><i class="icon ion-ios-minus-empty"></i></li>
              </ul>
              <h3 class="welcome_content_caption">{{$banner ?? ''->caption}}</h3>
              <div class="welcome_content_btn">
                <a href="#section_about" class="btn btn-default">Discover</a>
              </div>
            </div> <!-- .welcome_content -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
      <div class="welcome-video_bg">
        <video autoplay muted loop>
          <source src="{{ asset('video/video_bg.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      @endforeach
    </section>

    <!-- section about -->
    <section class="section_about" id="section_about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title"><span>&#8722; Our story &#8722;</span></h2>
            <hr class="section_title_line">
            <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sint est quidem excepturi rem officia fugit quia maxime explicabo nisi numquam, recusandae quisquam iste earum.</p>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
      <div class="section_about__row">
        <div class="about__img">
          <img src="{{ asset('img/frontend_img/about_1.jpg') }}" class="img-responsive" alt="...">
        </div>
        <div class="about_desc">
          <h3 class="about_desc__title">Traditions</h3>
          <p class="about_desc__text">Service ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolore voluptatem, ipsum, totam molestias accusantium explicabo velit aliquid impedit, reprehenderit libero voluptatum ipsa quae ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum atque debitis commodi architecto. Nulla dolore voluptatem. Eum atque debitis commodi architecto. Totam molestias accusantium explicabo velit aliquid impedit.</p>
        </div>
      </div> <!-- .section_about__row -->
      <div class="section_about__row">
        <div class="about_desc">
          <h3 class="about_desc__title">Professional service</h3>
          <p class="about_desc__text">Roles ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolore voluptatem, ipsum, totam molestias accusantium explicabo velit aliquid impedit, reprehenderit libero voluptatum ipsa quae ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum atque debitis commodi architecto. Groggery ipsum dolor sit amet, consectetur adipisicing elit. Soluta modi esse accusantium sit velit cupiditate minima ipsam ex!</p>
        </div>
        <div class="about__img">
          <img src="{{ asset('img/frontend_img/about_2.jpg') }}" class="img-responsive" alt="...">
        </div>
      </div> <!-- .section_about__row -->
      <div class="section_about__row">
        <div class="about__img">
          <img src="{{ asset('img/frontend_img/about_3.jpg') }}" class="img-responsive" alt="...">
        </div>
        <div class="about_desc">
          <h3 class="about_desc__title">History</h3>
          <p class="about_desc__text">Blanditiis quidem fugit atque facilis numquam et, minus, iusto pariatur. Laborum commodi consectetur dolor, unde quo nemo molestias provident reprehenderit iure quas ipsam quasi cupiditate, doloribus, consequuntur ea facere dolores impedit dolore blanditiis neque explicabo odio! Labore eveniet sapiente impedit asperiores architecto. Vero quia, quidem aliquam eveniet maiores expedita minima corporis assumenda accusamus at laborum.</p>
        </div>
      </div> <!-- .section_about__row -->
    </section>
    
    <!-- section team -->
    <section class="section_team">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Our team &#8722;</h2>
            <hr class="section_title_line">
            <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, facere.</p>
          </div>
        </div>
    
        <div class="row">
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="{{ asset('img/frontend_img/team_photo_1.jpg') }}" alt="...">
              </div>
              <div class="team__item_name">
                <h3>John Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Master chef</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="{{ asset('img/frontend_img/team_photo_2.jpg') }}" alt="...">
              </div>
              <div class="team__item_name">
                <h3>Jane Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Chef</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="{{ asset('img/frontend_img/team_photo_3.jpg') }}" alt="...">
              </div>
              <div class="team__item_name">
                <h3>John Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Barman</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
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
              <img src="assets/img/desserts_4.jpg" class="img-responsive" alt="...">
              <div class="menu__item_overlay">
                <h3>Lorem ipsum <span class="price">$8</span></h3>
                <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
            <div class="menu__item_hover">
              <img src="assets/img/desserts_5.jpg" class="img-responsive" alt="...">
              <div class="menu__item_overlay">
                <h3>Lorem ipsum <span class="price">$5</span></h3>
                <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 menu__item menu_desserts" style="display: none;">
            <div class="menu__item_hover">
              <img src="assets/img/desserts_6.jpg" class="img-responsive" alt="...">
              <div class="menu__item_overlay">
                <h3>Lorem ipsum <span class="price">$12</span></h3>
                <p class="overlay_info">Ingredients: Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing.</p>
              </div>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section slogan -->
    <section class="section_slogan">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="slogan_title">&#8722; Groggery &#8722;</h1>
            <p class="slogan_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, cumque, quia. Laboriosam eveniet suscipit obcaecati corrupti quam.</p>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section gallery -->
    <section class="section_gallery" id="section_gallery">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Gallery &#8722;</h2>
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
            <a href="assets/img/gallery_2.jpg') }}" data-lightbox="gallery">
              <img src="{{ asset('img/frontend_img/gallery_2.jpg') }}" class="img-responsive" alt="...">
            </a>
          </div>
          <div class="col-sm-4 col-xs-6 gallery__item">
            <a href="assets/img/gallery_3.jpg') }}" data-lightbox="gallery">
              <img src="{{ asset('img/frontend_img/gallery_3.jpg') }}" class="img-responsive" alt="...">
            </a>
          </div>
          <div class="col-sm-4 col-xs-6 gallery__item">
            <a href="assets/img/gallery_4.jpg') }}" data-lightbox="gallery">
              <img src="{{ asset('img/frontend_img/gallery_4.jpg') }}" class="img-responsive" alt="...">
            </a>
          </div>
          <div class="col-sm-4 col-xs-6 gallery__item">
            <a href="assets/img/gallery_5.jpg') }}" data-lightbox="gallery">
              <img src="{{ asset('img/frontend_img/gallery_5.jpg') }}" class="img-responsive" alt="...">
            </a>
          </div>
          <div class="col-sm-4 col-xs-6 gallery__item">
            <a href="assets/img/gallery_6.jpg') }}" data-lightbox="gallery">
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

    <!-- section review -->
    <section class="section_review">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h2 class="section_review_title">A few words about us...</h2>
          </div>
          <div class="col-sm-8">
            <div id="carousel-review" class="carousel carousel_review slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-review" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-review" data-slide-to="1"></li>
                <li data-target="#carousel-review" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Franz Kafka &#8722;</h5>
                </div>
                <div class="item">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Ernest Hemingway &#8722;</h5>
                </div>
                <div class="item">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Pablo Picasso &#8722;</h5>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-review" role="button" data-slide="prev">
                  <img src="{{ asset('img/frontend_img/arrow_left.svg') }}" alt="Prev">
                </a>
                <a class="right carousel-control" href="#carousel-review" role="button" data-slide="next">
                  <img src="{{ asset('img/frontend_img/arrow_right.svg') }}" alt="Next">
                </a>
              </div> <!-- .carousel_inner -->
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section events -->
    <section class="section_events" id="section_events">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Events &#8722;</h2>
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
                      <a href="#section_reservation" class="btn btn-default">Book now</a>
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
                      <a href="#section_reservation" class="btn btn-default">Book now</a>
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
                      <a href="#section_reservation" class="btn btn-default">Book now</a>
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
                      <a href="#section_reservation" class="btn btn-default">Book now</a>
                    </div>
                  </div>
                </div>
              </div> <!-- .events_item -->
            </div> <!-- .events -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
    </section>

    <!-- section quote -->
    <section class="section__quote">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <i class="ion-android-hangout"></i>
            <p class="section-quote__text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
            <h2 class="section-quote__author">by Thomas Ford</h2>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__quote -->

    <!-- section blog -->
    <section class="section_blog">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Blog &#8722;</h2>
            <hr class="section_title_line">
            <p class="section_caption">Read about our latest news, events and much more about life of our friendly family</p>
          </div>
        </div> <!-- .row -->
        <div class="row">
          <div class="col-sm-4">
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
          <div class="col-sm-4">
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
          <div class="col-sm-4">
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
          <div class="col-sm-4">
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
          <div class="col-sm-4">
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
          <div class="col-sm-4">
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

    <!-- section map-heading -->
    <section class="section_map-heading" id="section_contacts">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h2 class="map__title">Find us on the map</h2>
              <p class="map__address">10987 1st Avenue, Lorem City, CA</p>
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