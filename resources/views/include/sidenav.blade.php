
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MAC</title>
 
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../images/logo.jpg" class="navbar-brand-img" alt="...">
        </a>
  
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/gallery')}}">
                <i class="ni ni-image text-orange"></i>
                <span class="nav-link-text">Manage Galleries</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/document')}}">
                <i class="ni ni-single-copy-04 text-green"></i>
                <span class="nav-link-text">Add Documents</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/departments')}}">
                <i class="ni ni-fat-add text-primary"></i>
                <span class="nav-link-text">Add Departments</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/manage-dept')}}">
                <i class="ni ni-ui-04 text-primary"></i>
                <span class="nav-link-text">Manage Departments</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/schemes')}}">
                <i class="ni ni-bullet-list-67 text-success"></i>
                <span class="nav-link-text">Schemes & Programes</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/funds')}}">
                <i class="ni ni-money-coins text-danger"></i>
                <span class="nav-link-text">Manage Funds</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/event')}}">
                <i class="ni ni-notification-70 text-yellow"></i>
                <span class="nav-link-text">Manage Events</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/council')}}">
                <i class="ni ni-single-02 text-default"></i>
                <span class="nav-link-text">Council Members & Designation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/scope')}}">
                <i class="ni ni-single-copy-04 text-info"></i>
                <span class="nav-link-text">Scopes & Works</span>
              </a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/testimonial')}}">
                <i class="ni ni-paper-diploma"></i>
                <span class="nav-link-text">Testimonials</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/about_us')}}">
                <i class="ni ni-badge"></i>
                <span class="nav-link-text">About Us</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/contact')}}">
                <i class="ni ni-circle-08 text-success"></i>
                <span class="nav-link-text">Contact Info</span>
              </a>
            </li>
         
          <!-- Divider -->
          <hr class="my-3">
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="ni ni-button-power"></i>
              <span class="nav-link-text">Logout</span>
            </a>
          </li> --}}
          {{-- <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li> --}}
        </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              {{-- <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div> --}}
            </li>
            <li style="margin-left: 10px;">
              <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
              </a>  
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      @yield('sidenav')
    </main>
  </div>
 
</body>
</html>