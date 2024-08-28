@extends('dashboard.layout.main')
@section('main-containers')

@php
    $num = 1;
@endphp

<h1>sample file</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Servive Category Name</th>
        <th scope="col">Module Name</th>
        <th scope="col">Module Title</th>
        <th scope="col">Price</th>
        <th scope="col">Assignmet</th>
        <th scope="col">Pages</th>
        <th scope="col">Words</th>
        <th scope="col">Details</th>
        <th scope="col">Download</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sample as $item)
        @if ($item->status == 1)
        <tr>  
          <th scope="row">{{$num++}}</th>
          <td>{{$item->sampleCategory->name}}</td>
          <td>{{$item->module_name}}</td>
          <td>{{$item->module_title}}</td>
          <td>{{$item->price}}</td>
          <td>{{$item->assignment_title}}</td>
          <td>{{$item->pages}}</td>
          <td>{{$item->words}}</td>
          <td>{!! $item->details !!}</td>
          <td><a href="{{ route('genrater.pdf', $item->id) }}">Download</a></td>
      </tr>
  
            
        @endif
@endforeach

    </tbody>
  </table>


@endsection