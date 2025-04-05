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
                <!-- Здесь товары из wishlist из LocalStorage -->
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            let output = ``;
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            if(wishlist.length === 0) {
                output = `<div class="empty-wishlist">В избранном пока нет товаров</div>`;
            } else {
                wishlist.forEach(item => {
                    let price = ``;
                    if(item.product_sale) {
                        price = `
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">${item.product_price} BYN</span>
                                <span class="mini-product__price_current">${(item.product_price - (item.product_price * item.product_sale / 100)).toFixed(2)} BYN</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count">-${item.product_sale}%</div>
                            </div>
                        `;
                    } else {
                        price = `
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_current">${item.product_price} BYN</span>
                            </div>
                        `;
                    }

                    output += `
                    <div class="mini-product">
                        <input type="hidden" name="product_id" value="${item.id}">
                        <input type="hidden" name="product_hash" value="${item.product_hash}">
                        <div class="mini-product__top">
                            <div class="mini-product__stock">
                                ${item.quantity ? item.quantity + ' шт.' : 'Нет в наличии'}
                            </div>
                            <div class="mini-product__action">
                                <div class="mini-product__compare">
                                    <i class="fa-solid fa-equals"></i>
                                </div>
                                <div class="mini-product__like active">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mini-product__img">
                            <img src="${item.product_img}" alt="${item.product_title}">
                        </div>
                        <a href="/product/${item.product_hash}" class="mini-product__title">${item.product_title}</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="mini-product__rating_text">4.7</span>
                        </div>
                        <div class="mini-product__price">
                            ${price}
                        </div>

                    </div>
                    `;
                });
            }

            $('.page-likes__items').html(output);

            // Инициализация обработчиков событий
            window.addClassElsMiniProduct && window.addClassElsMiniProduct();


            $('.mini-product__like').on('click', function(){
                window.miniProductLikeHandler && window.miniProductLikeHandler($(this));
            });

            $('.mini-product__compare').on('click', function(){
                window.miniProductCompareHandler && window.miniProductCompareHandler($(this));
            });

            $('.likes-clear').on('click', function(e) {
                e.preventDefault();
                localStorage.removeItem('wishlist');
                $('.page-likes__items').html('<div class="empty-wishlist">В избранном пока нет товаров</div>');
            });
        });
    </script>
@endsection
