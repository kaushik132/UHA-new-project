@extends('dashboard.layout.main')
@section('main-containers')

<section class="hero_area">
    <div class="container z-11">
      <div class="row">
        <div class="col-xl-6 my-auto">
          <div class="hero_area_inner">
            <span>Comprehensive Assignment Assistance.</span>
            <h3>
              <span>UAH </span>#1 Assignment Writing <span>Service</span>
              <img src="./assets/images/vactor/shap_1.svg" alt="">
            </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <div class="box">
              <div class="box_inner_1">
                <img src="./assets/images/icons/icon_1.png" alt="">
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
                  <button class="nav-link active" id="writing-tab" data-bs-toggle="tab" data-bs-target="#writing-tab-pane" type="button" role="tab" aria-controls="writing-tab-pane" aria-selected="true">
                    <img src="./assets/images/icons/writing.svg" alt="">Writing </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="rewriting-tab" data-bs-toggle="tab" data-bs-target="#rewriting-tab-pane" type="button" role="tab" aria-controls="rewriting-tab-pane" aria-selected="false">
                    <img src="./assets/images/icons/writing.svg" alt="">ReWriting </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="editing-tab" data-bs-toggle="tab" data-bs-target="#editing-tab-pane" type="button" role="tab" aria-controls="editing-tab-pane" aria-selected="false">
                    <img src="./assets/images/icons/editing.svg" alt="">Editing </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="it-tab" data-bs-toggle="tab" data-bs-target="#it-tab-pane" type="button" role="tab" aria-controls="it-tab-pane" aria-selected="false">
                    <img src="./assets/images/icons/it.svg" alt="">It Service </button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="writing-tab-pane" role="tabpanel" aria-labelledby="writing-tab" tabindex="0">
                  <div class="tab_form">
                    <div class="row">
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="text" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="number" placeholder="Phone no.">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Student Name">
                        </div>
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Deadline">
                        </div>
                        <div class="form_box  ">
                          <input type="text" placeholder="Student Name">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box h-100">
                          <div class="file-att_box">
                            <textarea name="" id="" placeholder="Description (write/attach)"></textarea>
                            <input type="file" class="uploadfild">
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-4">
                        <div class="form_box h-100">
                          <a href="" class="custom_button">Submit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="rewriting-tab-pane" role="tabpanel" aria-labelledby="rewriting-tab" tabindex="0">
                  <div class="tab_form">
                    <div class="row">
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="text" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="number" placeholder="Phone no.">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Student Name">
                        </div>
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Deadline">
                        </div>
                        <div class="form_box  ">
                          <input type="text" placeholder="Student Name">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box h-100">
                          <div class="file-att_box">
                            <textarea name="" id="" placeholder="Description (write/attach)"></textarea>
                            <input type="file" class="uploadfild">
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-4">
                        <div class="form_box h-100">
                          <a href="" class="custom_button">Submit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="editing-tab-pane" role="tabpanel" aria-labelledby="editing-tab" tabindex="0">
                  <div class="tab_form">
                    <div class="row">
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="text" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="number" placeholder="Phone no.">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Student Name">
                        </div>
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Deadline">
                        </div>
                        <div class="form_box  ">
                          <input type="text" placeholder="Student Name">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box h-100">
                          <div class="file-att_box">
                            <textarea name="" id="" placeholder="Description (write/attach)"></textarea>
                            <input type="file" class="uploadfild">
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-4">
                        <div class="form_box h-100">
                          <a href="" class="custom_button">Submit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="it-tab-pane" role="tabpanel" aria-labelledby="it-tab" tabindex="0">
                  <div class="tab_form">
                    <div class="row">
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="text" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box">
                          <input type="number" placeholder="Phone no.">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Student Name">
                        </div>
                        <div class="form_box mb-4">
                          <input type="text" placeholder="Deadline">
                        </div>
                        <div class="form_box  ">
                          <input type="text" placeholder="Student Name">
                        </div>
                      </div>
                      <div class="col-xl-6 mb-4">
                        <div class="form_box h-100">
                          <div class="file-att_box">
                            <textarea name="" id="" placeholder="Description (write/attach)"></textarea>
                            <input type="file" class="uploadfild">
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 mb-4">
                        <div class="form_box h-100">
                          <a href="" class="custom_button">Submit</a>
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
    </div>
    <div class="shapes">
      <img src="./assets/images/icons/shap_1.svg" alt="" class="shap_1">
      <img src="./assets/images/icons/shap_2.svg" alt="" class="shap_2">
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
            <h4>Services Process <img src="./assets/images/icons/line_2.svg" alt="">
            </h4>
            <p>Try UAH Expert Study Abroad Counseling Services!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 pt_xl-0 pt-5">
          <div class="process_box">
            <div class="icon">
              <img src="./assets/images/icons/process_1.svg" alt="">
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
              <img src="./assets/images/icons/process_2.svg" alt="">
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
              <img src="./assets/images/icons/process_3.svg" alt="">
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
              <img src="./assets/images/icons/process_4.svg" alt="">
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
            <h3> ALL <span>Services</span> Sampel Available <img src="./assets/images/icons/line_1.svg" alt="">
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
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Writing </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Finance </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Nursing </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Managment </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Finance </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="filter_btn">
                    <a href=""> Writing </a>
                  </div>
                </div>
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
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="sample_box">
            <div class="image">
              <img src="./assets/images/sample/sample_1.svg" alt="">
            </div>
            <div class="content">
              <h3>EM001 Critical Analysis O...</h3>
              <p>8pages |2500words |24-Feb-2024</p>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="sample_btn_1">
            <a href="" class="custom_button">View More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------------------------------------------------------------------------showcounters_area----------------------------------------------------------------------------->
  <section class="showcounters_area">
    <div class="container">
      <div class="counter-container">
        <div class="counter-box">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="50">50</span>K
            </h2>
            <p>Project</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="74">74</span>K
            </h2>
            <p>Member</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="3">3</span>M
            </h2>
            <p>Love Us</p>
          </div>
        </div>
        <div class="counter-box second-counter-show">
          <div class="border-rotate"></div>
          <div class="content">
            <h2>
              <span class="counter" data-count="76">76</span>K
            </h2>
            <p>Happy Client</p>
          </div>
        </div>
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
                <img src="./assets/images/vactor/support.svg" alt="">
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
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Can online essay samples be customized for specific requirements? </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body "> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> What are online essay samples, and how can they benefit students? </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Are there risks associated with relying too heavily on online essay samples? </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Are there risks associated with relying too heavily on online essay samples? </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Are there risks associated with relying too heavily on online essay samples? </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                </div>
              </div>
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
            <h4>Feedback From Student <img src="./assets/images/icons/line_1.svg" alt="">
            </h4>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="testmonial_slider">
            <div class="swiper testmonialsld">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="./assets/images/vactor/Testmo_1.svg" alt="">
                      <span>
                        <img src="./assets/images/vactor/icont_1.svg" alt="">
                      </span>
                    </div>
                    <div class="content">
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                      <h4>Sara Alexander</h4>
                      <span>Product Designer, USA</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="./assets/images/vactor/Testmo_1.svg" alt="">
                      <span>
                        <img src="./assets/images/vactor/icont_1.svg" alt="">
                      </span>
                    </div>
                    <div class="content">
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                      <h4>Sara Alexander</h4>
                      <span>Product Designer, USA</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="./assets/images/vactor/Testmo_1.svg" alt="">
                      <span>
                        <img src="./assets/images/vactor/icont_1.svg" alt="">
                      </span>
                    </div>
                    <div class="content">
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                      <h4>Sara Alexander</h4>
                      <span>Product Designer, USA</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="./assets/images/vactor/Testmo_1.svg" alt="">
                      <span>
                        <img src="./assets/images/vactor/icont_1.svg" alt="">
                      </span>
                    </div>
                    <div class="content">
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                      <h4>Sara Alexander</h4>
                      <span>Product Designer, USA</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="test_slid_box">
                    <div class="image">
                      <img src="./assets/images/vactor/Testmo_1.svg" alt="">
                      <span>
                        <img src="./assets/images/vactor/icont_1.svg" alt="">
                      </span>
                    </div>
                    <div class="content">
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
                      <h4>Sara Alexander</h4>
                      <span>Product Designer, USA</span>
                    </div>
                  </div>
                </div>
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
                <h5>+91 8000306984</h5>
              </div>
            </div>
            <div class="d-flex mt-4">
              <sapn class="spanget_us_span">
                <i class="fa-solid fa-location-dot"></i>
              </sapn>
              <div class="get-cont-call-locateicn">
                <p>Location</p>
                <h5>JAIPUR</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7 mt-4 mb-4">
          <form action="" class="get-contact-formus">
            <div class="row">
              <div class="col-md-6 mt-3">
                <input type="text" placeholder="First Name*" class="get-contact-input-box">
              </div>
              <div class="col-md-6 mt-3">
                <input type="text" placeholder="Last Name*" class="get-contact-input-box">
              </div>
              <div class="col-md-6 mt-3">
                <input type="email" placeholder="Your Email*" class="get-contact-input-box">
              </div>
              <div class="col-md-6 mt-3">
                <input type="url" placeholder="Your Website*" class="get-contact-input-box">
              </div>
              <div class="col-md-12 mt-3">
                <input type="text" placeholder="Number*" class="get-contact-input-box">
              </div>
              <div class="col-md-12 mt-3">
                <textarea name="" id="" cols="5" rows="4" class="get-contact-input-box" placeholder="Message*"></textarea>
              </div>
            </div>
            <div class="mt-4">
              <button class="trade-view-morebtns rounded-1">Submit A Query</button>
            </div>
            <div class="mb-3 form-check mt-3">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
                <img src="./assets/images/icons/line_1.svg" alt="">
              </h4>
            </div>
            <div class="box_2 z-11">
              <a href="" class="custom_button">Join Now</a>
            </div>
            <div class="icons">
              <img src="./assets/images/vactor/shap_3.svg" alt="">
              <img src="./assets/images/vactor/shap_4.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
