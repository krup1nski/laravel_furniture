@extends('layouts.main')

@section('content')

{{--    <div class="breadcrumbs">--}}
{{--        <div class="container">--}}
{{--            <ul class="breadcrumbs__list">--}}
{{--                --}}{{--                @dd($bradcrumbs)--}}

{{--                @foreach($bradcrumbs as $br)--}}
{{--                    <li class="breadcrumbs__item">--}}
{{--                        @if($loop->last)--}}
{{--                            <span class="breadcrumbs__el">{{ $data['category']->title }}</span>--}}
{{--                        @else--}}
{{--                            <a href="{{ $br['href'] }}" class="breadcrumbs__el">--}}
{{--                                @if($br['is_home'])--}}
{{--                                    <i class="fa-solid fa-house"></i>--}}
{{--                                @endif--}}
{{--                                {{ $br['title'] }}</a>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                @endforeach--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <h1 class="page-title">{{ $data['category']->title }}</h1>--}}
{{--    </div>--}}





<div class="page-accessories">
    <div class="container">
        <h1 class="page-title">Аксессуары</h1>
        <span class="page-desc">123123123</span>
        <div class="page-accessories__items">
            @foreach($accessories as $accessory)
            <div class="page-accessories__item">
                <div class="page-accessories__item_img">
                    <img src="{{ $accessory->image }}" alt="">
                </div>
                <div class="page-accessories__item_info">
                    <div class="page-accessories__item_title">{{ $accessory->name }}</div>
                    <div class="page-accessories__item_price">{{ $accessory->price }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function (){

        })
    </script>
@endsection
