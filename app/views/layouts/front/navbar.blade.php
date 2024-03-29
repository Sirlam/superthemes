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
            <li><a href="{{URL::route('getWishlist')}}"><i class="icon-heart"></i> Wishlist</a></li>
            @if(Auth::check() && Auth::user()->isAdmin())
            <li><a href="{{URL::route('getAdmin')}}"><i class="icon-heart"></i> Register Admin</a></li>
            <li><a href="{{URL::route('getAdminIndex')}}"><i class="icon-lock"></i> Admin BackEnd</a></li>
            <li><a href="{{URL::route('productReview')}}"><i class="icon-user"></i> Product Review</a></li>
            @elseif (Auth::check() && Auth::user()->isSeller())
            <li><a href="{{URL::route('getDashboard')}}"><i class="icon-dashboard"></i> Dashboard</a></li>
            @endif
            @if (Auth::check())
            <li><a href="{{URL::route('getAccount')}}"><i class="icon-user"></i> My Account</a></li>
            <li><a href="{{ URL::route('getLogout') }}"><i class="icon-user"></i> Logout</a></li>
            @else
            <li><a href="{{url('login')}}"><i class="icon-lock"></i> Login</a></li>
            <li><a href="{{url('register')}}"><i class="icon-user"></i> Register</a></li>
            @endif
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
          @if(!Auth::check())
            <div class="pull-right logintext">
            Welcome Guest,  you can <a href="{{url('login')}}">login </a>or <a href="{{url('register')}}">create an account</a>
            </div>
           @endif
          </div>
          <form class="form-search marginnull topsearch pull-right" method="get" action ="{{URL::route('getSearch')}}">
            <div class="span6 pull-left">
                <button value="Search" class="btn btn-success pull-right search" type="submit">Search</button>
                <input type="text" name="keyword" class="span5 search-query search-icon-top pull-right" placeholder="Search a theme here...">
            </div>
            <div class="pull-right ml5">
            @if (Sizeof(Cart::content()) >=0)
                <a href="{{ url('cart/index') }}" class="btn btn-info pull-right"><i class="icon-shopping-cart"></i> Cart ({{ Cart::count() }})</a>
            @endif
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
            <?php $categories = Category::all(); ?>
            @foreach($categories as $category)
            <li><a href="{{url('category/'.$category->id)}}">{{ $category->name }}</a></li>
            @endforeach
            <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Navigation Ends -->
  </div>
</header>
<!-- Header Ends -->