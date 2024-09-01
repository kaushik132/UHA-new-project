@extends('dashboard.layout.main')
@section('main-containers')


<section class="page_display_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="page_display_inner">
            <h3>
              <span>Our</span> Services
            </h3>
            <p>Comprehensive Assignment Assistance With a No-AI Guarantee!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sample_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="sample_area_inner">
            <h3> ALL <span>Services</span>
              <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
            </h3>
            {{-- <div class="search_sample">
              <input type="text" placeholder="Find the service you need">
              <button>
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div> --}}
          </div>
        </div>
        <div class="col-xl-12 mb-4">
          <div class="sample_filters">
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">


@foreach ($servicesall as $servicesall)
    
<div class="swiper-slide">
  <div class="filter_btn">
    <a href="{{url('services/'.$servicesall->slug)}}" class="active"> {{$servicesall->name}} </a>
  </div>
</div>
@endforeach
              
           
           
          
                
              </div>
            </div>
            <div class="swiper-button-next">
              <i class="fa-solid fa-angle-right"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="fa-solid fa-angle-left"></i>
            </div>
          </div>
        </div>



       
      
       
       
        
       
       
       @foreach ($servicesList as $servicesList)
           
       <div class="col-xl-4 col-md-6 mb-4">
         <div class="sml_service_box">
           <span>{{$servicesList->title}}</span>
           <img src="{{url('uploads/'.$servicesList->home_image)}}" alt="">
         </div>
       </div>
       @endforeach
     
      
       
       
      </div>
    </div>
  </section>
  <!----------------------------------------------------------------------------------services_area ----------------------------------------------------------------------------->
  <section class="s_process_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mb-xl-1">
          <div class="service_inner">
            <h4>Services Process <img src="{{url('assets/images/icons/line_2.svg')}}" alt="">
            </h4>
            <p>Try UAH Expert Study Abroad Counseling Services!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 pt_xl-0 pt-5">
          <div class="process_box">
            <div class="icon">
              <img src="{{url('assets/images/icons/process_1.svg')}}" alt="">
              <span class="span_1"></span>
              <span class="span_2"></span>
              <span class="span_3"></span>
            </div>
            <div class="content">
              <h4>Contact Team</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 pt_xl-0 pt-5">
          <div class="process_box">
            <div class="icon">
              <img src="{{url('assets/images/icons/process_2.svg')}}" alt="">
              <span class="span_1"></span>
              <span class="span_2"></span>
              <span class="span_3"></span>
            </div>
            <div class="content">
              <h4>Assinmant Details</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 pt_xl-0 pt-5">
          <div class="process_box">
            <div class="icon">
              <img src="{{url('assets/images/icons/process_3.svg')}}" alt="">
              <span class="span_1"></span>
              <span class="span_2"></span>
              <span class="span_3"></span>
            </div>
            <div class="content">
              <h4>Meeting</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 pt_xl-0 pt-5">
          <div class="process_box pro-none">
            <div class="icon">
              <img src="{{url('assets/images/icons/process_4.svg')}}" alt="">
              <span class="span_1"></span>
              <span class="span_2"></span>
              <span class="span_3"></span>
            </div>
            <div class="content">
              <h4>Complete Assinmant</h4>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------------------------------------------------------------------------showcounters_area----------------------------------------------------------------------------->
  <section class="showcounters_area p-103">
    <div class="container">
      <div class="counter-container">
        @foreach ($client as $client)
            
        
        <div class="counter-box">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="50">{{$client->project_num}}</span>K
            </h2>
            <p>Project</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="74">{{$client->member_num}}</span>K
            </h2>
            <p>Member</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="3">{{$client->love_us_num}}</span>M
            </h2>
            <p>Love Us</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="76">{{$client->happy_client_num}}</span>K
            </h2>
            <p>Happy Client</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>




@endsection