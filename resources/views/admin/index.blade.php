<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>

	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">

	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"content="mt company">
        <title> Stacknet | Medical Insurance Conpany</title>
        <link rel = "icon" href ="{{ asset('admin/img/logo.png') }}" type = "image/x-icon">
        <!--call bootstrap-->
	    <link rel="stylesheet"href="{{ asset('admin/css/bootstrap.css') }}"/>
        <!--Page Style-->
        <link rel="stylesheet"href="{{ asset('admin/css/style.css') }}"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="{{ asset('admin/css/animate.min.css') }}"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
       <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="{{ asset('admin/js/html5shiv.min.js') }}"></script>
	   	<script src="{{ asset('admin/js/respond.min.js') }}"></script>
       <!---->

       <style>
           .company-btn div {
               display: flex;
               justify-content: center;
           }
           .padding-table .td {
               padding-top: 30px;
           }
       </style>
	</head>
	<body>

        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavBar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavBar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 ml-auto bg-white fixed-top py-2 top-navbar border-nav">
                            <div class="row align-items-center">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown dropdown-move position-relative">
                                            <a class="nav-link dropdown-toggle icon-bullet" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-bell text-dark fa-lg"></i>
                                            </a>
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
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="#">Action</a>
                                              <a class="dropdown-item" href="#">Another action</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('admin/img/5.jpg') }}" alt="">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Profile</a>
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

        <div class="container-fluid mt-5 pt-5">
            <div class="card">
                <div class="row company-btn ">
                    <div class="col-md-3 mt-3">
                        <a href="{{ route('admin.new_user') }}" class="mr-2">Manage new users <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>{{ $sum ?? '0' }}</span> New </span></a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="{{ route('admin.new_contract') }}" class="mr-2">Manage new Contracts <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>0</span> New </span></a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="{{ route('admin.company_direct') }}" class="mr-2">Manage All Company Direct Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>{{ $request_num ?? '0' }}</span> New </span></a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="claims.html" class="mr-2">Manage All Company Requests</a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="claims.html" class="mr-2">Manage All Service Provider Requests</a>
                    </div>

                    <div class="col-md-3 mt-3">
                        <a href="specific-company-Requests.html" class="mr-2">All InComming Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>2</span> New </span></a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="claims.html" class="mr-2">Manage All Insurance Companies</a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a href="claims.html" class="mr-2">Manage All Service Providers</a>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

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

        <script src="{{ asset('admin/js/particles.js') }}"></script>
        <script src="{{ asset('admin/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="{{ asset('admin/../js/wow.min.js') }}"></script>
        <script>new WOW().init();</script>
        <script src="{{ asset('admin/js/jQuery3.3.1.min.js') }}"></script>
        <!---Slider Laibiray-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('admin/js/sliderComponents.js') }}"></script>
        <script src="{{ asset('admin/js/e.js') }}"></script>
	</body>



</html>
