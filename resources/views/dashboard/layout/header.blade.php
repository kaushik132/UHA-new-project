<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    @if(isset($seo_data['seo_title']))
        <title>{{ $seo_data['seo_title'] }}</title>
        @endif
      
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
        @if(isset($seo_data['seo_description']))
          <meta name="description" content="{{$seo_data['seo_description']}}" />
          @endif

          @if(isset($seo_data['keywords']))
          <meta name="keywords"  content="{{$seo_data['keywords']}}" />
          @endif  
  
    <link href="{{url('assets/images/logo/favicon.png')}}" rel="shortcut icon" type="image/x-icon">
    <!-------------------------------- bootstrap.css ------------------------------------>
    <link rel="stylesheet" href="{{url('assets/Bootstrap/bootstrap.min.css')}}">
    <!-------------------------------- style.css ------------------------------------>
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!-------------------------------- swiper ------------------------------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-------------------------------- jquery.min.js ------------------------------------>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <!-------------------------------- jquery.migrate.js ------------------------------------>
    <script src="{{url('assets/js/jquery-migrate.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-------------------------------- jquery-3.7.0.js ------------------------------------>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- toster --}}
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--End toster --}}
  </head>
  <body>
    <!---------------------------------------------------------------------------------- header-start ----------------------------------------------------------------------------->
    <header>
      <div class="top_header">
        <div class="container">
          <div class="top_header_inner">
            <div class="box">
              <p>All course 28% off for <a href="">Liberian people’s.</a>
              </p>
            </div>
            <div class="box_1">
              <ul>
                <li>
                  <a href="">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span>(970) 262-1413</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa-regular fa-envelope"></i>
                    <span>address@gmail.com</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="social">
              <ul>
                <li>
                  <a href="">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa-brands fa-skype"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{url('assets/images/logo/logo.svg')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav   mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('services')}}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('blogs')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('sample')}}">Sample page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('policy')}}">Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>

              @if (Auth::check())

              <li class="nav-link nav_btn">
             {{-- <a href="#"><button class="" >{{ Auth::user()->name ?? ""}}</button></a> --}}
                 <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="" type="submit">Logout</button>
                 </form>
              </li>
              @else
                  
              <li>
                <a class="nav-link nav_btn" href="{{route('login')}}"> Sign IN</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>

