@extends('dashboard.layout.main')
@section('main-containers')

@php
use App\Models\Info; // Assuming 'Info' is the correct model

$info = Info::first(); // Get the first record from the 'Info' model
@endphp

<section class="hero_area">
    <div class="container z-11">
      <div class="row">
        <div class="col-xl-6 my-auto">
          <div class="hero_area_inner">
            <span>Comprehensive Assignment Assistance.</span>
            <h3>
              <span>UAH </span>#1 Assignment Writing <span>Service</span>
              <img src="{{url('assets/images/vactor/shap_1.svg')}}" alt="">
            </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="box">
              <div class="box_inner_1">
                <img src="{{url('assets/images/icons/icon_1.png')}}" alt="">
                <div class="content">
                  <h4>2,658</h4>
                  <p>Happy Customers</p>
                </div>
              </div>
              <div class="box_inner_2">
                <h4>4.7/5</h4>
                <span>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <span>Rating</span>
                </span>
              </div>
            </div>
            <a href="" class="custom_button">Book Service</a>
          </div>
        </div>
        <div class="col-xl-6 mt-xl-0 mt-5">
          <div class="hero_area_inner_1">
            <p>AI-Free Assignment Help From 5000+ Real Experts Writing Rewriting Editing</p>

      
            <div class="tabs_box">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="writing-tab" type="button" data-value="Writing">
                        <img src="{{url('assets/images/icons/writing.svg')}}" alt="">Writing 
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rewriting-tab" type="button" data-value="ReWriting">
                        <img src="{{url('assets/images/icons/writing.svg')}}" alt="">ReWriting 
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="editing-tab" type="button" data-value="Editing">
                        <img src="{{url('assets/images/icons/editing.svg')}}" alt="">Editing 
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="it-tab" type="button" data-value="It Service">
                        <img src="{{url('assets/images/icons/it.svg')}}" alt="">IT Service 
                    </button>
                </li>
            </ul>
            
            <!-- Hidden input field -->
          
            
              <div class="tab-content" id="myTabContent">
             
                <div class="tab-pane fade show active" id="writing-tab-pane" role="tabpanel" aria-labelledby="writing-tab" tabindex="0">
                 
                 <form action="{{route('assignmentPost')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="topic" id="selectedService" name="selectedService" value="Writing">
                  <span class="text-danger">
                    @error('topic')
                       {{$message}}
                    @enderror
                  </span>
                  <div class="tab_form">
                    <div class="row">
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input name="email" type="email" placeholder="Email">
                          <span class="text-danger">
                            @error('email')
                               {{$message}}
                            @enderror
                          </span>
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input name="phone" type="text" placeholder="Phone no." maxlength="10"  oninput="this.value = this.value.replace(/[^0-9 +.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                          <span class="text-danger">
                            @error('phone')
                               {{$message}}
                            @enderror
                          </span>
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box mb-4">
                          <input name="stu_name" type="text" placeholder="Student Name" oninput="this.value = this.value.replace(/[^A-Za-z+. ]/g, '').replace(/(\..*?)\..*/g, '$1');">
                          <span class="text-danger">
                            @error('stu_name')
                               {{$message}}
                            @enderror
                          </span>
                        </div>
                        <div class="form_box mb-4">
                          <input name="deadline" type="text" placeholder="Deadline">
                          <span class="text-danger">
                            @error('deadline')
                               {{$message}}
                            @enderror
                          </span>
                        </div>
                        <div class="form_box  ">
                          <input name="course" type="text" placeholder="Course Name">
                          <span class="text-danger">
                            @error('course')
                               {{$message}}
                            @enderror
                          </span>
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box h-100">
                          <div class="file-att_box">
                            <textarea name="description" id=""  placeholder="Description (write/attach)"></textarea>
                            <span class="text-danger">
                              @error('description')
                                 {{$message}}
                              @enderror
                            </span>

                            <input name="image" type="file" class="uploadfild">
                            <span class="text-danger">
                              @error('image')
                                 {{$message}}
                              @enderror
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="col-xl-12 mb-4">
                        <div class="form_box h-100">
                          <button type="submit" class="custom_button">
                            Submit
                          </button>
                      
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
                <div class="tab-pane fade" id="rewriting-tab-pane" role="tabpanel" aria-labelledby="rewriting-tab" tabindex="0">
                 
                </div>
                <div class="tab-pane fade" id="editing-tab-pane" role="tabpanel" aria-labelledby="editing-tab" tabindex="0">
             
                </div>
                <div class="tab-pane fade" id="it-tab-pane" role="tabpanel" aria-labelledby="it-tab" tabindex="0">
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shapes">
      <img src="{{url('assets/images/icons/shap_1.svg')}}" alt="" class="shap_1">
      <img src="{{url('assets/images/icons/shap_2.svg')}}" alt="" class="shap_2">
    </div>
  </section>
  <!----------------------------------------------------------------------------------services_area ----------------------------------------------------------------------------->
  <section class="services_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mb-5">
          <div class="service_inner">
            <h4>Tranding Services <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
            </h4>
            <p>Try UAH Expert Study Abroad Counseling Services!</p>
          </div>
        </div>

        @foreach ($servicelist as $servicelist)
            
        <div class="col-xl-4 col-md-6 mb-3">
          <div class="service_box  ">
            <img src="{{url('uploads/'.$servicelist->home_image)}}" alt="logo">
            <span>{{$servicelist->serviceCategory['name']}}</span>
          </div>
        </div>
        @endforeach
     

        <div class="col-xl-12">
          <div class="service_button">
            <a href="{{route('services')}}" class="custom_button">View More</a>
          </div>
        </div>
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
  <!----------------------------------------------------------------------------------services_area ----------------------------------------------------------------------------->
  <section class="sample_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="sample_area_inner">
            <h3> ALL <span>Services</span> Sampel Available <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
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


              <!-- Services Category List -->
