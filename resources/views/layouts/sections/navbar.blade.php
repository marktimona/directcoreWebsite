<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{ @Request::is('/') ? 'active':''}}"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/') }}#about">About Us</a></li>
          <li><a href="{{ url('/') }}#services">Solutions</a></li>
       
         
          <li class="{{ @Request::is('products') ? 'active': ''}}"><a href="{{ url('/products') }}">Products</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li class="menu-has-children"><a href="#">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li class="{{ @Request::is('contact') ? 'active': ''}}"><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>