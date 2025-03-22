@extends('layouts.main')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__el">
                        <i class="fa-solid fa-house"></i>
                        Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__el">{{ $data['category']->title }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">{{ $data['category']->title }}</h1>
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


    <div class="page-category">
        <div class="container">
            <form class="pc-filter">
                <div class="pc-filter__top">
                    <div class="pc-filter__title">Фильтр</div>
                    <div class="pc-filter__icon">
                        <i class="fa-solid fa-filter"></i>
                    </div>
                </div>
                <div class="pc-filter-price">
                    <div class="pc-filter-price__inputs">
                        @if(isset($data['price_from']) && isset($data['price_to']))
                        <input type="text" id="filter-price-slider-from" class="pc-filter-price__input"
                               name="price_from" placeholder="от 0" value="{{ $data['price_from'] }}">
                        <input type="text" id="filter-price-slider-to" class="pc-filter-price__input" name="price_to"
                               placeholder="до 9999" value="{{ $data['price_to'] }}">
                        @else
                            <input type="text" id="filter-price-slider-from" class="pc-filter-price__input"
                                   name="price_from" placeholder="от 0">
                            <input type="text" id="filter-price-slider-to" class="pc-filter-price__input" name="price_to"
                                   placeholder="до 9999">
                        @endif
                    </div>
                    <div id="filter-price-slider" class="pc-filter-price__slider"></div>
                </div>

                @foreach($data['filters'] as $key => $filter)
                <div class="pc-filter__item">
                    <div class="pc-filter__item_top">
                        <span class="pc-filter__item_title">{{ $key }}</span>
                        <div class="pc-filter__item_icon">
                                <i class="fa-solid fa-angle-up"></i>
                            </div>
                    </div>
                    <div class="pc-filter__item_cont">
                        @foreach($filter as $f)
                        <label class="pc-filter-checkbox">
                            <input type="checkbox" name="dsa" class="pc-filter-checkbox__checkbox">
                            <div class="pc-filter-checkbox__box"></div>
                            <span class="pc-filter-checkbox__value">{{$f['title']}}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
                @endforeach


                <div class="pc-filter__action">
                    <button class="pc-filter__btn">Применить</button>
                    <a href="{{ route('category', $data['category']->hash) }}" class="pc-filter__reset">Сбросить</a>
                </div>

            </form>

            <div class="page-category__content">
                <div class="page-category__sort">
                    <div class="pc-select">
                        <span class="pc-selector__title">Сортировка:</span>
                        <span class="pc-selector__val">По умолчанию</span>
                    </div>
                    <div class="pc-view">

                    </div>
                </div>
                <div class="page-category__products">

                    @foreach($data['products'] as $product)
                        <div class="mini-product">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_hash" value="{{ $product->hash }}">
                            <div class="mini-product__top">
                                <div class="mini-product__stock">{{ $product->quantity }} шт.</div>
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
                            <a href="{{ route('product', $product->hash) }}" class="mini-product__title">{{ $product->title }}</a>
                            <div class="mini-product__rating">
                                <div class="mini-product__rating_icon">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="mini-product__rating_text">4.7</span>
                            </div>
                            <div class="mini-product__price">
                                <div class="mini-product__price_main">
                                    <span class="mini-product__price_old">459 BYN</span>
                                    <span class="mini-product__price_current">{{ $product->price }} BYN</span>
                                </div>
                                <div class="mini-product__price_sale">
                                    <div class="mini-product__price_sale-count">-10%</div>
                                </div>
                            </div>
                            <div class="mini-product__buy">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>




@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function (){
            $("#filter-price-slider").slider({
                range: true,
                min: 0,
                max: 9999,
                values: [0, 9999],
                slide: function (event, ui) {
                    $("#filter-price-slider-from").val(ui.values[0]);
                    $("#filter-price-slider-to").val(ui.values[1]);
                }
            });

            //добавление товара в локалсторэдж
            $('.mini-product__buy').on('click', function () {

                let id = $(this).parents('.mini-product').find('input[name="product_id"]').val();
                let title = $(this).parents('.mini-product').find('.mini-product__title').text().trim();
                let price = $(this).parents('.mini-product').find('.mini-product__price_current').text().trim().replace(' BYN', '');
                let img_path = $(this).parents('.mini-product').find('.mini-product__img img').attr('src');
                let product_hash = $('input[name="product_hash"]').val();

                let product = {
                    product_id: id,
                    product_title: title,
                    count: 1,
                    product_price: price,
                    product_img: img_path,
                    product_hash: product_hash,
                    product_options: [],
                };

                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                let match = false;

                cart.forEach(item => {
                    if (item.product_id == product.product_id) {
                        item.count += 1; // Увеличиваем количество, если товар уже есть в корзине
                        match = true;
                    }
                });

                if (!match) {
                    cart.push(product); // Добавляем новый товар, если его еще нет
                }
                $('.ml-action_cart__count').text(cart.length)
                localStorage.setItem('cart', JSON.stringify(cart));
            });
        })
    </script>
@endsection
