@extends('layouts.layout')

@section('title', 'PORTFOLIO')

@section('content')


<div class="conteiner my-5 pb-5">
    <!-- 題名 -->
    <div class="d-flex justify-content-center p-5 my-5">
        <h2>Portfolio</h2>
    </div>

    <!-- ポートフォリオ　１件目 -->
    <div class="contents ">
        <!-- タイトル -->
        <h3 class="d-flex justify-content-center">BabyBoon</h3>
        <div class="content_title d-flex justify-content-center p-5">
            <div class="d-flex justify-content-center">
                <!-- イメージ画像 -->
                <div class="portfolio_conteiner col-md-7" >
                    <a href="{{URL::to('https://th-item-management-9685438fc650.herokuapp.com')}}" class="BabyBoon_click">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/BabyBoon.png') }}" class="img-thumbnail" style="width: 500px; height:400px;" alt="...">
                    </div>
                    <p style="text-align: center;">https://th-item-management-9685438fc650.herokuapp.com</p>

                    </a>
                </div>
                <!-- 説明文 -->
                <div class="col-md-7 pl-3">
                    <h5>課題：</h5>
                    <h5>CRUD のいずれかの機能を実装した社内システムの作成</h5>
                    </br>
                    <h5>制作物タイトル：BabyBoon</h5>
                    
                    <ul>ページ
                        <li>従業員登録画面</li>
                        <li>ホーム画面</li>
                        <li>全商品一覧画面</li>
                        <li>各カテゴリー（女の子・男の子・グッズ）毎の商品一覧画面</li>
                        <li>従業員一覧画面</li>
                        <li>従業員編集画面</li>
                    </ul>
                    <ul>機能
                        <li>ログイン・ログアウト機能</li>
                        <li>従業員の新規登録・編集・削除</li>
                        <li>商品の新規登録・編集・削除</li>
                        <li>未編集の場合、前画面へ戻れる</li>
                        <li>商品管理用（キーワード・金額）検索機能</li>
                        <li>ページネーション</li>
                        <li>情報の更新・削除アラート機能</li>
                        <li>画像保存機能（Laravelシンボリックがherokuで使用できないため、現在外部ストレージへの連携を進めています）</li>
                        <li>画像未設定の場合、自動でベビーイラストを設定</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection