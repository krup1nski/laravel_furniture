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
                    <span class="breadcrumbs__el">Избранное</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-likes">
        <div class="container">
            <div class="page-top">
                <h1 class="page-title">Избранное</h1>
                <a href="" class="likes-clear">Очистить</a>
            </div>

            <div class="page-likes__items">

                @foreach($products as $product)
                <div class="mini-product">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="product_hash" value="{{ $product->hash }}">
                    <div class="mini-product__top">
                        <div class="mini-product__stock">
                            @if(!empty($product->quantity))
                                {{ $product->quantity }} шт.
                            @else
                                Нет в наличии
                            @endif
                        </div>
                        <div class="mini-product__action">
                            <div class="mini-product__compare">
                                <i class="fa-solid fa-equals"></i>
                            </div>
                            <div class="mini-product__like">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mini-product__img">
                        {{--                                <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
                        <img src="{{ $product->image_path }}" alt="">
                    </div>
                    @if(!empty($product->quantity))
                        <a href="{{ route('product', $product->hash) }}" class="mini-product__title">{{ $product->title }}</a>
                    @else
                        <a href="" class="mini-product__title_out">{{ $product->title }}</a>
                    @endif

                    <div class="mini-product__rating">
                        <div class="mini-product__rating_icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="mini-product__rating_text">4.7</span>
                    </div>
                    <div class="mini-product__price">


                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">{{ $product->price }} BYN</span>
                                <span class="mini-product__price_current">{{ $product->price-($product->price*$product->sale/100) }} BYN</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count">-{{ $product->sale }}%</div>
                            </div>


                    </div>
                    @if(!empty($product->quantity))
                        <div class="mini-product__buy">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    @else
                        <div class="mini-product__not-buy">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    @endif

                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

