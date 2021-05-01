<!doctype html>
<html>
<head>
    <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bug Cinema</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <link rel="shortcut icon" type="image/png" href="{{('public/frontend/images/favicon.ico')}}" />
    
    <!-- Mobile Specific Metas-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <link rel="preconnect" href="https://fonts.gstatic.com">

    


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Roboto -->
       

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('public/frontend/js/jquery.datetimepicker.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link href="{{asset('public/frontend/css/gozha-nav.css')}}" rel="stylesheet" />
        <!-- Select -->
        <link href="{{asset('public/frontend/css/external/jquery.selectbox.css')}}" rel="stylesheet" />

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/rs-plugin/css/settings.css')}}" media="screen" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!-- Custom -->
        <link href="{{asset('public/frontend/css/style.css?v=1')}}" rel="stylesheet" />
        

        <!-- Modernizr --> 
        <style> 
         #datve{
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
         }
        </style>
        <script src="{{asset('public/frontend/js/external/modernizr.custom.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.datetimepicker.full.js')}}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>       
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <!-- Banner -->
       

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='{{url('/')}}' class="logo">
                    <img alt='logo' src="{{asset('public/frontend/images//logo.png')}}">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="{{url('/')}}">TRANG CHỦ</a>
                            
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">PHIM</a>
                            <ul>
                                <li class="menu__nav-item"><a href="{{url('phimdangchieu')}}">Phim đang chiếu</a></li>
                                <li class="menu__nav-item"><a href="page-elements.html">Phim sắp chiếu</a></li>
                                <li class="menu__nav-item"><a href="column.html">Phim Việt Nam</a></li>
                                <li class="menu__nav-item"><a href="icon-font.html">Phim nước ngoài</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="page-elements.html">RẠP BUG</a>
                            <ul>
                                {{-- @include('user.menu') --}}
                                @foreach ($menu_rap as $item)
                                       <li class="menu__nav-item"><a href="">{{$item->tenrap}}</a></li>

                                @endforeach
                                
                                
                            </ul>
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="{{url('/phimhot?page=1')}}">PHIM HOT</a>
                            
                        </li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="gallery-four.html">LIÊN HỆ</a>
                            
                        </li>
                       
                               </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
               
                {{-- <div class="control-panel">
                    <div class="auth__show">
                        <span class="auth__image">
                          <img alt="" src="http://placehold.it/31x31">
                        </span>
                      </div> --}}
                    {{-- <a href="#" class="btn btn--sign login-window">Đăng nhập</a> --}}
                    {{-- <a href="#" class="btn btn-md btn--warning btn--book login-window">Đặt vé ngay</a>
                </div> --}}
                
                <div class="control-panel">
                @if (Auth::check()) 
                <div class="auth auth--home">
                    <div class="auth__show">
                      <span class="auth__image">
                        <img alt="" src="{{asset('public/frontend/images/client-photo/auth.png')}}">
                      </span>
                    </div>
                    <a href="#" class="btn btn--sign btn--singin">
                        {{Session::get('name_user')}}
                    </a>
                      <ul class="auth__function">
                          <li><a href="{{url('profile')}}" class="auth__function-item">Trang cá nhân</a></li>
                          <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                          <li><a href="#" class="auth__function-item">Discussion</a></li>
                          <li><a href="{{url('logout_user')}}" class="auth__function-item">Đăng xuất</a></li>
                      </ul>
                      
                  </div>
                @else
                {{-- <a href="" class="btn ">Sign in</a> --}}
                <a href="{{route('dangky')}}" id="" style=" font-family: 'Roboto', sans-serif;
                font-weight: bold;" class="btn btn-md btn--success btn--book btn-control--home">Đăng ký</a>
                <a href="{{route('user_login')}}" id="" style=" font-family: 'Roboto', sans-serif;
                font-weight: bold;" class="btn btn-md btn--warning btn--book btn-control--home">Đăng nhập</a>
                @endif
                   
                {{-- <a href="#" class="btn btn-md btn--default">Book a ticket</a> --}}
                   
                </div>

            </div>
        </header>
        
        @yield('body')
        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Cities</a></li>
                        <li><a href="movie-list-left.html" class="nav-link__item">Movies</a></li>
                        <li><a href="trailer.html" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Rates</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="coming-soon.html" class="nav-link__item">Coming soon</a></li>
                        <li><a href="cinema-list.html" class="nav-link__item">Cinemas</a></li>
                        <li><a href="offers.html" class="nav-link__item">Best offers</a></li>
                        <li><a href="news-left.html" class="nav-link__item">News</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="#" class="nav-link__item">Terms of use</a></li>
                        <li><a href="gallery-four.html" class="nav-link__item">Gallery</a></li>
                        <li><a href="contact.html" class="nav-link__item">Contacts</a></li>
                        <li><a href="page-elements.html" class="nav-link__item">Shortcodes</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
        

    <!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>window.jQuery || document.write('<script src="{{asset('public/frontend/js/external/jquery-1.10.1.min.js')}}"><\/script>')</script>
        <!-- Migrate --> 
        <script src="{{asset('public/frontend/js/external/jquery-migrate-1.2.1.min.js')}}"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider -->
        <script type="text/javascript" src="{{asset('public/frontend/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- Mobile menu -->
        <script src="{{asset('public/frontend/js/jquery.mobile.menu.js')}}"></script>
         <!-- Select -->
        <script src="{{asset('public/frontend/js/external/jquery.selectbox-0.2.min.js')}}"></script>
        <!-- Stars rate -->
        <script src="{{asset('public/frontend/js/external/jquery.raty.js')}}"></script>
        
        <!-- Form element -->
        <script src="{{asset('public/frontend/js/external/form-element.js')}}"></script>
        <!-- Form validation -->
        <script src="{{asset('public/frontend/js/form.js')}}"></script>

        <!-- Twitter feed -->
        <script src="{{asset('public/frontend/js/external/twitterfeed.js')}}"></script>

        <!-- Custom -->
        <script src="{{asset('public/frontend/js/custom.js')}}"></script>
        
          <script type="text/javascript">
              $(document).ready(function() {
                init_Home();
              });
            </script>
        <script>
            $(function(){
                $('#user-login').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        'url' : 'dang-nhap',
                        'data': {
                            'email' : $('#user-email').val(),
                            'password' : $('#user-password').val()
                        },
                        'type' : 'POST',
                        },
                    success: function (data) {
                        console.log(data);
                    }
                    );
                });
            });
        </script>
        @yield('script')

</body>
</html>
