<header>
  <!-- Sticky Navbar Start -->
  <div id="main-nav" class="navbar navbar-fixed-top">
    <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
          </button>

          <ul class="nav">
            <li><a href="#"><i class="icon-envelope"></i> info@superthemes.com</a></li>
            <li><a href="#"><i class="icon-phone-sign"></i> +91 00 0000 000</a></li>
          </ul>

          <nav style="height:0" class="nav-collapse collapse">
            <ul class="nav pull-right">
            <li><a href="{{url('wishlist')}}"><i class="icon-heart"></i> Wishlist</a></li>
                <li><a href="{{url('login')}}"><i class="icon-lock"></i> Login</a></li>
                <li><a href="{{url('register')}}"><i class="icon-user"></i> Register</a></li>
            </ul>
          </nav>
    </div>
  </div>
  <!--Sticky Navbar End -->
  <div class="header-white">
    <div class="container">
      <div class="row">

        <div class="span4">
          <a href="{{url('/')}}" class="logo"><img title="Super Themes" alt="Super Themes" src="{{url('images/logo.png')}}"></a>
        </div>

        <div class="span8">
          <div class="row">
            <div class="pull-right logintext">
            Welcome Guest,  you can <a href="{{url('login')}}">login </a>or <a href="{{url('register')}}">create an account</a>
            </div>
          </div>
          <form class="form-search marginnull topsearch pull-right">
            <div class="span6 pull-left">
                <button value="Search" class="btn btn-success pull-right search" type="submit">Search</button>
                <input type="text" class="span5 search-query search-icon-top pull-right" placeholder="Search a theme here...">
            </div>
            <div class="pull-right ml5">
                <a data-toggle="modal" href="#myModal" class="btn btn-info pull-right"><i class="icon-shopping-cart"></i> Cart (0)</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Navigation Start -->
    <div  id="categorymenu">
      <div class="container">
        <nav class="subnav">
          <ul class="nav-pills categorymenu">
            <li><a class="active" href="{{url('/')}}"><i class="icon-home"></i> Home</a></li>
            <li><a href="{{url('wordpress')}}">WordPress</a></li>
            <li><a href="{{url('bootstrap')}}">Bootstrap</a></li>
            <li><a href="{{url('joomla')}}">Joomla</a></li>
            <li><a href="{{url('drupal')}}">Drupal</a></li>
            <li><a href="{{url('blogger')}}">Blogger</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
            <li><a href="{{url('blog')}}">Blog</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Navigation Ends -->
  </div>
</header>
<!-- Header Ends -->