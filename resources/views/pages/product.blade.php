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
                    <a href="" class="breadcrumbs__el">
                        {{ $category->title }}
                    </a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__el">{{ $product->title }}</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1 class="page-title">{{ $product->title }}</h1>
    </div>


    <div class="page-product">
        <div class="page-product-wrap">
            <div class="container">
                <div class="page-product-gallery">
                    <div class="page-product-gallery__thumbs">
                        <div class="page-product-gallery__thumbs__item active">
                            <img src="{{ asset('images/products/product1.jpg') }}" alt="">
                        </div>
                        <div class="page-product-gallery__thumbs__item">
                            <img src="{{ asset('images/products/product1.jpg') }}" alt="">
                        </div>
                        <div class="page-product-gallery__thumbs__item">
                            <img src="{{ asset('images/products/product1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="page-product-gallery__main">
                            <img src="{{ asset('images/products/product1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="page-product-main">
                    <div class="page-product-main-top">
                        <div class="page-product-main-top__reviews">
                            <div class="page-product-main-top__rating">
                                <div class="page-product-main-top__rating_icon">
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <span class="page-product-main-top__rating_text">
                                4.7
                            </span>
                            </div>
                            <div class="page-product-main-top__link">12 отзывов</div>
                        </div>
                        <div class="page-product-main-top__actions">
                            <div class=page-product-main-top__actions_compare">
                                <i class="fa-solid fa-equals"></i>
                            </div>
                            <div class="page-product-main-top__actions_like">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="page-product-main-options">
                        <span class="page-product-main-options__title">Цвет</span>
                        <div class="page-product-main-options__items">
                            <div class="page-product-main-options__item active">
                                <img src="{{ asset('images/wood/1.png') }}" alt="">
                            </div>
                            <div class="page-product-main-options__item">
                                <img src="{{ asset('images/wood/2.png') }}" alt="">
                            </div>
                            <div class="page-product-main-options__item">
                                <img src="{{ asset('images/wood/3.png') }}" alt="">
                            </div>
                            <div class="page-product-main-options__item">
                                <img src="{{ asset('images/wood/4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="page-product-main-dop">
                        <span class="page-product-main-dop__title">Аксессуары</span>
                    </div>
                    <div class="page-product-main-action">
                        <div class="page-product-main-action__price">
                            <div class="page-product-main-action__price_main">
                                <span class="page-product-main-action__price_old">54000</span>
                                <span class="page-product-main-action__price_current">34000</span>
                            </div>
                            <div class="page-product-main-action__price_sale">
                                <div class="page-product-main-action__price_sale-count">-10%</div>
                            </div>
                        </div>
                        <div class="page-product-main-action__wrap">
                            <div class="page-product-main-action__count">
                                <span class="page-product-main-action__count_minus">-</span>
                                <input type="text" name="count" value="1">
                                <span class="page-product-main-action__count_plus">+</span>
                            </div>
                            <button class="page-product-main-action__buy">
                                <div class="page-product-main-action__buy_icon"><i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <span class="page-product-main-action__buy_text">В корзину</span>
                            </button>
                            <a href="" class="page-product-main-action__fast-buy">Купить в 1 клик</a>
                        </div>
                    </div>
                    <div class="page-product-main-bottom">
                        <span class="page-product-main-bottom__title">Способы получения</span>
                        <div class="page-product-main-bottom__items">
                            <span class="page-product-main-bottom__item"><a href="">Самовывоз</a> через 30 мин, бесплатно</span>
                            <span class="page-product-main-bottom__item"><a
                                    href="">Доставка</a> в течении 1-3 дней</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <div class="page-product-info">
        <div class="container">
            <div class="page-product-info__tabs">
                <a href="" class="page-product-info__tabs_item">Описание товара</a>
                <a href="" class="page-product-info__tabs_item">Отзывы о товаре</a>
                <a href="" class="page-product-info__tabs_item">Доставка</a>
                <a href="" class="page-product-info__tabs_item">Сборка</a>
                <a href="" class="page-product-info__tabs_item">Оплата</a>
                <a href="" class="page-product-info__tabs_item">Гарантия</a>
            </div>
            <div class="page-product-info__cont">
                <p>Описание бла бла бла</p>
            </div>
        </div>
    </div>

    <div class="ms-tags">
        <div class="container">
            <a href="" class="ms-tags__item">C ящиками</a>
            <a href="" class="ms-tags__item">Длинные</a>
            <a href="" class="ms-tags__item">Модульные</a>
            <a href="" class="ms-tags__item">C зеркалом</a>
            <a href="" class="ms-tags__item">Лсд</a>
        </div>
    </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function (){

        })
    </script>
@endsection
