<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAH </title>
    <link href="./assets/images/logo/favicon.png" rel="shortcut icon" type="image/x-icon">
    <!-------------------------------- bootstrap.css ------------------------------------>
    <link rel="stylesheet" href="./assets/Bootstrap/bootstrap.min.css">
    <!-------------------------------- style.css ------------------------------------>
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-------------------------------- swiper ------------------------------------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-------------------------------- jquery.min.js ------------------------------------>
    <script src="./assets/js/jquery.min.js"></script>
    <!-------------------------------- jquery.migrate.js ------------------------------------>
    <script src="./assets/js/jquery-migrate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-------------------------------- jquery-3.7.0.js ------------------------------------>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="l-color">
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
    </header>
    <section class="login_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-md-8 my-auto mx-auto">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="login_inner">
              <a href="/">
                <img src="./assets/images/logo/logo.svg" alt="">
              </a>
              <div class="form_box">
                <input type="text" name="name" placeholder="Full Name**">
              </div>
              <div class="form_box">
                <input type="email" name="email" placeholder="Email Id*">
              </div>
              <div class="form_box">
                <input type="password" name="password"   placeholder="Password*">
              </div>
              <div class="form_box mt-4">
                <button type="submit">Register</button>
              </div>
              <div class="form_box1 ">
                <p>You have an account <a href="{{route('login')}}">Login Now</a>
                </p>
              </div>
            </div>
        </form>

          </div>
        </div>
      </div>
    </section>
    <span class="whatsapp">
      <img src="./assets/images/vactor/whatsapp.svg" alt="">
    </span>
    <!-------------------------------- bootstrap.min.js ------------------------------------>
    <script src="./assets/Bootstrap/bootstrap.min.js"></script>
    <!-------------------------------- swiper ------------------------------------>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-------------------------------- main.js ------------------------------------>
    <script src="./assets/js/main.js"></script>
    <!-------------------------------- jquery-2.2.0.min.js ------------------------------------>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  </body>
</html>