<!DOCTYPE html>
<html>
    
    
<!-- Mirrored from jthemes.net/themes/f-html/GO-Courier/contact-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 09:29:09 GMT -->
<head>
        @yield('title')
        <link rel="icon" type="image/x-icon" href="{{url('img/logo.png')}}">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/font-elegant/elegant.css')}}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/animate.css')}}">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/theme.css')}}"> 


        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Appeler nous maintenent: <span class="theme-clr"> +880-1756-390-370 </span> </p>
                            </div>
                            
                        </div>
                    </div>
                    @guest
                            @if (Route::has('login'))
                            <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> 
                    mon compte </a>
                            @endif

                            @if (Route::has('register'))
                            <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> 
                    mon compte </a>
                            @endif
                            @else

                            <a data-toggle="modal" href="{{ route('logout') }}" class="sign-in fs-12 theme-clr-bg" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"> 
                            {{ Auth::user()->name }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                           
                            
                           
                            

                            
                            
                            
                    @endguest
                   
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="#"> <img src="img/logo.png" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="dropdown active">
                                            <a href="/"  >Accueil </a>
                                            
                                        </li>
                                        <li> <a href="/about" >A propos de nous</a> </li>
                                        
                                        <li> <a href="/contact"> contact </a> </li>  
                                        
                                    </ul>                                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

             @yield('contenu')

            
            <!-- /.Content Wrapper -->

            <!-- Footer -->
            <footer>
            	<style type="text/css">
            		.footer-widget .logo {
							    margin-top: 50px;
							    width: 70%;
							}
            	</style>
                <div class="footer-main pad-120 white-clr">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <a href="#"> <img class="logo" alt="#" src="img/footerLogo.png" />  </a>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">quick links</h2>
                                <ul>
                                    <li> <a href="#">sitemap</a> </li>
                                    <li> <a href="#">pricing</a> </li>
                                    <li> <a href="#">payment method</a> </li>
                                    <li> <a href="#">support</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">important links</h2>
                                <ul>
                                    <li> <a href="#">themeforest</a> </li>
                                    <li> <a href="#">envato</a> </li>
                                    <li> <a href="#">audiojungle</a> </li>
                                    <li> <a href="#">videohibe</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 footer-widget">
                                <h2 class="title-1 fw-900">get in touch</h2>
                                <ul class="social-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                                </ul>
                                <ul class="payment-icons list-inline">
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="{{url('assets/img/icons/payment-1.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="{{url('assets/img/icons/payment-2.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="{{url('assets/img/icons/payment-3.png')}}" /> </a> </li>
                                    <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="{{url('assets/img/icons/payment-4.png')}}" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p> © Copyright 2016, All rights reserved </p>                            
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p> Powered <span class="theme-clr fa fa-heart"></span>  by <a href="https://designet-tn.com/agency" target="_blank" class="main-clr"> Designet web agency </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /.Footer -->


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                        <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                        </div>                        
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="{{url('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>    
        <!-- Bootstrap JS -->
        <script src="{{url('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="{{url('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="{{url('assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="{{url('assets/js/jquery.sticky.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{url('assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>   

        <!-- Theme JS -->
        <script src="{{url('assets/js/theme-ajax-mail.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/js/theme.js')}}" type="text/javascript"></script>

    </body>

<!-- Mirrored from jthemes.net/themes/f-html/GO-Courier/contact-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 09:29:10 GMT -->
</html>
