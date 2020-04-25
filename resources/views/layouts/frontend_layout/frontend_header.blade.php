<!-- TO THE TOP BUTTON
    ================================================== -->
    <a id="back-to-top" href="#section_welcome" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
      <i class="ion-android-arrow-up"></i>
    </a>

    <!-- PRELOADER
    ================================================== -->
  <!--   <div id="loader-wrapper">
      <div id="loader"></div>
    </div> -->

    <!--  NAVBAR
    ================================================== -->

    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('index') }}">Groggery</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-right">

            <!-- General links -->
            <li class="dropdown active">
              <a href="{{ url('index') }}" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
              <!-- <ul class="dropdown-menu">
                <li><a href="index_default.html">Home Image</a></li>
                <li><a href="index_imageParallax.html">Home Parallax</a></li>
                <li><a href="index_slider.html">Home Slider</a></li>
                <li class="active"><a href="index_video.html">Home Video</a></li>
              </ul> -->
            </li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li>
              <a href="{{ url('menu') }}" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
             <!--  <ul class="dropdown-menu">
                <li><a href="menu_image.html">Image Menu</a></li>
                <li><a href="menu_text.html">Text Menu</a></li>
              </ul> -->
            </li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('events') }}">Events</a></li>
            <li>
              <a href="{{ url('blog') }}" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
             <!--  <ul class="dropdown-menu">
                <li><a href="blog.html">Blog Page</a></li>
                <li><a href="blog_post.html">Blog Post Page</a></li>
              </ul> -->
            </li>
            <li><a href="{{ url('reservation') }}">Reservation</a></li>
            <li><a href="{{ url('contact') }}">Contacts</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>