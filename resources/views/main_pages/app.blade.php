<html>

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-	Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="mt company">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('home/images/SalesLinkpng.png') }}">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/animate.min.css') }}" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="{{ asset('home/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('home/js/respond.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <style>
        .li-cat {
            cursor: pointer;
            top: 0px;
            overflow: visible;
            padding-bottom: 0px;
            font-family: Roboto;
            font-size: 14px;
            color: rgb(136, 136, 136);
            line-height: 1.2;
            padding-top: 1px;
            border-radius: 0px;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .nav-item:last-of-type {
            padding: 0 20px;
            margin-left: 5px;
            background: -webkit-linear-gradient(left, #9473dd 0%, #1ac9e4 100%);
            border-radius: 20px;
            -o-border-radius: 20px;
            -ms-border-radius: 20px;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
        }

        .footer__title {
            color: #FFF;
        }

        #footer a,
        #footer li {
            color: #999 !important;
        }
    </style>
</head>

<body>
    <div class="Nav wow fadeInUp">
    <div class="text-center">
        @if(session('subscribe'))
                <a class="alert alert-success">{{ session('subscribe') }}</a>
            @endif
    </div>

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light nav-scroll  fixed-top  py-4  mb-5 pl-5 pr-5">
                <div class="container">
                    <img src="{{ asset('home/images/final logo-06.png') }}" style=" width: 180px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav">
                            <li class="nav-item pr-5">
                                <a class="nav-link nav-contact" href="/">Home</a>
                            </li>
                            <li class="nav-item pr-5">
                                <a class="nav-link nav-contact" href="/about">About Us</a>
                            </li>
                            @if(Request::is('/'))
                            <li class="nav-item pr-5">
                                <a class="nav-link nav-contact" href="#services">Services</a>
                            </li>
                            @endif
                            <li class="nav-item pr-5">
                                <a class="nav-link nav-contact" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item shadow-sm "><a class="nav-link nav-contact p-3" style="color: #FFF !important;" href="/get_start">Get Start</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    @yield('content')

    <footer class="contact-footer">
        <div class="contact-footer__main">Subscribe to our newsletter.</div>
        <div class="contact-footer__sub mt-4">We will send you occasionally !! </div>
        <div>
            <form method="POST" action="/subscribe">
                @csrf
                <div class=" d-flex justify-content-center w-100 mt-2" style="flex-wrap: wrap;">
                    <input type="email" name="subscribe" id="" placeholder="What's your email?" class="contact-footer__input mr-3 mt-3"><br>
                    @if($errors->first('subscribe'))
                        <span style="color:red">{{ $errors->first('subscribe') }}</span>
                    @endif
                    <button class="contact-footer__button mt-3">subscribe</button>
                </div>
            </form>
        </div>
    </footer>

    <footer class="footer" id="footer" style="background-color:#192057 !important ; color: #FFF !important;">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer__title">Links</div>
                    <ul class="unstyled-list">
                        <li> <a href="/">Home</a></li>
                        <li> <a href="/about">About</a></li>
                        <li> <a href="/contact">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="footer__title">Contact us</div>
                    <ul class="unstyled-list">
                        <li><i class="fas fa-phone mr-3 text-primary"></i> +201006671194 </li>
                        <li><i class="fas fa-mail-bulk mr-3 text-primary"></i> stacknet11@gmail.com </li>
                        <li> <i class="fas fa-map-marker-alt mr-3 text-primary"></i> Assuit - Assuit university</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="footer__title">Location</div>
                    <ul class="unstyled-list">
                        <li> <i class="fas fa-map-marker-alt mr-3 text-primary"></i> Assuit - Assuit university </li>
                    </ul>
                    <div class="my-map">
                        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.962477765227!2d31.166406114889405!3d27.188916083009325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450bfb7a5cb539%3A0x38d71298729ac58a!2sAssiut%20University!5e0!3m2!1sen!2seg!4v1592511927963!5m2!1sen!2seg"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
    </footer>


    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">

                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U" allowfullscreen></iframe>
                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                    <!--Google +-->
                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4 pt-3 pb-3 pl-5 pr-5" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>


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
    <script src="http://4soft-eg.net/front/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="http://4soft-eg.net/front/js/gmaps.js"></script>
    <script src="{{ asset('home/js/particles.js') }}"></script>
    <script src="{{ asset('home/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="{{ asset('home/js/wow.min.js') }}"></script>
    <script>new WOW().init();</script>
    <script src="{{ asset('home/js/jQuery3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('home/js/sliderComponents.js') }}"></script>
    <script src="{{ asset('home/js/e.js') }}"></script>
</body>
</html>
