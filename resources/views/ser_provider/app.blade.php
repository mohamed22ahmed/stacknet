<html>
   <head>
        <meta charset="utf-8"/>
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"content="mt company">
        <title> Stacknet | Medical Insurance Conpany</title>
        <link rel = "icon" href ="{{ asset('ser_provider/img/logo.png') }}" type = "image/x-icon">
	    <link rel="stylesheet"href="{{ asset('ser_provider/css/bootstrap.css') }}"/>
        <link rel="stylesheet"href="{{ asset('ser_provider/css/style.css') }}"/>
       <link rel="stylesheet"href="{{ asset('ser_provider/css/animate.min.css') }}"/>

       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
       <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="{{ asset('ser_provider/js/html5shiv.min.js') }}"></script>
	   	<script src="{{ asset('ser_provider/js/respond.min.js') }}"></script>
	   <!---->
	</head>
	<body>
        @yield('button')

        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavBar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                            <a href="#" class="navbar-brand border-nav2 text-white d-block mx-auto text-center py-3 mb-4">
                                Stacknet
                            </a>
                            <div class=" pb-3 text-center">
                                <img src="{{ asset('ser_provider/img/5.jpg') }}" alt="UserPic" width="50" height="50" class="rounded-circle mr-3 img-profile" >
                                <a href="{{ route('prov.index') }}" class="text-white">{{ session('name') }}</a>
                            </div>
                            <ul class="navbar-nav flex-column mt-4">
                                <li class="nav-item">
                                    <a href="{{ route('prov.index') }}" class="nav-link text-white p-3  current">
                                         <i class="fas fa-home"></i>
                                         Home Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('prov.profile') }}" class="nav-link text-white p-3  sidebar-link">
                                         <i class="fas fa-user"></i>
                                         Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white p-3  sidebar-link">
                                         <i class="fas fa-envelope"></i>
                                         Inbox
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-white fixed-top py-2 top-navbar border-nav">
                            <div class="row align-items-center">
                                <!-- <div class="col-md-4">
                                    <h4 class="text-white text-uppercase mb-0 ">Dashboard</h4>
                                </div> -->
                                <!-- <div class="col-md-5 d-flex justify-content-center">
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search...">
                                        <button type="button" class="btn btn-white search-button">
                                            <i class="fas fa-search text-danger"></i>
                                        </button>
                                    </div>
                                </div> -->
                                <div class="col-md-12 d-flex justify-content-end">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown dropdown-move position-relative">
                                            <a class="nav-link dropdown-toggle icon-bullet" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-bell text-dark fa-lg"></i>
                                          </a>
                                            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown dropdown-move position-relative ">
                                            <a class="nav-link dropdown-toggle icon-bullet2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-comments text-dark fa-lg"></i>
                                          </a>
                                            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('ser_provider/img/5.jpg') }}" alt="">
                                          </a>
                                            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="{{ route('prov.profile') }}">Profile</a>
                                              <a class="dropdown-item" href="/logout">LogOut</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                        <div class="row border-top pt-3">
                            <div class="col-lg-12 text-center">
                                <p>&copy; 2020 copyright. made with <i class="fas fa-heart text-danger"></i> by <span class="text-success">Stacknet Team</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5f71ac824704467e89f2d84c/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <script src="{{ asset('ser_provider/js/particles.js') }}"></script>
        <script src="{{ asset('ser_provider/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="{{ asset('ser_provider/js/wow.min.js') }}"></script>
        <script>new WOW().init();</script>
        <script src="{{ asset('ser_provider/js/jQuery3.3.1.min.js') }}"></script>
        <!---Slider Laibiray-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="{{ asset('ser_provider/js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('ser_provider/js/sliderComponents.js') }}"></script>
        <script src="{{ asset('ser_provider/js/e.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
	</body>
</html>
