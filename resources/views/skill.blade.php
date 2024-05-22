@extends('layouts.layout')

@section('content')



    <!-- 題名 -->
    <div class="d-flex justify-content-center pt-5">
        <h2>Skill</h2>
    </div>

    <!-- OS -->
    <div class="table-conteiner px-5 pb-4">
        <div class="mt-5">
            <h5>OS</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3">種類</th>
                    <th class="col-3">使用ツール</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">MacBook</td>
                    <td class="col-3">macOS sonoma</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">Linux</td>
                    <td class="col-3"></td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- 言語 -->
    <div class="table-conteiner px-5 py-3">
        <div class="mt-2">
            <h5>言語</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3">種類</th>
                    <th class="col-3">使用ツール</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">HTML</td>
                    <td class="col-3">HTML5</br>Visual Studio Code</br>Google Chrome</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">CSS</td>
                    <td class="col-3">CSS3</br>Visual Studio Code</br>Google Chrome</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">javaScript</td>
                    <td class="col-3"></br>Visual Studio Code</br>Google Chrome</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">PHP</td>
                    <td class="col-3">PHP 8.2.0</br>Visual Studio Code</br>Google Chrome</td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- フレームワーク -->
    <div class="table-conteiner px-5 py-3">
        <div class="mt-2">
            <h5>フレームワーク</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3">種類</th>
                    <th class="col-3">使用ツール</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">Bootstrap</td>
                    <td class="col-3">Bootstrap5</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">Laravel</td>
                    <td class="col-3">Laravel 10</br>Laravel 9</br>Laravel 8</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">Tailwind</td>
                    <td class="col-3">Tailwind2</td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Office/DB -->
    <div class="table-conteiner px-5 py-3">
        <div class="mt-2">
            <h5>ソフト/DB</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3">種類</th>
                    <th class="col-3">使用ツール</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">Excel</td>
                    <td class="col-3"></td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">Word</td>
                    <td class="col-3"></td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">SQL</td>
                    <td class="col-3"></td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- その他 -->
    <div class="table-conteiner px-5 py-3">
        <div class="mt-2">
            <h5>その他</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3">種類</th>
                    <th class="col-3">使用ツール</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">グループウェア</td>
                    <td class="col-3">Slack</br>Zoom</br>Google Meet</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">コード</td>
                    <td class="col-3">Github</td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- 資格・検定 -->
    <div class="table-conteiner px-5 pt-3 pb-5">
        <div class="mt-2">
            <h5>資格・検定</h5>
        </div>
        <table class="table">
            <thead class="">
                <tr class="row">
                    <th class="col-3 ">名称</th>
                    <th class="col-3">取得年月</th>
                    <th class="col-6">学習内容</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="row">
                    <td class="col-3">ホームヘルパー２級</td>
                    <td class="col-3">2007年3月</td>
                    <td class="col-6"></td>
                </tr>
                <tr class="row">
                    <td class="col-3">普通自動車免許（AT限定）</td>
                    <td class="col-3">2012年11月</td>
                    <td class="col-6"></td>
                </tr>
            </tbody>
        </table>

    </div>






@endsection
