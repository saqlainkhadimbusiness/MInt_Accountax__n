<!DOCTYPE html>
<html lang="en">


<!-- index  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('Res/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/jquery-selectric/selectric.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('Res/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('Res/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('Res/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('Res/assets/img/favicon.ico')}}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>

          </ul>
        </div>
        {{--<ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('Res/assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <a href="" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>--}}
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a > <img alt="image" src="{{asset('Res/assets/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">Welcome</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="{{route('developer.dashboard.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

{{--            <li class="dropdown">--}}
{{--                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Parents Form</span></a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                  <li><a class="nav-link" href="parents-advanced-form">New Record</a></li>--}}
{{--                  <li><a class="nav-link" href="parents-datatables">Manage</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="dropdown active"   >
              <a  class="menu-toggle nav-link has-dropdown"><i style="color: red;" class="fas fa-bug"></i><span>Error Logs</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('developer.error_logs.index')}}">All</a></li>
                <li><a class="nav-link"  href="/developer/NewErrors">New</a></li>
                <li><a class="nav-link" href="/developer/FixedErrors">Fixed</a></li>
                <li><a class="nav-link"  href="/developer/IgnoredErrors">Ignored</a></li>
                <li><a class="nav-link"  href="/developer/InformedErrors">Informed</a></li>
              </ul>
            </li>

          </ul>
        </aside>
      </div>
{{--    </div>--}}
{{--  </div>--}}