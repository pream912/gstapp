<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add GSTR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/gstapp/public/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/gstapp/public/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/gstapp/public/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/gstapp/public/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/gstapp/public/css/custom.css">
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="app">
    <div class="page">
      <!-- Main Navbar-->
        <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big"><span>Auditing </span><strong> Dashboard</strong></div>
                  <div class="brand-text brand-small"><strong>AD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">KC</h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><!--<span class="heading">Main</span>-->
          <ul class="list-unstyled">
                    <li class=""><a href="/gstapp/public"> <i class="icon-home"></i>Dashboard</a></li>
                    <li><a href="addclients.php"> <i class="icon-user"></i>Add Clients </a></li>
                    <li><a href="addgstr.php"> <i class="fa fa-rupee"></i>GSTR </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>View Reports </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">View Clients</a></li>
                        <li><a href="/gstapp/public/gstrs">View GSTR</a></li>
                     
                      </ul>
                    </li>
                    
          </ul>
        </nav>
        <div class="content-inner">


          @yield('content')


          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Vtech Web Technologies &copy; 2018</p>
                </div>
               
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="/gstapp/public/vendor/jquery/jquery.min.js"></script>
    <script src="/gstapp/public/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/gstapp/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/gstapp/public/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/gstapp/public/vendor/chart.js/Chart.min.js"></script>
    <script src="/gstapp/public/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="/gstapp/public/js/front.js"></script>
  </body>
</html>