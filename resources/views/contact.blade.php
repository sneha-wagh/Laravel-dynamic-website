@extends('layouts.frontend_layout.frontend_design') 
@section('content')
 <section class="section section_header section_header__contacts">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

						<!-- Heading -->
						<h1 class="section__heading section_header__heading text-center">
							Contacts
						</h1>

						<!-- Breadcrumbs -->
						<ol class="breadcrumb">
							<li><a href="{{ url('index') }}">Home</a></li>
							<li class="active">Contact</li>
						</ol>

          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
      <div class="section_header__bg contacts_bg"></div>
    </section>

    <!-- section contacts -->
    <section class="section_contacts">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Get in Touch &#8722;</h2>
            <hr class="section_title_line">
            <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sint est quidem excepturi rem officia fugit quia maxime explicabo nisi numquam, recusandae quisquam iste earum.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
        
            <div class="section_contacts__item">

              <!-- Title -->
              <h3 class="item__title">
                Mail
              </h3>
              <i class="ion-ios-email-outline"></i>

              <!-- Content -->
              <p class="item__content">
                <a href="mailto:admin@groggery.com" >admin@groggery.com</a>
              </p>
              <p class="item__content">
                <a href="mailto:groggery@domain.com">groggery@domain.com</a>
              </p>

            </div>
        
          </div>
          <div class="col-sm-4">
        
            <div class="section_contacts__item">

              <!-- Title -->
              <h3 class="item__title">
                Phone
              </h3>
              <i class="ion-ios-telephone-outline"></i>

              <!-- Content -->
              <p class="item__content">
                <a href="tel:+1 789 123 45 44">+1 789 123 45 44</a>
              </p>
              <p class="item__content">
                <a href="tel:+1 789 123 22 38">+1 789 123 22 38</a>
              </p>
              
            </div>
        
          </div>
          <div class="col-sm-4">
        
            <div class="section_contacts__item">

              <!-- Title -->
              <h3 class="item__title">
                Social
              </h3>
              <i class="ion-social-twitter-outline"></i>

              <!-- Content -->
              <ul class="item__content contact_social">
                <li class="contact_social__item"><a href="#">Facebook</a></li>
                <li class="contact_social__item"><a href="#">Instagram</a></li>
              </ul>
              <ul class="item__content contact_social">
                <li class="contact_social__item"><a href="#">Twitter</a></li>
                <li class="contact_social__item"><a href="#">Foursquare</a></li>
              </ul>
              
            </div>
        
          </div>
        </div> <!-- / .row -->

      </div> <!-- .container -->
    </section>

    <!-- section map-heading -->
    <section class="section_map-heading" id="section_contacts">
      <div class="container">
      	<div class="row">
          <div class="col-sm-12">

          	<h2 class="map__title">Write us</h2>
          	<p class="map__address">Sapiente rerumquis quod officia fugit, adipisci et nequerem recusandae itaque.</p>

          	<div class="contacts_form__body">

	    	  		<!-- Alert message -->
							<div class="alert" id="form_message" role="alert"></div>

							<!-- Form -->
							<form id="form_sendemail">
							  
							  <!-- Email -->
							  <div class="form-group">
							    <label for="email" class="sr-only">Email address</label>
							    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Name -->
							  <div class="form-group">
							    <label for="name" class="sr-only">Name</label>
							    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Message -->
							  <div class="form-group">
							    <label for="message" class="sr-only">Message</label>
							    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
							    <span class="help-block"></span>
							  </div>
							  
							  <!-- Note -->
							  <div class="form-group">
							    <small class="text-muted">
							      * All fields are mandatory.
							    </small>
							  </div>
							  
							  <!-- Submit -->
							  <button type="submit" class="btn btn-default">
							    Send Message
							  </button>

							</form>            		
          	</div>
        
          </div>
        </div> <!-- / .row -->
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