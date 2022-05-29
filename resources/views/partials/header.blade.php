<header class="section page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap rd-navbar-absolute">
    <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand"><a class="brand" href="{{ url('/') }}"><img class="brand-logo-dark" src="images/logo-149x21.png" alt="" width="149" height="21"/><img class="brand-logo-light" src="{{ url('images/logo-149x21.png') }}" alt="" width="149" height="21"/></a>
            </div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <!-- RD Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Services</a>
                  <ul class="rd-menu rd-navbar-megamenu">
                    @foreach($nav_headings as $heading_selected)
                      <li class="rd-megamenu-item">
                        <h6 class="rd-megamenu-title">{{ $heading_selected->name }}</h6>
                        <ul class="rd-megamenu-list">
                          @foreach($heading_selected->services as $nav_service)
                            <li class="rd-megamenu-list-item">
                              <a class="rd-megamenu-list-link" href="{{ url('/' . $nav_service->slug) }}">
                                {{ $nav_service->title }}
                              </a>
                            </li>
                          @endforeach
                        </ul>
                      </li>
                    @endforeach
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Sectors</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    @foreach($nav_sectors as $sector_selected)
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/' . $sector_selected->slug) }}">{{ $sector_selected->title }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">Resources</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    @foreach($nav_resources as $resource_selected)
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/' . $resource_selected->slug) }}">{{ $resource_selected->title }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">Careers</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    @foreach($nav_careers as $career_selected)
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/' . $career_selected->slug) }}">{{ $career_selected->title }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">More</a>
                  <ul class="rd-menu rd-navbar-dropdown">
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('blog') }}">Blog</a></li>
                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('contact') }}">Contact Us</a></li>
                  </ul>
                </li>
                @guest
                    <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('login') }}">Login</a>
                @else
                    <li class="rd-nav-item"><a class="rd-nav-link" href="javascript:void(0)">{{ Auth::user()->name }}</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('home') }}">Dashboard</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('user.password') }}">Change Password</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('user.profile') }}">Update Profile</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('user.checkout') }}">Checkout</a></li>
                        @if(Auth::user()->admin)
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('admin.dashboard') }}">Admin</a></li>
                        @endif
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">Logout</a>
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        </li>
                      </ul>
                    </li>
                @endguest
                </li>
              </ul>
            </div>
            <!-- RD Navbar Search-->
            <div class="rd-navbar-search">
              <button class="rd-navbar-search-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
              <form class="rd-search" action="{{ url('blog/search') }}" data-search-live="rd-search-results-live" method="POST">
                @csrf

                <div class="form-wrap">
                  <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                  <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="name" autocomplete="off">
                  <div class="rd-search-results-live" id="rd-search-results-live"></div>
                </div>
                <button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>