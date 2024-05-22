@extends('layouts.layout')

@section('title', 'PORTFOLIO_HOME')

@section('content')

<!-- title -->
<div class="conteiner mb-5">
    <div class="d-flex align-items-center justify-content-center">
        <div class="card d-flex my-3 border border-0" style="max-width:auto;">
            <div class="row g-0 ">
                <div class="col-md-5">
                    <img src="{{ asset('img/event_daruma01_02.png') }}" class="img-fluid rounded-start" style="width: 400px; height:300px;" alt="...">
                </div>
                <div class="col-md-7 d-flex align-items-center">
                    <div class="card-body ">
                        <h1 class="card-title ">TAKASAKI Portfolio</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- ポートフォリオ　１件目 -->
    <div class="contents d-flex justify-content-center p-5">
        <div class="">
            <h3 >BabyBoon</h3>
            <div class="portfolio_conteiner">
                <a href="{{URL::to('https://th-item-management-9685438fc650.herokuapp.com')}}" class="BabyBoon_click">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/BabyBoon.png') }}" class="img-thumbnail" style="width: 500px; height:400px;" alt="...">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection