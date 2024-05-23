@extends('layouts.layout')

@section('content')

profile<div class="conteiner m-5 p-5" >
    <div class="d-flex justify-content-center ">
        <div class="card d-flex my-3 border border-0" style="max-width:auto;">
            <div class="row g-0 ">
                <div class="col-md-4 mt-4 pt-4">
                    <img src="{{ asset('img/IMG_3980 2.png') }}" class="img-fluid rounded-start" style="width: 240px; height:200px;" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body ">
                        <h1 class="card-titl" style="line-height: 2;">TAKASAKI Portfolio</h1>
                        <div class="" style="line-height: 0.8;">
                            <p>名前：髙﨑　春香</p>
                            <p>出身地：長崎県五島市生まれ</p>
                            <p>　　　　愛知県名古屋市育ち</p>
                            <p>趣味：刺繍・読書・映画鑑賞</p>
                            <p>学習歴 : 2023年9月末~2024年3月末迄 TECH.I.S.にてWEBシステム</p>
                            <p>開発を学習し、現在はUdemyでのECサイトの自己学習中です。</p>
                            
                            </br>
                        </div>
                        <a href="https://github.com/takasaki0920" class="text-decoration-none" style="font-size: medium ; color:blue;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg> https://github.com/takasaki0920</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
