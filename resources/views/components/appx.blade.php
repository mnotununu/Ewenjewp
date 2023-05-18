<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!----------------------------------------------------------------
                        Google Analytics API code
        ---------------------------------------------------------------->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZF8H949NX"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-4ZF8H949NX');
        </script>
        
        <!----------------------------------------------------------------
                        Google Analytics API code
        ---------------------------------------------------------------->
        
        <title>EWE NJE-WP&mdash;SMART STAND</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script type="text/javascript" src="chat/js-w/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="chat/js-w/floating-wpp.js"></script> 

        <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

        <link rel="stylesheet" href="{{url('/fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{url('/fonts/flaticon/font/flaticon.css')}}">

        <link rel="stylesheet" href="{{url('/chat/css-w/floating-wpp.css')}}">
        <link rel="stylesheet" href="{{url('/chat/css-w/myWeb.css')}}">

        <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{url('/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{url('/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{url('/css/aos.css')}}">
        <link rel="stylesheet" href="{{url('/css/rangeslider.css')}}">
        <link rel="stylesheet" href="{{url('/css/style.css')}}">
    
    </head>
    <body>
    
        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <!-- navigation links -->
            <header class="site-navbar" role="banner">
                <div class="container">
                    <div class="row align-items-center">
                    
                        <div class="col-11 col-xl-4">
                            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">EWE NJE-WP<span class="text-primary"></span> </a></h1>
                        </div>
                        <h1 class="mb-0 site-logo"><a href="staysolid" class="text-white mb-0">STAY-SOLID<span class="text-primary"></span> </a></h1>
                        <div class="col-12 col-md-8 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">

                                    <li class="{{(request()->is('dashboard'))? 'active' : ''}}"><a href="/dashboard"><span>Home</span></a></li>
                                    <li class="{{(request()->is('about'))? 'active' : ''}}"><a href="/about"><span>About Us</span></a></li>
                                    <li class="{{(request()->is('online'))? 'active' : ''}}"><a href="/online"><span>Book Online</span></a></li>
                                    <li class="{{(request()->is('contact'))? 'active' : ''}}"><a href="/contact"><span>Contact</span></a></li>
                                    <li class="{{(request()->is('catalogue'))? 'active' : ''}}"><a href="/catalogue"><span>Catalogues</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                    </div>
                </div>
            </header>
        </div>

        <!-- Page Content -->
        <div style="padding-top: 60px;">
            <main>
                {{ $slot }}
            </main>
        </div>

        <div class="col-12 text-md-center text-left">
            <p>
                <hr>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> <br>Powered by EWE NJE-WP
            </p>
        </div>

        <script src="js/jquery-3.3.1.min.jss"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>

        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/rangeslider.min.js"></script>

        <!--WhatsApp start-->
        <div class="whatsapp" id="myButton"></div>
        <script type="text/javascript">
            $(function () {
                $('#myButton').floatingWhatsApp({
                    phone: '+27848330005',
                    popupMessage: '',
                    showPopup: true,
                    showOnIE: false,
                    headerTitle: 'EWE NJE-WP',
                    headerColor: '#ea728c',
                    backgroundColor: 'navy',
                    buttonImage: '<img src="chat/img-w/whatsapp.svg" />'
                });
            });
        </script>		
        <!--WhatsApp end-->

        <script src="js/typed.js"></script>
        <script>
            var typed = new Typed('.typed-words', {
                strings: ["Taking Pictures"," Making Videos","Story Telling"],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
            });
        </script>
        <script src="js/main.js"></script>
    </body>
</html>