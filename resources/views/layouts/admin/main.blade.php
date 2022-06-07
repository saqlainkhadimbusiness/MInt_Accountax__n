<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="shortcut icon" href="assets/img/logo-fav.png"> --}}
    <title>{{ config('app.name') }} - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/sweetalert2/sweetalert2.min.css') }}"/>
    @yield('styles')
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}" type="text/css"/>
    <style>
      #swal2-content {
        text-align: center !important;
      }
    </style>
  </head>
  <body>
    <div class="be-wrapper">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header">
            {{-- <a class="navbar-brand" href="{{ route('admin.dashboard') }}"></a> --}}
            <h2 class="ml-3 mb-5">Mint Accountax</h2>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ url('assets/img/avatar.png') }}" alt="Avatar"><span class="user-name">{{ Auth::user()->name }}</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">{{ Auth::user()->name }}</div>
                    <div class="user-position online">Available</div>
                  </div>
                   <a class="dropdown-item" href="{{ '/developer/dashboard' }}"><span class="icon mdi mdi-face"></span>Developer Mode</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                                      onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                                      <span class="icon mdi mdi-power"></span>Logout</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
            <div class="page-title"><span>Admin Panel</span></div>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li><a href="{{ route('admin.dashboard') }}"><i class="icon mdi mdi-chart-donut"></i><span>Dashboard</span></a></li>
                  <li><a href="{{ route('admin.home.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Home</span></a></li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-chart-donut"></i><span>Payments</span></a>
                  <ul class="sub-menu">
                    <li><a href="{{ route('admin.payments.index') }}">User Payments</a></li>
                    <li><a href="{{ route('admin.manual-payments.index') }}">Manual Payments</a></li>
                  </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-chart-donut"></i><span>Dynamic Data</span></a>
                  <ul class="sub-menu">
                    <li><a href="{{ route('admin.focus-keywords.index') }}">Focus Keywords</a></li>
                    <li><a href="{{ route('admin.header-code.index') }}">Header  COde</a></li>
                  </ul>
                  </li>
                  <li><a href="{{ route('admin.services.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Services</span></a></li>
                  <li><a href="{{ route('admin.headings.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Headings</span></a></li>
                  <li><a href="{{ route('admin.sectors.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Sectors</span></a></li>
                  <li><a href="{{ route('admin.resources.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Resources</span></a></li>
                  <li><a href="{{ route('admin.careers.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Careers</span></a></li>
                  <li><a href="{{ route('admin.categories.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Categories</span></a></li>
                  <li><a href="{{ route('admin.articles.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Articles</span></a></li>
                  <li><a href="{{ route('admin.messages.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Messages</span></a></li>
                  <li><a href="{{ route('admin.users.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Users</span></a></li>
                  <li><a href="{{ route('admin.accounts.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Accounts</span></a></li>
                  <li><a href="{{ route('admin.letters.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Scanned Letters</span></a></li>
                  <li><a href="{{ route('admin.quotes.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Quotations</span></a></li>
                  <li><a href="{{ route('admin.faq.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>FAQ</span></a></li>
                  <li><a href="{{ route('admin.reviews.index') }}"><i class="icon mdi mdi-chart-donut"></i><span>Reviews</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="be-content">
        @yield('content')
      </div>
     
    </div>
    <script src="{{ url('assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/lib/sweetalert2/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/app-ui-sweetalert2.js') }}" type="text/javascript"></script>
    @yield('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        App.init();
        App.uiSweetalert2();
        @yield('init')
      });

      @if(Session::has('message'))
        swal({
          position: 'top-end',
          type: 'success',
          title: '{{ session('message') }}',
          showConfirmButton: false,
          timer: 2000,
          customClass: 'content-header-center'
        });
      @endif

      @if(Session::has('errors'))
        swal({
          title: 'Oops...',
          type: 'error',
          html: '@foreach($errors->all() as $error){{ $error }}<br>@endforeach',
        });
      @endif
    </script>
  </body>
</html>