<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', config('app.name'))">
    <meta name="keywords" content="@yield('keywords', '')">
    {!! keywords(url()->current()) !!}
    {!! Services_keywords(url()->current()) !!}
    {!! header_code(url()->current()) !!}
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}" id="main-styles-link">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/lib/sweetalert2/sweetalert2.min.css') }}"/>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    @yield('styles')
  </head>
  <body>
    @include('partials.loader')

    <div class="page">
      <!-- Page Header-->
      @include('partials.header')

      @yield('content')



            {!! FAQs(url()->current()) !!}
      <footer class="section footer-2">
        <div class="container">
          <div class="row row-40">
            <div class="col-md-6 col-lg-3"><a class="footer-logo" href="{{ url('/') }}"><img src="{{ url('images/logo-149x21.png') }}" alt="logo" width="149" height="21"/></a>
              <p style="max-width: 85%">We are one of the leading accounting firms in the area. By combining our expertise, skills, and the energy of our staff.</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <img src="{{ url('images/sageone.png') }}" alt="SageOne">
              <img src="{{ url('images/xero_bronze.png') }}" alt="Xero Bronze">
            </div>
            <div class="col-md-6 col-lg-3">
              <br>
              <img src="{{ url('images/sage_business_cloud.png') }}" alt="Sage Business Cloud">
              <br>
              <img src="{{ url('images/xero_advisor.png') }}" alt="Xero Advisor">
            </div>
            <div class="col-md-6 col-lg-3">
              <h5 class="title">Contact Information</h5>
              <ul class="contact-box">
                <li>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                    <div class="unit-body"><a href="#">
                      Flat 7 Pedley House, 6 Ripplegate Walk, Barking, London, United Kingdom, IG11 0YB</div>
                  </div>
                </li>
                <br>
                <li>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                    <div class="unit-body">
                      <ul class="list-phones">
                        <li><a href="tel:#">44-748-135-5570</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-horizontal unit-spacing-xxs">
                    <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                    <div class="unit-body"><a href="mailto:#">info@mintaccountax.co.uk</a></div>
                  </div>
                </li>
              </ul>
              <div class="group-md group-middle social-items">
                <a class="icon icon-md novi-icon mdi mdi-whatsapp" href="https://wa.me/447481355570" target="_blank"></a>
                <a class="icon icon-md novi-icon mdi mdi-facebook" href="https://www.facebook.com/Mintaccountax" target="_blank"></a>
                {{-- <a class="icon icon-md novi-icon mdi mdi-twitter" href="#"></a> --}}
                <a class="icon icon-md novi-icon mdi mdi-instagram" href="https://www.instagram.com/mintaccountax"></a>
                {{-- <a class="icon icon-md novi-icon mdi mdi-facebook-messenger" href="#"></a> --}}
                <a class="icon icon-md novi-icon mdi mdi-linkedin" href="https://www.linkedin.com/company/mint-accountax/" target="_blank"></a>
              </div>
            </div>
          </div>

          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>{{ config('app.name') }}</span><span>.&nbsp;</span><a href="#">Privacy Policy</a>.</p>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('js/core.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
    <script src="{{ url('assets/lib/sweetalert2/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=ec431044-90c0-4d5c-a2ca-f0abea3b82e7"> </script>

    @yield('scripts')

    <script>
      @if(Session::has('success'))
        swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Success',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 2000,
          customClass: 'content-header-center'
        });
      @endif

      @if(Session::has('error'))
        swal.fire({
          position: 'center',
          type: 'error',
          title: 'Oops...',
          text: '{{ session('error') }}',
          showConfirmButton: true,
          customClass: 'content-header-center'
        });
      @endif

      $('#payroll').on('change', function() {
        if (this.value == 'Weekly' || this.value == 'Fortnightly' || this.value == 'Monthly') {
          $('#noOfEmp').css('display', '');
        }
        else {
          $('#noOfEmp').css('display', 'none');
        }
      });

      $('#bookkeeping').on('change', function() {
        if (this.value == '1') {
          $('#transPerMonth').css('display', '');
        }
        else {
          $('#transPerMonth').css('display', 'none');
        }
      });

      $('#business_type').on('change', function() {
        if (this.value == 'Partnership') {
          $('#noOfPartners').css('display', '');
          $('#llp').css('display', 'none');
        }
        else if (this.value == 'LLP') {
          $('#llp').css('display', '');
          $('#noOfPartners').css('display', 'none');
        }
        else {
          $('#noOfPartners').css('display', 'none');
          $('#llp').css('display', 'none');
        }
      });
    </script>
  </body>
</html>