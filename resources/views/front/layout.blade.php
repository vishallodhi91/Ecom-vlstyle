<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('page_title')</title>
    <link href="{{ asset('front_assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/custom_style.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/jquery.simpleLens.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/nouislider.css') }}">
    <link id="switcher" href="{{ asset('front_assets/css/theme-color/default-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('front_assets/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('front_assets/css/style.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var PRODUCT_IMAGE = "{{ asset('storage/media/') }}";
    </script>

</head>

<body class="productPage">
    <!-- wpf loader Two -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- / wpf loader Two -->
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->


    <!-- Start header section -->
    <!-- start header top  -->
    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i>
                    vishallodhi91090@gmail.com
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone"></i>
                    +91-9109068913
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->
    <!-- / header top  -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row-align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{url('front_assets/img/logo.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <!-- search box -->
                <div class="col-md-6">
                    <div class="search">
                        <form action="">
                            <input type="text" id="search_str" placeholder="Search here ex. 'man' ">
                            <button type="button" onclick="funSearch()"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                <!-- / search box -->

                <!-- / logo  -->
                <!-- cart box -->
                @php
                    $getAddToCartTotalItem = getAddToCartTotalItem();
                    $totalCartItem = count($getAddToCartTotalItem);
                    $totalPrice = 0;
                @endphp

                <div class="col-md-3">
                    <div class="user">
                        <a href="{{ url('/cart') }}" class="btn wishlist">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="aa-cart-notify">{{ $totalCartItem }}</span>
                        </a>

                        <div class="btn cart">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <i class="fa fa-angle-down"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @if (session()->has('FRONT_USER_LOGIN') != null)
                                    <a class="dropdown-item" href="{{ url('/order') }}">&ensp;<i class="fa fa-check-square"></i>&ensp;My Order</a><br>
                                    <a class="dropdown-item" href="{{ url('/logout') }}">&ensp;<i class="fa fa-sign-out"></i>&ensp; Logout</a><br>
                                @else
                                    <a class="dropdown-item" href="" data-toggle="modal"
                                        data-target="#login-modal">&ensp;<i class="fa fa-sign-in"></i>&ensp;Login</a><br>
                                    <a class="dropdown-item" href="{{ url('/registration') }}">&ensp;<i class="fa fa-user-plus"></i>&ensp;Register</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->
    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <!-- menu -->
            <section id="menu">
                <div class="container">
                    <div class="menu-area">
                        <!-- Navbar -->
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <!-- Left nav -->
                                {!! getTopNavCat() !!}
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- / menu -->
        </div>
    </div>
    <!-- Nav Bar End -->
    <!-- / header section -->
    <!-- menu -->
    <!-- Start slider -->

    @section('container')
    @show

    <!-- footer -->
    <footer id="aa-footer">
        <!-- footer bottom -->
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <h3>Main Menu</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Products</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Knowledge Base</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Delivery</a></li>
                                                <li><a href="#">Returns</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Special Offer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Useful Links</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Search</a></li>
                                                <li><a href="#">Advanced Search</a></li>
                                                <li><a href="#">Suppliers</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Contact Us</h3>
                                            <address>
                                                <p>Bhopal,MP 462045, India</p>
                                                <p><span class="fa fa-phone"></span>+91-9109068913</p>
                                                <p><span class="fa fa-envelope"></span>lashiv@gmail.com</p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
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
        <!-- footer-bottom -->
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <p>Designed by <a href="http://www.vishallodhi.com/">Vishal Lodhi</a></p>
                            <div class="aa-footer-payment">
                                <span class="fa fa-cc-mastercard"></span>
                                <span class="fa fa-cc-visa"></span>
                                <span class="fa fa-paypal"></span>
                                <span class="fa fa-cc-discover"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->
    @php
    if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
      $login_email=$_COOKIE['login_email'];
      $login_pwd=$_COOKIE['login_pwd'];
      $is_remember="checked='checked'";
    } else{
      $login_email='';
      $login_pwd='';
      $is_remember="";
    }   
  
    @endphp    
    <!-- Login Modal -->  
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">                      
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div id="popup_login">
              <h4>Login or Register</h4>
              <form class="aa-login-form" id="frmLogin">
                <label for="">Email address<span>*</span></label>
                <input type="email" placeholder="Email" name="str_login_email" required value="{{$login_email}}">
                <label for="">Password<span>*</span></label>
                <input type="password" placeholder="Password" name="str_login_password" required value="{{$login_pwd}}">
                <button class="aa-browse-btn" type="submit" id="btnLogin">Login</button>
                <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" name="rememberme" {{$is_remember}}> Remember me </label>
  
                <div id="login_msg"></div>
  
                <p class="aa-lost-password"><a href="javascript:void(0)" onclick="forgot_password()">Lost your password?</a></p>
                
                <div class="aa-register-now">
                  Don't have an account?<a href="{{url('registration')}}">Register now!</a>
                </div>
                @csrf
              </form>
            </div>
            <div id="popup_forgot" style="display:none;">
              <h4>Forgot Password</h4>
              <form class="aa-login-form" id="frmForgot">
                <label for="">Email address<span>*</span></label>
                <input type="email" placeholder="Email" name="str_forgot_email" required>
                <button class="aa-browse-btn" type="submit" id="btnForgot">Submit</button>
                <br><br>
                <div id="forgot_msg"></div>
               
                <div class="aa-register-now">
                  Login Form?<a href="javascript:void(0)" onclick="show_login_popup()">Login now!</a>
                </div>
                @csrf
              </form>
            </div>
  
          </div>                        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('front_assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/jquery.smartmenus.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/jquery.smartmenus.bootstrap.js') }}"></script>
    <script src="{{ asset('front_assets/js/sequence.js') }}"></script>
    <script src="{{ asset('front_assets/js/sequence-theme.modern-slide-in.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/jquery.simpleGallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/jquery.simpleLens.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_assets/js/nouislider.js') }}"></script>
    <script src="{{ asset('front_assets/js/custom.js') }}"></script>
    <script src="{{ asset('front_assets/js/custom-main.js') }}"></script>
</body>

</html>
