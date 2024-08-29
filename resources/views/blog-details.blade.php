@extends('dashboard.layout.main')
@section('main-containers')

{{-- @php
    use Carbon\Carbon;

// Assuming $item->created_at is a Carbon instance or a string in a format that Carbon can parse
$date = Carbon::parse($blogData->created_at)->format('d M, Y');
@endphp --}}
<section class="page_display_area">
   <div class="container">
     <div class="row">
       <div class="col-xl-12">
         <div class="page_display_inner">
           <h3>Bloges - <span>Details</span>
           </h3>
           <p>Comprehensive Assignment Assistance With a No-AI Guarantee!</p>
         </div>
       </div>
     </div>
   </div>
 </section>

 
 <section class="blog_area">
   <div class="container">
     <div class="row">
       <div class="col-xl-4">
         <div class="blog_area_inner blog-d-in">
           <h3>The Best Assignment Help</h3>
           <p>Complete Your Assignment before deadline with professional academic writers.</p>
           <div class="blog-d-form">
             <div class="form-box">
               <label for="">Enter Your Name</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">Enter your email</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">Phone No.</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">Your Subject / Course Code</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">Enter Date</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">No. of pages / words</label>
               <input type="text" name="" id="">
             </div>
             <div class="form-box">
               <label for="">Enter Assignment Description</label>
               <textarea name="" id="" rows="4"></textarea>
             </div>
             <div class="form-box">
               <a href="">
                 <img src="./assets/images/icons/upload.svg" alt=""> Drag and drop a file here or click </a>
             </div>
             <div class="form-box">
               <a href=""> Free Assistance </a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xl-8 mt-xl-0 mt-4 ps-xl-5">
         <div class="blog-d-area">
           <h4>{{$blogData->title}}</h4>
           <p>{{$blogData->short_content}}</p>
           <div class="image">
             <img src="{{url('uploads/'.$blogData->image)}}" alt="">
           </div>
           <div class="blog-d-inner">
             <h5>
               <img src="{{url('assets/images/icons/icon_2.svg')}}" alt="">Generic Conventions: Assignment Help Services
             </h5>
             <p>Table of contents</p>
             <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Generic Features </button>
                 </h2>
                 <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                   <div class="accordion-body "> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Types of genres in writing </button>
                 </h2>
                 <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Literary conventions </button>
                 </h2>
                 <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Common features of literary genres that are not reprinted often </button>
                 </h2>
                 <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Story conventions </button>
                 </h2>
                 <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> A short story about conventions </button>
                 </h2>
                 <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> Film genre </button>
                 </h2>
                 <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
               <div class="accordion-item">
                 <h2 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> Technical conventions vs. theatrical conventions </button>
                 </h2>
                 <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                   <div class="accordion-body"> Yes, online samples can be customized for specific requirements. Students can buy essay help with free samples as templates. They can adapt their writing styles to meet the unique demands of their homework. Customization allows students to incorporate their individual ideas while maintaining a strong foundation provided by the sample. </div>
                 </div>
               </div>
             </div>
           </div>
           <div  class="blog_p">
            {!!$blogData->description!!}
           </div>
           
           <div class="councling_book_btn">
             <ul>
               <li>
                 <a href="{{$blogData->whatapp}}">
                   <img src="{{url('assets/images/vactor/whatsapp.svg')}}" alt="">
                 </a>
               </li>
               <li>
                 <a href="{{$blogData->facebook}}">
                   <img src="{{url('assets/images/vactor/facebook.svg')}}" alt="">
                 </a>
               </li>
               <li>
                 <a href="{{$blogData->linkedin}}">
                   <img src="{{url('assets/images/vactor/linkdin.svg')}}" alt="">
                 </a>
               </li>
             </ul>
             <a href="" class="btn-book">Book Your Counselling</a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>


 <section class="blog-d-latest">
   <div class="container">
     <div class="row">
       <div class="col-xl-12 mb-5">
         <div class="service_inner">
           <h4 style="color: #14A4F5;">From Our Blog List Latest Feed <img src="{{url('assets/images/icons/line_1.svg')}}" alt="">
           </h4>
         </div>
       </div>

       @foreach ($blog as $blog)
           
       <div class="col-xl-4 mb-4">
         <div class="blog_box">
           <div class="image">
             <img src="{{url('uploads/'.$blog->image)}}" alt="blog image">
           </div>
           <div class="content">
             <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('F jS , Y') }}</span>
             <h5>{{$blog->title}}</h5>
             <p>{{ Str::limit($blog->short_content, 135) }}</p>
             <div class="box">
               <span>
                 <i class="fa-solid fa-eye"></i>220 </span>
               <a href="{{url('blog-details/'.$blog->slug)}}">View More</a>
             </div>
           </div>
         </div>
       </div>
       @endforeach
       

     </div>
   </div>
 </section>


@endsection