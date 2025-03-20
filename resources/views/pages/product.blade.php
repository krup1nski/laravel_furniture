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
                    <a href="{{ route('category',  $product->category->hash) }}" class="breadcrumbs__el">
                        {{ $product->category->title }}
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
                    @if($product->images->isNotEmpty())
                    <div class="page-product-gallery__thumbs">
                        <div class="page-product-gallery__thumbs__item active">
                            <img src="{{ asset($product->image_path) }}" alt="">
                        </div>
                        @foreach($product->images as $img)
                        <div class="page-product-gallery__thumbs__item">
                            <img src="{{ asset($img->path) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                    @endif
                    <div class="page-product-gallery__main">
                            <img src="{{ asset($product->image_path) }}" alt="">
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

                    @foreach($product->options->groupBy('option_group_id') as $key => $group)
                    <div class="page-product-main-options">
                        <span class="page-product-main-options__title">{{ $grouppp->where('id', $key)->first()->title }}</span>
                        <div class="page-product-main-options__items">
                            @foreach($group as $option)
                            <div class="page-product-main-options__item active">
                                <img src="{{ asset($option->image) }}" alt="{{ $option->title }}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach


                    <div class="page-product-main-dop">
                        <span class="page-product-main-dop__title">Аксессуары</span>
                    </div>
                    <div class="page-product-main-action">

                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="title" value="{{ $product->title }}">
                        <input type="hidden" name="product_price" value="{{ $product->price }}">
                        <input type="hidden" name="product_img" value="{{ $product->image_path }}">
                        <input type="hidden" name="product_hash" value="{{ $product->hash }}">


                        <div class="page-product-main-action__price">
                            <div class="page-product-main-action__price_main">
                                <span class="page-product-main-action__price_old">54000</span>
                                <span class="page-product-main-action__price_current">{{ $product->price }}</span>
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
                <a href="" class="page-product-info__tabs_item">Характеристики</a>
                <a href="" class="page-product-info__tabs_item">Гарантия</a>
            </div>
            <div class="page-product-info__cont">
                <p>{{ $product->description }}</p>
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
            // клик на картинки сбоку и отобранежение их как главную
            $('.page-product-gallery__thumbs__item').on('click', function (){

                let path = $(this).find('img').attr('src')
                $('.page-product-gallery__main img').attr('src', path)

                $('.page-product-gallery__thumbs__item').removeClass('active')
                $(this).addClass('active')
            })

            // Plus
            $('.page-product-main-action__count_plus').on('click', function (){
                let count = $(this).siblings('input[name="count"]').val();
                $(this).siblings('input[name="count"]').val(Number(count) + 1);
            })
            // Minus
            $('.page-product-main-action__count_minus').on('click', function (){
                let count = $(this).siblings('input[name="count"]').val();
                if(count > 1){
                    $(this).siblings('input[name="count"]').val(Number(count) - 1);
                }
            })
            // In cart
            $('.page-product-main-action__buy').on('click', function (){
                let id = $('input[name="product_id"]').val();
                let title = $('input[name="product_title"]').val();
                let price = $('input[name="product_price"]').val();
                let img_path = $('input[name="product_img"]').val();
                let count = $('input[name="count"]').val();
                let product_hash = $('input[name="product_hash"]').val();

                let product = {
                    product_id: id,
                    product_title: title,
                    count: count,
                    product_price: price,
                    product_img: img_path,
                    product_hash: product_hash,
                };
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                let match = false;

                cart.forEach(item => {
                    if (item.product_id == product.product_id) {
                        item.count = Number(item.count) + Number(product.count); // Увеличиваем количество, если товар уже есть в корзине
                        match = true;
                    }
                });

                if (!match) {
                    cart.push(product); // Добавляем новый товар, если его еще нет
                }

                localStorage.setItem('cart', JSON.stringify(cart));

            })
        })
    </script>
@endsection
