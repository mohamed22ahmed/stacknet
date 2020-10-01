<html>

<head>
    <!--TO Support Many Language Include Arabic Language-->
    <meta charset="utf-8" />

    <!--For Internet Explorer-->
    <meta http-equiv="X-UA-	Compatible" content="IE=edge">

    <!--First mobilw meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="mt company">
    <title> Stacknet | Medical Insurance Conpany</title>
    <link rel="icon" href="{{ asset('start_page/img/logo.png') }}" type="image/x-icon">
    <!--call bootstrap-->
    <link rel="stylesheet" href="{{ asset('start_page/css/bootstrap.css') }}" />
    <!--Page Style-->
    <link rel="stylesheet" href="{{ asset('start_page/css/form.css') }}" />
    <!--Animate.css-->
    <link rel="stylesheet" href="{{ asset('start_page/css/animate.min.css') }}" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <!---AOS LAIBIRARY-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Internet Explorer-->
    <script src="{{ asset('start_page/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('start_page/js/respond.min.js') }}"></script>
    <!---->
</head>

<body>
    <div id="particles-js"></div>

    <div class="page-content">
        <header>
            <div class="container">
                <nav>
                    <div class="nav__img">
                        <img src="{{ asset('start_page/img/logo.png') }}" alt="logo" class="nave__photo" style="width: 200px;">
                    </div>
                </nav>
            </div>
        </header>


        <div class="content-cover">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 offset-md-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s" style="margin-top: 70px;padding: 20px;">
                        <h1 class="content-cover__heading">STACKNET</h1>
                        <p class="content-cover__paragraph">
                            StackNet is a Management Services Organization work in medical insurance field between service providers and healthcare companies.
                        </p>
                        <h1 class="text-center text-white">Welcome To StackNet!!</h1>
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ asset('start_page/img/icon_login.svg') }}" alt="" style="height: 8rem;">
                    <h3 class="text-center text-muted h4content">Admin Login</h3>
                    <form class="form" method="POST" role="form" autocomplete="off" action="/adm/login">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control input" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <div class=" text-center">
                                <button type="submit" class="btn btn-primary my-4"> Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('start_page/js/particles.js') }}"></script>
    <script src="{{ asset('start_page/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{{ asset('start_page/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('start_page/js/jQuery3.3.1.min.js') }}"></script>
    <script src="{{ asset('start_page/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('start_page/js/form.js') }}"></script>
    <scrip src="{{ asset('start_page/js/e.js') }}">
        </script>
</body>



</html>
