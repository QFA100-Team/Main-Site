<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>{{config('app.name', 'QFA100 Team')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div style="padding-bottom: 30px; font-size: 20px;">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a style="padding-right: 40px;" class="navbar-brand" href="{{config('app.url')}}">
                    <img src="https://cdn.discordapp.com/attachments/651917468251455497/1005605946623533126/unknown_15.png" width="60" height="60" alt="">
                 </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">

                    <li class="nav-item">
                      <a class="nav-link" href="{{config('app.url')}}/about">About Us</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{config('app.url')}}/pilots">Pilots</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{config('app.url')}}/route">Route</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li> -->

                  </ul>
                </div>
            </nav>
        </div>
        

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>