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
{{--                Здесь товары из wishlist из LocalStorage     --}}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            let output = ``
            let wishlist = JSON.parse(localStorage.getItem('wishlist'))
            wishlist.forEach(item => {
                output +=  `
                <div class="mini-product">
                    <input type="hidden" name="product_id" value="${ item.id }">
                    <input type="hidden" name="product_hash" value="${ item.product_hash }">
                    <div class="mini-product__top">
{{--                        <div class="mini-product__stock">--}}
{{--                            @if(!empty($product->quantity))--}}
{{--                {{ $product->quantity }} шт.--}}
{{--                            @else--}}
{{--                Нет в наличии--}}
{{--@endif--}}
{{--                </div>--}}
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
                <img src="${ item.product_img }" alt="">
                    </div>

                <a href="/product/${item.product_hash}" class="mini-product__title">${ item.product_title }</a>


                <div class="mini-product__rating">
                    <div class="mini-product__rating_icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="mini-product__rating_text">4.7</span>
                </div>
                <div class="mini-product__price">


                        <div class="mini-product__price_main">
                            <span class="mini-product__price_old">${ item.product_price } BYN</span>
                                <span class="mini-product__price_current">${ item.product_price-(item.product_price*item.product_sale/100) } BYN</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count">-${ item.product_sale }%</div>
                            </div>


                    </div>
{{--                    @if(!empty($product->quantity))--}}
{{--                <div class="mini-product__buy">--}}
{{--                    <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                </div>--}}
{{--@else--}}
{{--                <div class="mini-product__not-buy">--}}
{{--                    <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                </div>--}}
{{--@endif--}}

                </div>
                `
            })
            $('.page-likes__items').html(output)

            let cart = JSON.parse(localStorage.getItem('cart')) || []
            let compare = JSON.parse(localStorage.getItem('compare')) || []

// Для всех товаров в корзине добавляем класс active
            $('.mini-product').each(function (){
                let id = $(this).find('input[name="product_id"]').val()
                if(wishlist && wishlist.filter(item => item.product_id == id).length){
                    $(this).find('.mini-product__like').addClass('active')
                }
                if(cart && cart.filter(item => item.product_id == id).length){
                    $(this).find('.mini-product__buy').addClass('active')
                }
                if(compare && compare.filter(item => item.product_id == id).length){
                    $(this).find('.mini-product__compare').addClass('active')
                }
            })

            $('.mini-product__buy').on('click', function (){
                window.miniProductBuyHandler($(this))
            })

            $('.mini-product__like').on('click', function (){
                window.miniProductLikeHandler($(this))
            })

        })
    </script>

@endsection

