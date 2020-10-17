<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>OSG Admin Panel</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('css/admin/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('css/admin/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('css/admin/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('css/admin/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('css/admin/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('css/admin/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('css/admin/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>OSG Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('adminPanel')}}"><i class="fa fa-home"></i> Home <span></span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('userList')}}">User List</a></li>
                      <li><a href="{{route('userManagement')}}">User Management</a></li>
                        <li><a href="{{route('addUserView')}}">Add User</a></li>
                      <li><a href="{{route('deletedUsers')}}">Deleted Users</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-database"></i> Data Sets <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('dataSetsList')}}">Data Sets List</a></li>
                      <li><a href="{{route('deletedDataSets')}}">Deleted Data Sets</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                   {{\Illuminate\Support\Facades\Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('login')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('adminContent')
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/admin/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/admin/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('js/admin/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('js/admin/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('js/admin/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('js/admin/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('js/admin/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('js/admin/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('js/admin/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('js/admin/jquery.flot.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.time.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('js/admin/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('js/admin/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('js/admin/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('js/admin/jquery.vmap.js')}}"></script>
    <script src="{{asset('js/admin/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('js/admin/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('js/admin/moment.min.js')}}"></script>
    <script src="{{asset('js/admin/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/admin/custom.min.js')}}"></script>

  </body>
</html>
