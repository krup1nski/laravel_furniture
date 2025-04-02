@extends('layouts.main')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="{{ route('home') }}" class="breadcrumbs__el">
                        <i class="fa-solid fa-house"></i>
                        Главная</a>
                </li>

                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__el">Спасибо!</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1 class="page-title">Спасибо за ваш заказ!</h1>
        <div>

            <p>Ваш заказ №{{ session()->get('order_id') }} успешно сформирован</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            localStorage.clear();
        })
    </script>
@endsection
