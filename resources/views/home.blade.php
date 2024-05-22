@extends('layouts.layout')

@section('content')

<div class="card my-3 " style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/event_daruma01_02.png') }}" class="img-fluid rounded-start" alt="...">
      
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title">Portfolio</h1>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

@endsection