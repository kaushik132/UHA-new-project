@extends('dashboard.layout.main')
@section('main-containers')

@php
    $num = 1;
@endphp

<section class="page_display_area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="page_display_inner">
          <h3>
            <span>Sample</span>Paper
          </h3>
          <p>Comprehensive Assignment Assistance With a No-AI Guarantee!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sample_p_section">
  <div class="container">
    <div class="row">
      @foreach ($sample as $item)
      @if ($item->status == 1)
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="sample_box">
          <div class="image">
            <img src="./assets/images/sample/sample_1.svg" alt="">
          </div>
         
          <div class="content">
            <a href="{{ route('genrater.pdf', $item->id) }}" style="text-decoration: none">
            <h3>{{$item->module_name}} {{$item->module_title}}</h3>
            <p>{{$item->pages}} |{{$item->words}} |24-Feb-2024</p>
          </a>
          </div>
      
        </div>
      </div>
      @endif
      @endforeach
   
     
  
    
   
    
   
  
     
    
      {{-- <div class="col-xl-12">
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
      </div> --}}
    </div>
  </div>
</section>


@endsection