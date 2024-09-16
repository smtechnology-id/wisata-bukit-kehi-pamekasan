<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Website Wisata Bukit Kehi Pamekasan</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-landing/images/favicon.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets-landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ asset('assets-landing/css/style.css') }}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ asset('assets-landing/css/plugin.css') }}" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets-landing/fonts/line-icons.css') }}" type="text/css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content py-1 bg-theme">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="links">
                    <ul>
                        <li><a href="#" class="white"><i class="icon-calendar white"></i> Thursday, Mar 26, 2021</a></li>
                        <li><a href="#" class="white"><i class="icon-location-pin white"></i>  Hollywood, America</a></li>
                        <li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM – 5 PM</a></li>
                    </ul>
                </div>
                <div class="links float-right">
                    <ul>  
                        <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets-landing/images/logo.png') }}" alt="image" style="width: 80px; height: 80px; " >
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li class="active"><a href="{{ route('index') }}">Home</a></li>
                                <li class="submenu dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="icon-arrow-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('landing.about') }}">Sejarah</a></li>
                                        <li><a href="{{ route('landing.statistik') }}">Statistik</a></li>
                                    </ul> 
                                </li>

                                <li class=""><a href="{{ route('landing.destination') }}">Destinasi</a></li>
                                <li class=""><a href="{{ route('landing.gallery') }}">Gallery</a></li>
                                <li class=""><a href="{{ route('landing.product') }}">Product</a></li>
                                <li class=""><a href="{{ route('landing.news') }}">News</a></li>
                                <li class=""><a href="{{ route('landing.contact') }}">Kontak kami</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->     
                        <div class="register-login d-flex align-items-center">
                            <a href="{{ route('login') }}" class="me-3">
                                <i class="icon-user"></i> Login
                            </a>
                            <a href="{{ route('ticket') }}" class="nir-btn white">Pesan Ticket</a>
                        </div> 

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->
    @yield('content')
    <!-- footer starts -->
    <footer class="pt-20 pb-4"  style="background-image: url({{ asset('assets-landing/images/background_pattern.png') }});">
        <div class="section-shape top-0" style="background-image: url({{ asset('assets-landing/images/shape8.png') }});"></div>

        <!-- Instagram ends -->
        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                        <div class="footer-about">
                            <img src="{{ asset('assets-landing/images/logo.png') }}" alt="" style="width: 100px; height: 100px; ">
                            <p class="mt-3 mb-3 white">
                                Website Wisata Bukit Kehi Pamekasan
                            </p>
                            <ul>
                                <li class="white"><strong>PO Box:</strong> +47-252-254-2542</li>
                                <li class="white"><strong>Location:</strong> Pamekasan, Jawa Timur, Indonesia</li>
                                <li class="white"><strong>Email:</strong> info@Travelin.com</li>
                                <li class="white"><strong>Website:</strong> www.Travelin.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Quick link</h3>
                            <ul>
                                <li><a href="{{ route('landing.about') }}">Sejarah</a></li>
                                <li><a href="{{ route('landing.statistik') }}">Statistik</a></li>
                                <li><a href="{{ route('landing.destination') }}">Destinasi</a></li>
                                <li><a href="{{ route('landing.gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('landing.product') }}">Product</a></li>
                                <li><a href="{{ route('landing.news') }}">News</a></li>
                                <li><a href="{{ route('landing.contact') }}">Kontak kami</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Newsletter</h3>
                            <div class="newsletter-form ">
                                <p class="mb-3">Jin our community of over 200,000 global readers who receives emails filled with news, promotions, and other good stuff.</p>
                                <form action="#" method="get" accept-charset="utf-8" class="border-0 d-flex align-items-center">
                                    <input type="text" placeholder="Email Address">
                                    <button class="nir-btn ms-2">Subscribe</button>
                                </form>
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2024 Wisata Bukit Kehi Pamekasan. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>  
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
        <div id="particles-js"></div>
    </footer>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- login registration modal -->
    <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="post-tabs">
                <!-- tab navs -->
                <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                    </li>
                </ul>
                <!-- tab contents -->
                <div class="tab-content blog-full" id="postsTabContent">
                    <!-- popular posts -->
                    <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="blog-image rounded">
                                    <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center border-b pb-2">Login</h4>
                                <div class="log-reg-button d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-fb">
                                        <i class="fab fa-facebook"></i> Login with Facebook
                                    </button>
                                    <button type="submit" class="btn btn-google">
                                        <i class="fab fa-google"></i> Login with Google
                                    </button>
                                </div>
                                <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                <form method="post" action="#" name="contactform" id="contactform">
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="fname" placeholder="User Name or Email Address">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lpass" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                        <label class="custom-control-label mb-0" for="exampleCheck1">Remember me</label>
                                        <a class="float-end" href="#">Lost your password?</a>
                                    </div>
                                    <div class="comment-btn mb-2 pb-2 text-center border-b">
                                        <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                    </div>
                                    <p class="text-center">Don't have an account? <a href="#" class="theme">Register</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Recent posts -->
                    <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-6">
                               <div class="blog-image rounded">
                                    <a href="#" style="background-image: url(images/trending/trending5.jpg);"></a>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center border-b pb-2">Register</h4>
                                <div class="log-reg-button d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-fb">
                                        <i class="fab fa-facebook"></i> Login with Facebook
                                    </button>
                                    <button type="submit" class="btn btn-google">
                                        <i class="fab fa-google"></i> Login with Google
                                    </button>
                                </div>
                                <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                <form method="post" action="#" name="contactform1" id="contactform1">
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="fname1" placeholder="User Name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" name="user_name" class="form-control" id="femail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lpass1" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" name="password_name" class="form-control" id="lrepass" placeholder="Re-enter Password">
                                    </div>
                                    <div class="form-group mb-2 d-flex">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                        <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I have read and accept the Terms and Privacy Policy?</label>
                                    </div>
                                    <div class="comment-btn mb-2 pb-2 text-center border-b">
                                        <input type="submit" class="nir-btn w-100" id="submit1" value="Register">
                                    </div>
                                    <p class="text-center">Already have an account? <a href="#" class="theme">Login</a></p>
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


    <!-- *Scripts* -->
    <script src="{{ asset('assets-landing/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/particles.js') }}"></script>
    <script src="{{ asset('assets-landing/js/particlerun.js') }}"></script>
    <script src="{{ asset('assets-landing/js/plugin.js') }}"></script>
    <script src="{{ asset('assets-landing/js/main.js') }}"></script>
    <script src="{{ asset('assets-landing/js/custom-swiper.js') }}"></script>
    <script src="{{ asset('assets-landing/js/custom-nav.js') }}"></script>
</body>
</html>