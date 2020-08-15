<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spider Mesh</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">

    <!-- slicknav -->
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <script src="https://kit.fontawesome.com/6446014ee3.js" crossorigin="anonymous"></script>
  
</head>

<body>

    <!-- support bar area start -->
    <div class="support-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <a href="{{route('home')}}" class="logo" style="height:33px;width:181px">
                        <img src="frontend/img/spide.png" alt="Spider Mesh">
                    </a>
                </div>
                <div class="col-md-7 col-sm-9 col-xs-12">
                    <div class="support-right">
                        <div class="single-support-box">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="content">

                                <a href="tel:+8800112375">+8801618057878</a>
                                <a href="tel:+8800112375">+8801318302180</a>
                            </div>
                        </div>
                        <div class="single-support-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <a href="mailto:spidermesh@outlook.com">spidermesh@outlook.com</a>
                                <a href="mailto:info@spidermesh.com.bd">info@spidermesh.com.bd</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="support-btn">




                        @if(Auth::user())
                        <a class="boxed-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{Auth::user()->name}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                        @else


                        <a href="{{route('login')}}" class="boxed-btn">Login</a>
                        @endif
                        <!-- <a class="boxed-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end support bar area -->

<!-- header-area start -->
<header class="header-area header-area-bg">
        <!-- navbar area start -->
        <nav class="navbar-area">
            <div class="containear">
                <div class="row navbar-bg">
                    <div class="col-md-9 col-sm-6 col-xs-3">
                         <div class="responsive-menu"></div>
                       
                        <ul id="primary-menu" class="menu-none"  style="display:none;">
                        <li class="active">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('internet')}}">Internet</a>
                            </li>
                            <li>
                                <a href="">Live Sports</a>
                            </li>
                            <li>
                                <a href="">FTb</a>
                            </li>

                            <li>
                                <a href="{{route('service')}}">Service</a>
                            </li>
                            <li>
                                <a href="{{route('payment')}}">Payment</a>
                            </li>
                            <li>
                                <a href="{{route('contact_us')}}">Contact us</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                        </ul>
                        <ul class="menu-none"  style="margin-left:90px;">
                        <li class="active">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('internet')}}">Internet</a>
                            </li>
                            <li>
                                <a href="">Live Sports</a>
                            </li>
                            <li>
                                <a href="">FTb</a>
                            </li>

                            <li>
                                <a href="{{route('service')}}">Service</a>
                            </li>
                            <li>
                                <a href="{{route('payment')}}">Payment</a>
                            </li>
                            <li>
                                <a href="{{route('contact_us')}}">Contact us</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-9">
                        <div class="navbar-right-area">
                           
                        <div class="support-btn hidden-desktop">


                        @if(Auth::user())
                        <a class="boxed-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{Auth::user()->name}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                        @else


                        <a href="{{route('login')}}" class="boxed-btn">Login</a>
                        @endif


                            </div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Spidermesh/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCQHpD8KaH2ZRmyXmyfdsYcg">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>      
            </header><!-- end header-area -->
            
 
 


    @yield('content')

    <!-- footer area start -->
    <footer class="footer-area">
        <div class="footer-inner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-top">
                            <ul id="footer-payment-logo">
                                <li>
                                    <a href="#"><img src="frontend/img/brand/01.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="frontend/img/brand/02.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>

                                </li>
                                <li>
                                    <a href="#"><img src="frontend/img/brand/01.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>

                                </li>
                                <li>
                                    <a href="#"><img src="frontend/img/brand/02.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>

                                </li>
                                <li>
                                    <a href="#"><img src="frontend/img/brand/01.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>

                                </li>
                                <li>
                                    <a href="#"><img src="frontend/img/brand/02.png" style="height:50px;Width:100px;"
                                            alt="payment logo"></a>

                                </li>

                            </ul>
                        </div>
                        <div class="footer-bottom">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget about">
                                        <div class="widget-body">
                                            <a href="index.html" class="footer-logo">
                                                <img src="frontend/img/spide.png" style="color:white" alt="Spider Mesh">
                                            </a>
                                            <p>

                                                Founded At 2011. Since 2011 We Provide services to 2000+ clients,
                                                completed 200+ projects
                                                and have 70+ readymade software. people From 40+ country using our
                                                products.



                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget contact">
                                        <div class="widget-title">
                                            <h4>Get In Touch</h4>
                                        </div>
                                        <div class="widget-body">
                                            <ul>
                                                <li>
                                                    <i class="fas fa-home"></i>HEAD OFFICE <br /> Uposhohor, Bogra,
                                                    Bangladesh.<br />
                                                    Cell: +88 01318 30 21 80<br />
                                                    email: info@spidermesh.com.bd
                                                </li>
                                                <li>
                                                    <i class="fas fa-home"></i>
                                                    NOC<br />
                                                    She’s Das Lane, Jaleshwaritola
                                                    Bogura-5800
                                                    <br />
                                                    (051)69666, 01618057878<br />
                                                    spidermesh@outlook.com

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget subscribe">
                                        <div class="widget-title">
                                            <h5 style="color:aqua"> OPENING HOURS
                                                Sat-Thr: 10:00AM-06:00PM</h5>

                                            <h4>Flow Us</h4>
                                        </div>
                                        <div class="widget-body">
                                            <div class="subscribe-form">
                                                <form action="index.html" method="POST">
                                                    <input type="email" placeholder="Enter your email....">
                                                    <input type="submit" value="Subscribe">
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
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright &copy; Dreamploy 2020. All right reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <i class="fas fa-angle-up"></i>
    </div>
    <!-- back to top area end -->

    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- jquery -->
    <script src="frontend/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="frontend/js/bootstrap.min.js"></script>
    <!-- slicknav -->

    <script src="frontend/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="frontend/js/jquery.js"></script>

    <script src="frontend/js/jquery.slicknav.min.js"></script>
    <!-- magnifiq popup  -->
    <script src="frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- owl carousel -->
    <script src="frontend/js/owl.carousel.min.js"></script>
    <!-- google map activation -->
    <script src="frontend/js/goolg-map-activate.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi-rrw9lb-uKY1vHd9gkzuBpj4-hiBsUA&callback=initMap"
        async defer></script>
    <!-- main -->
    <script src="frontend/js/main.js"></script>


  
</body>

</html>