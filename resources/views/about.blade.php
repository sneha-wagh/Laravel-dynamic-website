@extends('layouts.frontend_layout.frontend_design') 
@section('content')
<section class="section section_header section_header__about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <!-- Heading -->
              <h1 class="section__heading section_header__heading text-center">
                About us
              </h1>

              <!-- Breadcrumbs -->
              <ol class="breadcrumb">
                <li><a href="index_default.html">Home</a></li>
                <li class="active">About Us</li>
              </ol>

            </div>
          </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="section_header__bg about_bg"></div>
      </section>

      <!-- section story -->
      <section class="section_story">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
          
              <div class="section_story__item">
                <div class="story_item__year">
                  1997
                </div>
                <i class="ion-ios-star"></i>
                <h3 class="story_item__title">
                  First Groggery open
                </h3>
                <p class="story_item__desc">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nemo, accusamus! Fugiat rerum impedit ducimus error, fuga, earum ea reprehenderit accusantium odio modi quisquam, ab rem iusto quod voluptatum provident.
                </p>
              </div>
          
            </div>
            <div class="col-sm-4">
          
              <div class="section_story__item">
                <div class="story_item__year">
                  2005
                </div>
                <i class="ion-ios-star"></i>
                <h3 class="story_item__title">
                  Two Michelin Stars
                </h3>
                <p class="story_item__desc">
                  Quisquam similique quasi beatae doloremque ut voluptatum incidunt unde adipisci, perferendis nesciunt aut dolores aspernatur corrupti quaerat ducimus voluptate magni minima exercitationem non quos.
                </p>
              </div>
          
            </div>
            <div class="col-sm-4">
          
              <div class="section_story__item">
                <div class="story_item__year">
                  2016
                </div>
                <i class="ion-ios-star"></i>
                <h3 class="story_item__title">
                  Best bar in Calofornia
                </h3>
                <p class="story_item__desc">
                   Minima eaque praesentium nam perferendis quod ad, voluptate omnis eos reiciendis qui veritatis cupiditate id. Sapiente atque, maiores quia accusamus doloribus officia dignissimos, temporibus recusanda.
                </p>
              </div>
          
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
          
              <div class="section_story__quote">
                <div class="quote__img">
                  <img src="{{ asset('img/frontend_img/info_img.jpg') }}" class="img-responsive" alt="...">
                </div>
                <h3 class="qoute__title">- Food - Drinks - Life -</h3>
                <p class="qoute__text">
                  Dolorum obcaecati fuga deserunt quod nostrum praesentium illum, perferendis non iusto neque quos possimus corrupti beatae quae, voluptate aperiam. Doloribus facere itaque, accusamus vitae. Perferendis earum cumque eveniet expedita, quas, optio, repudiandae explicabo dignissimos, tempora harum repellendus. Asperiores autem quasi repudiandae ex sapiente nam fuga tempora officiis, expedita fugiat nisi harum minus aspernatur ut repellendus in magnam cum quaerat dolor distinctio doloribus placeat sunt laudantium beatae! Libero commodi a quod modi nihil.
                <p>
                <h4 class="qoute__author">
                  &#8722; Johnatan Doe &#8722;
                </h4>
                <div class="qoute__signature">
                  <img src="{{ asset('img/frontend_img/signature.png') }}" alt="...">
                </div>
              </div>
          
            </div>
          </div> <!-- / .row -->
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

      <!-- section team -->
      <section class="section_team">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="section_title">&#8722; Our team &#8722;</h2>
              <hr class="section_title_line">
              <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sint est quidem excepturi rem officia fugit quia maxime explicabo nisi numquam, recusandae quisquam iste earum.</p>
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

      <!-- section join -->
      <section class="section_join">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="section_join__logo">
                <i class="ion-ios-people-outline"></i>
              </div>
              <h2 class="section_join__title"><span>&#8722; Join the team &#8722;</span></h2>
              <hr class="section_title_line">
              <p class="section_join__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, enim. Quo, corporis, veniam. Esse unde vitae magni exercitationem cupiditate quibusdam, placeat dolorem quasi inventore necessitatibus deleniti adipisci corporis cumque alias, minima minus.</p>
              <div class="text-center">
                <button type="button" class="btn btn-default">Join now</button>
              </div>
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

      <!-- section map -->
      <div class="section_map">
        <div class="section_row">
          <div id="map"></div>
        </div> <!-- / .section_row -->
      </div> <!-- / .section_map -->
@endsection