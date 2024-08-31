@extends('dashboard.layout.main')
@section('main-containers')


<section class="page_display_area">
   <div class="container">
     <div class="row">
       <div class="col-xl-12">
         <div class="page_display_inner">
           <h3>Contact <span>Us</span>
           </h3>
           <p>Comprehensive Assignment Assistance With a No-AI Guarantee!</p>
         </div>
       </div>
     </div>
   </div>
 </section>
 <section class="contact_area">
   <div class="container">
     <div class="row">
       <div class="col-xl-5 my-auto">
         <div class="contact_inner">
           <h2>Get Contact us?</h2>
           <p>Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make type specimen book has survived not five centuries but also the leap into electronic.</p>
           <ul>
             <li>
               <span>
                 <i class="fa-solid fa-phone"></i>
               </span>
               <div class="content">
                 <span>Call Us Anytime</span>
                 <h5>+91 8000306984</h5>
               </div>
             </li>
             <li>
               <span>
                 <i class="fa-solid fa-location-dot"></i>
               </span>
               <div class="content">
                 <span>Location :</span>
                 <h5>JAIPUR</h5>
               </div>
             </li>
             <li>
               <span>
                 <i class="fa-solid fa-envelope"></i>
               </span>
               <div class="content">
                 <span>Email</span>
                 <h5>UAH@gmail.com</h5>
               </div>
             </li>
           </ul>
         </div>
       </div>
       <div class="col-xl-7 mt-xl-0 mt-4">
         <div class="contact_inner_1">
            @if (session()->has('message'))
      <div class="alert alert-success">
         
         
         {{session()->get('message')}}
      </div>
          
      @endif
            <form action="{{route('contactPost')}}" method="POST" enctype="multipart/form-data">
               @csrf
           <div class="row">
             <div class="col-xl-6 mb-3">
               <div class="form_box">
                 <input type="text" name="fname" placeholder="First Name*" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                 <span class="text-danger">
                  @error('fname')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-6 mb-3">
               <div class="form_box">
                 <input type="text" name="lname" placeholder="Last Name*" oninput="this.value = this.value.replace(/[^A-Za-z+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                 <span class="text-danger">
                  @error('lname')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-6 mb-3">
               <div class="form_box">
                 <input type="email"  name="email" placeholder="Your Email*">
                 <span class="text-danger">
                  @error('email')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-6 mb-3">
               <div class="form_box">
                 <input type="file" name="image"  placeholder="File Uploads**">
                 <span class="text-danger">
                  @error('image')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-12 mb-3">
               <div class="form_box">
                 <input type="text" name="phone" placeholder="Number*" maxlength="10" oninput="this.value = this.value.replace(/[^0-9+.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                 <span class="text-danger">
                  @error('phone')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-12 mb-3">
               <div class="form_box">
                 <textarea name="message" rows="5" id="" placeholder="Message*"></textarea>
                 <span class="text-danger">
                  @error('message')
                     {{$message}}
                  @enderror
                </span>
               </div>
             </div>
             <div class="col-xl-12 mb-3">
               <div class="form_box2">
                  <input type="submit" id="submitBtn" disabled  value="Submit" class="submit_btn">
               </div>
             </div>
             <div class="col-xl-12">
               <div class="  form-check mt-0">
                 <input type="checkbox" id="check" class="form-check-input" id="exampleCheck1">
                 <label class="form-check-label contact-checklabel" for="exampleCheck1">By Send you agree to our privacy Policy </label>
               </div>
             </div>
           </div>
         </form>
         </div>
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
             <a href="" class="custom_button">Join Now</a>
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
   document.getElementById("check").addEventListener("change", function() {
       var submitBtn = document.getElementById("submitBtn");
       submitBtn.disabled = !this.checked;
   });
</script>


@endsection