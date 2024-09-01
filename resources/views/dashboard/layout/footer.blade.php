
<footer class="main-footer-bg">


  @php
  use App\Models\Info; // Assuming 'Info' is the correct model

  $info = Info::first(); // Get the first record from the 'Info' model
@endphp
    <div class="footer-border-1">
      <img src="{{url('assets/images/Border.png')}}" alt="border" class="img-fluid border-img-size">
    </div>
    <div class="footer-border-2">
      <img src="{{url('assets/images/Border.png')}}" alt="border" class="img-fluid border-img-size1">
    </div>
    <div class="footer-border-3">
      <img src="{{url('assets/images/Border.png')}}" alt="border" class="img-fluid border-img-size1">
    </div>
    <div class="footer-content">
      <div class="text-md-center">
        <div>
          <img src="{{url('assets/images/logo/logo.svg')}}" alt="logo" class="img-fluid">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-2 col-12">
          <h6 class="mb-4 footer-title-show mt-2">
            <span>
              <img src="{{url('assets/images/right.svg')}}" alt="">
            </span> Pages
          </h6>
          <ul class="ftr-timeline">
            <li class="footer-list-size">
              <a href="{{route('blogs')}}" class="text-decoration-none text-white">Blog</a>
            </li>
            <li class="footer-list-size mt-3">
              <a href="{{route('contact')}}" class="text-decoration-none text-white">Contact</a>
            </li>
            
            <li class="footer-list-size mt-3">
              <a href="{{route('services')}}" class="text-decoration-none text-white">Services</a>
            </li>
            <li class="footer-list-size mt-3">
              <a href="{{route('sample')}}" class="text-decoration-none text-white">Sample Page</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-12">
          <h6 class="mb-4 footer-title-show mt-2">
            <span>
              <img src="{{url('assets/images/right.svg')}}" alt="">
            </span> Legal
          </h6>
          <ul class="ftr-timeline">
            <li class="footer-list-size">
              <a href="#" class="text-decoration-none text-white">Terms And Conditions</a>
            </li>
            <li class="footer-list-size mt-3">
              <a href="{{route('policy')}}" class="text-decoration-none text-white">Privacy Policy</a>
            </li>
            <li class="footer-list-size mt-3">
              <a href="#" class="text-decoration-none text-white">Refund And Return</a>
            </li>
            <li class="footer-list-size mt-3">
              <a href="#" class="text-decoration-none text-white">Fair And Policy</a>
            </li>
          </ul>
        </div>
        <div class="col-md-5">
          <h6 class="mb-4 footer-title-show mt-2">
            <span>
              <img src="{{url('assets/images/right.svg')}}" alt="">
            </span> Services
          </h6>
          <div class="d-flex">
            <ul class="ftr-timeline">
              <li class="footer-list-size">
                <a href="#" class="text-decoration-none text-white">Management Assignment Writing</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">Technical Assignment Writing</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">Finance Assignment Writing</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">Medical Nursing Writing</a>
              </li>
            </ul>
            <ul class="ftr-timeline ms-3">
              <li class="footer-list-size">
                <a href="#" class="text-decoration-none text-white">Thesis Writing Help</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">Essay Writing Help</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">Dissertation Writing Help</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="#" class="text-decoration-none text-white">View All</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <h6 class="mb-4 footer-title-show mt-2">
            <span>
              <img src="{{url('assets/images/right.svg')}}" alt="">
            </span> Social Links
          </h6>
          <div class="d-flex">
            <ul class="ftr-timeline">
              <li class="footer-list-size">
                <a href="{{ $info ? $info->facebook_link : '#' }}" target="_blank" class="text-decoration-none text-white">Facebook</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="{{ $info ? $info->twitter_link : '#' }}" target="_blank"  class="text-decoration-none text-white">Twitter</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="{{ $info ? $info->skype_link : '#' }}" target="_blank"  class="text-decoration-none text-white">Skype</a>
              </li>
              <li class="footer-list-size mt-3">
                <a href="{{ $info ? $info->instagram_link : '#' }}" target="_blank"  class="text-decoration-none text-white">Instagram</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="ftr-lineshow"></div>
      <div class="d-flex justify-content-between flex-wrap">
        <div class="mt-2 copy-right-ftr">
          © <span id="startYear">2021</span>-<span id="currentYear"></span> UAH | Powered by Academic Help &amp; E-Counselling
        </div>
        <div class="mt-2">
          <img src="{{url('assets/images/dcma.png')}}" alt="dcma" class="img-fluid">
        </div>
      </div>
    </div>
  </footer>
  <span class="whatsapp">
    <img src="{{url('assets/images/vactor/whatsapp.svg')}}" alt="">
  </span>
  <!-------------------------------- bootstrap.min.js ------------------------------------>
  <script src="{{url('assets/Bootstrap/bootstrap.min.js')}}"></script>
  <!-------------------------------- swiper ------------------------------------>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-------------------------------- main.js ------------------------------------>
  <script src="{{url('assets/js/main.js')}}"></script>
  <!-------------------------------- jquery-2.2.0.min.js ------------------------------------>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script>
    const startYear = 2021; // Replace with your start year if it changes
    const currentYear = new Date().getFullYear();
    document.getElementById("startYear").textContent = startYear;
    document.getElementById("currentYear").textContent = currentYear;
</script>
</body>
</html>
