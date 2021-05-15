{{--  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>  --}}



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>mind</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>	
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/chosen.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard/login/css/color-01.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard/login/css/flexslider.css')}}">


  <link rel="icon" href="{{ asset('assets/images/fevicon.png')}}" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <!-- style css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <!-- Responsive-->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  {{--  <div class="loader_bg">
    <div class="loader"><img src="{{asset('assets/images/loading.gif')}}" alt="#" /></div>
  </div>  --}}
  <!-- end loader -->
  <!-- header -->
  <header>
    
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{asset('assets/images/logo.png')}}" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="{{ route('index') }}">الرئيسيه</a> </li>
                      <li> <a href="{{ route('Units') }}">المناهج </a> </li>
                      <li> <a href=" #about">About</a> </li>
                      <li> <a href=" #learn">My Profile</a> </li>
                      <li> <a href=" {{ route('startuser.exam') }}">امتحانات</a> </li>
                      <li>
                      @if(Route::has('login'))
                 @auth
                  @if(Auth::user()->utype==="ADM")
                 
                  <li><a href="{{ route('admin.dashboard') }}"  >Dashboard</a></li>
                  <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">logout</a>

                  <form id="logout-form" method="POST" action={{ route('logout') }} >
                    @csrf
                  </form>
                </li>
                  @else
                  
                  <li><a  href="{{route('user.dashboard')}}"  >Dashboard</a></li>
                  
                  @endif
                  @else
                  <a href="{{ route('register') }}">sing up</a>           
                  <a href="{{ route('login') }}">login</a>   
                  @endif
                  @endif
                </li>
                <li> <a href=""></a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                 @if(Route::has('login'))
                 @auth
                  @if(Auth::user()->utype==="ADM")
                  <a href="{{route('admin.dashboard')}}">
                    
                                      <i class="fas fa-user">{{ Auth::user()->name }}</i>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">logout</a>

                                      <form id="logout-form" method="POST" action={{ route('logout') }} >
                                        @csrf
                                      </form>

                  </a>

                  @else
                  <a href="{{route('user.dashboard')}}">
                         <i class="fas fa-user">{{ Auth::user()->name }}</i>

                  </a>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">logout</a>

                  <form id="logout-form" method="POST" action={{ route('logout') }} >
                    @csrf
                  </form>
                  @endif
                 @else
            <a href="{{ route('register') }}">sing up</a>           
            <a href="{{ route('login') }}">login</a>           

                 @endif
                 @endif
                 
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     
    </div>
    <a class="carousel-control-prev" href="myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>

  
    {{ $slot }}

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in  </span>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contact us </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="{{asset('assets/icon/loc.png')}}" alt="#" /></a>London 145
                        <br>United Kingdom </li>
                        <li>
                          <a href="#"><img src="{{asset('assets/icon/email.png')}}" alt="#" /></a>demo@gmail.com </li>
                          <li>
                            <a href="#"><img src="{{asset('assets/icon/call.png')}}" alt="#" /></a>+12586954775 </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="{{asset('assets/icon/fb.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('assets/icon/tw.png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('assets/icon/lin(2).png')}}"></a></li>
                            <li><a href="#"><img src="{{asset('assets/icon/instagram.png')}}"></a></li>
                          </ul>

                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Courses</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Masters Degree</a> </li>
                            <li><a href="#">Post GraduateU</a> </li>
                            <li><a href="#">Ndergraduate</a> </li>
                            <li><a href="#">Engineering</a> </li>
                            <li><a href="#">Ph.D Degree</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Information</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">Campus Tour</a> </li>
                            <li><a href="#">Student Lifes</a> </li>
                            <li><a href="#">Cholarship</a> </li>
                            <li><a href="#"> Admission</a> </li>
                            <li><a href="#">Leadership</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="{{route("index")}}"> <img src="{{asset('assets/images/logo1.jpg')}}" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="{{asset('assets/js/jquery.min.js')}}"></script>
          <script src="{{asset('assets/js/popper.min.js')}}"></script>
          <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
           <script src="{{asset('assets/js/plugin.js')}}"></script>    
          <!-- sidebar -->
          <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
          <script src="{{asset('assets/js/custom.js')}}"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>



</body>

</html>