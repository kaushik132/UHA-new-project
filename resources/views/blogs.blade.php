@extends('dashboard.layout.main')
@section('main-containers')
@php
     use Carbon\Carbon;
@endphp

<section class="page_display_area">
     <div class="container">
       <div class="row">
         <div class="col-xl-12">
           <div class="page_display_inner">
             <h3>Bloges</h3>
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
           <div class="blog_area_inner">
             <h3>All Bloges</h3>
             <ul>
            
@foreach ($newBlog as $newBlog)
<li>
  <a href="{{url('blogs/'.$newBlog->slug)}}">
    <span>
      <i class="fa-solid fa-angles-right"></i>
    </span> {{$newBlog->name}} </a>
</li>
    
@endforeach
            
             </ul>
           </div>
         </div>
         <div class="col-xl-8 mt-xl-0 mt-4">
           <div class="row">

               @foreach ($blogList as $blogList)
                   
               <div class="col-xl-6 mb-4">
                 <div class="blog_box">
                   <div class="image">
                     <img src="{{url('uploads/'.$blogList->image)}}" alt="">
                   </div>
                   <div class="content">
                     <span>{{ \Carbon\Carbon::parse($blogList->created_at)->format('F jS , Y') }} </span>
                     <h5>{{$blogList->title}}</h5>
                     <p>{{ Str::limit($blogList->short_content, 135) }}</p>
                     <div class="box">
                       <span>
                         <i class="fa-solid fa-eye"></i>220 </span>
                       <a href="{{url('blog-details/'.$blogList->slug)}}">View More</a>
                     </div>
                   </div>
                 </div>
               </div>
               @endforeach

     
      
  
      
    
       
      
             <div class="col-xl-12">
               <div class="panget_button_sample">
                 <ul>
                   <li class="prev">
                     <i class="fa-solid fa-arrow-left-long"></i>
                   </li>
                   <li class="numb">1</li>
                   <li class="numb">2</li>
                   <li class="numb">3</li>
                   <li class="numb">4</li>
                   <li class="next">
                     <i class="fa-solid fa-arrow-right-long"></i>
                   </li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>



@endsection