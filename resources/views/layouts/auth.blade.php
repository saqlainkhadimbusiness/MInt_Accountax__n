<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{ config('app.name') }}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

    <style>
      .text-danger {
        color: #f5543f;
      }

      .is-invalid {
        border: solid 2px #f5543f;
      }
    </style>
  </head>
  <body>
    @include('partials.loader')

    <div class="page">
      <section class="section one-screen-page bg-gray-800">
        <div class="one-screen-page-inner">
          @include('partials.header')
          
          @yield('content')

          <div class="page-footer">
            <div class="container">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>{{ config('app.name') }}</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a>.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ url('js/core.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
  </body>
</html>