<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'QFA100 Team')}}</title>

        <!-- Bootstrap Content -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://cdn.tiny.cloud/1/nw91byr1as4hmu04oukdb8aq4rdbclr596fv0xi16i28y6bm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
        <!-- Navbar Links -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Style for NAVBAR -->
        <style>@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

          .navbar-icon-top .navbar-nav .nav-link > .fa {
            position: relative;
            width: 36px;
            font-size: 24px;
            
          }
          
          .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            font-size: 0.75rem;
            position: absolute;
            right: 0;
            font-family: sans-serif;
          }
          
          .navbar-icon-top .navbar-nav .nav-link > .fa {
            top: 3px;
            line-height: 12px;
          }
          
          .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            top: -10px;
          }
          
          @media (min-width: 576px) {
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
              text-align: center;
              display: table-cell;
              height: 70px;
              vertical-align: middle;
              padding-top: 0;
              padding-bottom: 0;
            }
          
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
              display: block;
              width: 48px;
              margin: 2px auto 4px auto;
              top: 0;
              line-height: 24px;
            }
          
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
              top: -7px;
            }
          }
          
          @media (min-width: 768px) {
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
              text-align: center;
              display: table-cell;
              height: 70px;
              vertical-align: middle;
              padding-top: 0;
              padding-bottom: 0;
            }
          
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
              display: block;
              width: 48px;
              margin: 2px auto 4px auto;
              top: 0;
              line-height: 24px;
            }
          
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
              top: -7px;
            }
          }
          
          @media (min-width: 992px) {
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
              text-align: center;
              display: table-cell;
              height: 70px;
              vertical-align: middle;
              padding-top: 0;
              padding-bottom: 0;
            }
          
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
              display: block;
              width: 48px;
              margin: 2px auto 4px auto;
              top: 0;
              line-height: 24px;
            }
          
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
              top: -7px;
            }
          }
          
          @media (min-width: 1200px) {
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
              text-align: center;
              display: table-cell;
              height: 70px;
              vertical-align: middle;
              padding-top: 0;
              padding-bottom: 0;
            }
          
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
              display: block;
              width: 48px;
              margin: 2px auto 4px auto;
              top: 0;
              line-height: 24px;
            }
          
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
              top: -7px;
            }
          }
          </style>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <div name="navigation-bar">
      <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Nav Left -->
          <ul class="navbar-nav mr-auto">
            <!-- Home Button -->
            <li class="nav-item active">
              <a class="nav-link" href="{{config('app.url')}}/home">
                <i class="fa fa-home"></i>
                Home
                <span class="sr-only"></span>
                </a>
            </li>

            <!-- About Us -->
            <li class="nav-item">
              <a class="nav-link" href="{{config('app.url')}}/about-us">
                <i class="fa fa-info-circle">
                </i>
                About Us
              </a>
            </li>

            <!-- News -->
            <li class="nav-item">
              <a class="nav-link" href="{{config('app.url')}}/news">
                <i class="fa fa-newspaper-o">
                </i>
                News
              </a>
            </li>

            <!-- Pilot Roster -->
            <li class="nav-item">
              <a class="nav-link" href="{{config('app.url')}}/our-team">
                <i class="fa fa-users">
                </i>
                Our Team
              </a>
            </li>

            <!-- WF Map -->
            <li class="nav-item">
              <a class="nav-link" href="{{config('app.url')}}/event">
                <i class="fa fa-map-o">
                </i>
                Events
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{config('app.url')}}/pilot-roster">
                <i class="fa fa-plane">
                </i>
                Flight Roster
              </a>
            </li>
          </ul>

          <ul class="navbar-nav ">
            @if(Auth::guest())
            <!-- Login/Signup if not logged in-->
            <li class="nav-item">
              <a class="nav-link " href="/login">
                <i class="fa fa-user-circle-o">
                </i>
                Login/Register
              </a>
            </li>

            @else
            <!-- My Account & Notifications -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-users">
                </i>
                My Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                <a class="dropdown-item" href="#">Page Edits</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">
                <i class="fa fa-bell">
                  <span class="badge badge-info">?</span>
                </i>
                Notifications
              </a>
            </li>
            @endif

            

            <!-- Twitch Link -->
          <li class="nav-item">
            <a class="nav-link" href="https://www.twitch.tv/joshuamicallefybsu" target="_blank">
              <i class="fa fa-twitch">
              </i>
              Watch our Stream
            </a>
          </li>

          <!-- Administration Button -->
          <li class="nav-item dropdown">
            <a class="nav-link disabled dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-users">
              </i>
              Admin Actions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">User List</a>
              <a class="dropdown-item" href="#">Page Edits</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">xxx</a>
            </div>
          </li>

          <!-- Search Button
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          -->
        </ul>
        </div>
      </nav>
    </div>

    <body>
        <div class="container" style="margin-top: 50px;">
            @extends('Layouts.script')
            @yield('content')
        </div>
    </body>
</html>