@foreach ($servicesSample as $service)
<div class="swiper-slide">
    <div class="filter_btn">
        <a  class="service-link" data-service-id="{{ $service->id }}"> 
            {{$service->name}} 
        </a>
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
        
     <!-- Sample Files -->

  @foreach ($sampalfiles as $sample)
      <div class="col-xl-4 col-md-6 mb-4 sample-file" data-service-id="{{ $sample->category }}">
          <div class="sample_box">
              <div class="image">
                  <img src="{{url('uploads/'.$sample->image)}}" alt="Sample Image">
              </div>
              <div class="content">
                  <h3>{{$sample->module_code}} {{$sample->module_name}}</h3>
                  <p>{{$sample->pages}} pages | {{$sample->words}} words | {{ $sample->created_at->format('d-M-Y') }}</p>
              </div>
          </div>
      </div>
  @endforeach


  
        <div class="col-xl-12">
          <div class="sample_btn_1">
            <a href="{{route('sample')}}" class="custom_button">View More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------------------------------------------------------------------------showcounters_area----------------------------------------------------------------------------->
  <section class="showcounters_area">
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
  <!----------------------------------------------------------------------------------showcounters_area----------------------------------------------------------------------------->
  <section class="choose_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="choose_area_inner">
            <h4>Why Choose Us?</h4>
            <p>Yes, relying too heavily on an online essay sample can be risky. Students may unintentionally mimic the structure or content of a sample without.</p>
            <div class="support_box">
              <div class="image">
                <img src="{{url('assets/images/vactor/support.svg')}}" alt="">
              </div>
              <div class="content">
                <h4>Need Support?</h4>
                <p>Feugiat sed lectus vestibulum mattis fusce ut placerat orci ullamcorper velit.</p>
                <div class="box">
                  <div class="box_1">
                    <i class="fa-solid fa-comment"></i>
                    <span>Contact Us</span>
                  </div>
                  <div class="box_1 color-c">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call Us</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 ps-xl-5 mt-xl-0 mt-4">
          <div class="choose_inner_2">
            <div class="accordion" id="accordionExample">
           

              @foreach ($faq as $faq)
                  
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}"> {{$faq->question}} </button>
                </h2>
                <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> {{$faq->answer}} </div>
                </div>
              </div>
              @endforeach


       
        
       
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="testmonial_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mb-5">
          <div class="service_inner">
            <span>Student Testimonial</span>
            <h4>Feedback From Student <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
            </h4>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="testmonial_slider">
            <div class="swiper testmonialsld">
              <div class="swiper-wrapper">
                
                @foreach ($stu_tm as $stu_tm)
                    
              
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="{{url('uploads/'.$stu_tm->image)}}" alt="Student Images">
                      <span>
                        <img src="{{url('assets/images/vactor/icont_1.svg')}}" alt="">
                      </span>
                    </div>
                    <div class="content">
                     
                      <div class="stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $stu_tm->star)
                                <i class="fas fa-star" style="color: #ffd700;"></i> <!-- Active star -->
                            @else
                                <i class="fas fa-star" style="color: #e0e0e0;"></i> <!-- Inactive star -->
                            @endif
                        @endfor
                    </div>
                    
                    
                      <p>{{ \Illuminate\Support\Str::limit($stu_tm->des, 255,) }}</p>
                      <h4>{{$stu_tm->name}}</h4>
                      <span>{{$stu_tm->profession}}, {{$stu_tm->country}}</span>
                    </div>
                  </div>
                </div>

                @endforeach


               
              
          
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact_us_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-5   my-auto">
          <div class="get-contact-dtlsvw">
            <h3>Get Contact us?</h3>
            <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
            <div class="d-flex mt-5">
              <span class="spanget_us_span">
                <i class="fa-solid fa-phone"></i>
              </span>
              <div class="get-cont-call-locateicn">
                <p>Call Us Anytime</p>
                <h5>{{ $info ? $info->mobile_number : 'No number available' }}</h5>
              </div>
            </div>
            <div class="d-flex mt-4">
              <sapn class="spanget_us_span">
                <i class="fa-solid fa-location-dot"></i>
              </sapn>
              <div class="get-cont-call-locateicn">
                <p>Address</p>
                <h5>{{ $info ? $info->address : 'No address available' }}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7 mt-4 mb-4">
          @if (Session::has('message'))
          <script>
              toastr.options ={
                  "progressBar" : true,
                  "closeButton" : true,
                   "positionClass": "toast-bottom-right"
              }
                  toastr.success("{{ Session::get('message')}}", 'Success!',{timeOut:12000});
          </script>
              
          @endif
              
        
          <form action="{{route('contactPost')}}" method="POST" enctype="multipart/form-data" class="get-contact-formus">
            @csrf
            <div class="row">
              <div class="col-md-6 mt-3">
                <input type="text" name="fname" placeholder="First Name*" class="get-contact-input-box" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                <span class="text-danger">
                  @error('fname')
                     {{$message}}
                  @enderror
                </span>
              </div>
              <div class="col-md-6 mt-3">
                <input type="text" name="lname" placeholder="Last Name*" class="get-contact-input-box" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                <span class="text-danger">
                  @error('lname')
                     {{$message}}
                  @enderror
                </span>
              </div>
              <div class="col-md-6 mt-3">
                <input type="email" name="email" placeholder="Your Email*" class="get-contact-input-box">
                <span class="text-danger">
                  @error('email')
                     {{$message}}
                  @enderror
                </span>
              </div>
              <div class="col-md-6 mt-3">
                <input type="file" name="image" placeholder="Your File*" class="get-contact-input-box">
                <span class="text-danger">
                  @error('image')
                     {{$message}}
                  @enderror
                </span>
              </div>
              <div class="col-md-12 mt-3">
                <input type="text" name="phone" placeholder="Number*" class="get-contact-input-box" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                <span class="text-danger">
                  @error('phone')
                     {{$message}}
                  @enderror
                </span>
              </div>
              <div class="col-md-12 mt-3">
                <textarea name="message" id="" cols="5" rows="4" class="get-contact-input-box" placeholder="Message*"></textarea>
                <span class="text-danger">
                  @error('message')
                     {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="mt-4">
              <button type="submit" id="submitBtn" class="trade-view-morebtns rounded-1">Submit A Query</button>
            </div>
            <div class="mb-3 form-check mt-3">
              <input type="checkbox" id="check"  class="form-check-input" id="exampleCheck1">
              <label class="form-check-label contact-checklabel" for="exampleCheck1">By Send you agree to our privacy Policy </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="joinnow_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="join_now_box">
            <div class="box_1 z-11">
              <span> Join To Your Better Choice </span>
              <h4>Join Now <span>UAH</span>
                <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
              </h4>
            </div>
            <div class="box_2 z-11">
              <a href="{{route('contact')}}" class="custom_button">Join Now</a>
            </div>
            <div class="icons">
              <img src="{{url('assets/images/vactor/shap_3.svg')}}" alt="">
              <img src="{{url('assets/images/vactor/shap_4.svg')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const serviceLinks = document.querySelectorAll('.service-link');
    const sampleFiles = document.querySelectorAll('.sample-file');

    // Check if the elements are being selected correctly
    console.log('Service Links:', serviceLinks);
    console.log('Sample Files:', sampleFiles);

    serviceLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            const serviceId = this.getAttribute('data-service-id');
            console.log('Clicked Service ID:', serviceId);

            // Filter sample files based on the selected service
            sampleFiles.forEach(file => {
                console.log('Sample File Service ID:', file.getAttribute('data-service-id'));
                if (file.getAttribute('data-service-id') === serviceId) {
                    file.style.display = 'block'; // Show matching samples
                } else {
                    file.style.display = 'none'; // Hide non-matching samples
                }
            });
        });
    });
});

  </script>

  <script>
    $(document).ready(function() {
    // Handle the click event on any tab
    $('.nav-link').on('click', function() {
        // Get the data-value of the clicked tab
        var selectedValue = $(this).data('value');
        
        // Update the hidden input field with the selected value
        $('#selectedService').val(selectedValue);

        // Remove the 'active' class from all tabs and add it to the clicked tab
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});

  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll('.nav-link');
    const hiddenInput = document.getElementById('selectedService');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const selectedValue = this.getAttribute('data-value');
            
            // Update hidden input field
            hiddenInput.value = selectedValue;

            // Remove 'active' class from all tabs
            tabs.forEach(tab => tab.classList.remove('active'));

            // Add 'active' class to the clicked tab
            this.classList.add('active');
        });
    });
});

  </script>

<script>
  document.getElementById("check").addEventListener("change", function() {
      var submitBtn = document.getElementById("submitBtn");
      submitBtn.disabled = !this.checked;
  });
</script>

@endsection
