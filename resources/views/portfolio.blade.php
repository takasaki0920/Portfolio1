@extends('layouts.layout')

@section('content')


<div class="conteiner">

    <!-- 題名 -->
    <div class="d-flex justify-content-center p-5">
        <h2>Portfolio</h2>
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