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

                    @foreach($product->options->groupBy('group_id') as $key => $group)
                    <div class="page-product-main-options">
                        <div class="page-product-main-options-item">
                            <span class="page-product-main-options__title">{{ $options_group->where('id', $key)->first()->title }}</span>
                            <div class="page-product-main-options__items">
                                @foreach($group as $option)
                                <div class="page-product-main-options__item  @if(!empty($option->image_path)) with_img @endif" data-option-group-id="{{ $key }}" data-option-id="{{ $option->id }}" data-option-title="{{ $option->title }}">
                                    @if(!empty($option->image_path))
                                    <img src="{{ asset($option->image_path) }}" alt="{{ $option->title }}">
                                    @else
                                        <span class="without_img">{{ $option->title }}</span>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="page-product-main-dop">
                        <span class="page-product-main-dop__title">Аксессуары</span>
                        <div class="swiper page-product-main-dop__items">
                            <div class="swiper-wrapper">
                                @foreach($product->accessories as $accessory)
                                    <div class="swiper-slide page-product-main-dop__item" data-accessory-id="{{ $accessory->id }}">
                                        <div class="page-product-main-dop__img">
                                            <img src="{{ $accessory->image }}" alt="">
                                        </div>
                                        <div class="page-product-main-dop__info">
                                            <span class="page-product-main-dop_item_title">{{ $accessory->name }}</span>
                                            <div class="page-product-main-dop__action">
                                                <span
                                                    class="page-product-main-dop__price"><span>{{ $accessory->price }}</span> byn</span>
                                                <div class="page-product-main-dop__add">+</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="page-product-main-action">

                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_title" value="{{ $product->title }}">
                        <input type="hidden" name="product_price" value="{{ $product->price }}">
                        <input type="hidden" name="product_img" value="{{ $product->image_path }}">
                        <input type="hidden" name="product_hash" value="{{ $product->hash }}">
                        <input type="hidden" name="with_options" value="{{ $product->options->isNotEmpty() ? 1 : 0 }}">


                        <div class="page-product-main-action__price">
                            @if($product->sale)
                            <div class="page-product-main-action__price_main">
                                <span class="page-product-main-action__price_old">{{ $product->price }}</span>
                                <span class="page-product-main-action__price_current">{{ $product->price-($product->price*$product->sale/100) }}</span>
                            </div>
                            <div class="page-product-main-action__price_sale">
                                <div class="page-product-main-action__price_sale-count">-{{ $product->sale }}%</div>
                            </div>
                            @else
                                <div class="page-product-main-action__price_main">
                                    <span class="page-product-main-action__price_old"></span>
                                    <span class="page-product-main-action__price_current">{{ $product->price }}</span>
                                </div>
                            @endif
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
                <a href="" class="page-product-info__tabs_item active" data-tab="1">Описание товара</a>
                <a href="" class="page-product-info__tabs_item" data-tab="2">Характеристики</a>
                <a href="" class="page-product-info__tabs_item" data-tab="3">Отзывы о товаре</a>
                <a href="" class="page-product-info__tabs_item" data-tab="4">Гарантия</a>
            </div>
            <div class="page-product-info__content">
                <div class="page-product-info__content_tab active" data-tab="1">{{ $product->description }}</div>
                <div class="page-product-info__content_tab" data-tab="2">
                    <div class="page-product-filters">
                    @foreach($product->filters as $filter)
                        <div class="page-product-filters__item">
                            <span class="key">{{ $filters_group->find($filter->group_id)->title }}</span>
                            <span class="value">{{ $filter->title}}</span>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="page-product-info__content_tab" data-tab="3">Отзывы о товаре</div>
                <div class="page-product-info__content_tab" data-tab="4">Гарантия</div>
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

@section('scripts')
    <script>
        $(document).ready(function (){

            $('.page-product-main-dop__add').on('click', function (){
                $(this).parents('.page-product-main-dop__item').toggleClass('active_add')
            })

            //Описание-Характеристики-Отзывы-Гарантия
            $('.page-product-info__tabs_item').on('click', function (e){
                e.preventDefault()
                $('.page-product-info__tabs_item').removeClass('active')
                $('.page-product-info__content_tab').removeClass('active')
                $(this).addClass('active')
                $('.page-product-info__content_tab[data-tab="' + $(this).attr('data-tab') + '"]').addClass('active')
            })

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

            //выбор цвета

            $('.page-product-main-options__item').on('click', function (){
                if($(this).hasClass('active')){
                    $(this).removeClass('active')
                }else{
                    $(this).parents('.page-product-main-options__items').find('.page-product-main-options__item').removeClass('active')
                    $(this).addClass('active')
                }

            })

            // In cart
            $('.page-product-main-action__buy').on('click', function () {
                let id = $('input[name="product_id"]').val();
                let title = $('input[name="product_title"]').val();
                let price = $('input[name="product_price"]').val();
                let img_path = $('input[name="product_img"]').val();
                let count = $('input[name="count"]').val();
                let product_hash = $('input[name="product_hash"]').val();
                let with_options = $('input[name="with_options"]').val();

                let options = [];
                if (with_options) {
                    $('.page-product-main-options .page-product-main-options-item').each(function () {
                        let activeOption = $(this).find('.page-product-main-options__item.active');
                        if (activeOption.length) {
                            options.push({
                                option_group_id: activeOption.attr('data-option-group-id'),
                                option_id: activeOption.attr('data-option-id'),
                                option_title: activeOption.attr('data-option-title'),
                            });
                        }
                    });
                }

                let accessories = [];
                $('.page-product-main-dop__item.active_add').each(function () {
                    accessories.push({
                        id: $(this).attr('data-accessory-id'),
                        title: $(this).find('.page-product-main-dop_item_title').text(),
                        price: $(this).find('.page-product-main-dop__price span').text(),
                        image: $(this).find('.page-product-main-dop__img img').attr('src'),
                    });
                });

                let product = {
                    id: Number(id + options.map(opt => opt.option_group_id + opt.option_id).join('')),
                    product_id: id,
                    product_title: title,
                    count: Number(count),
                    product_price: price,
                    product_img: img_path,
                    product_hash: product_hash,
                    product_options: options,
                    accessories: accessories,
                };

                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                let match = false;

                cart.forEach(cart_item => {
                    if (cart_item.product_id == product.product_id) {
                        let cart_option_ids = cart_item.product_options.map(opt => opt.option_id).sort().join(',');
                        let product_option_ids = product.product_options.map(opt => opt.option_id).sort().join(',');

                        if (cart_option_ids === product_option_ids) {
                            cart_item.count += product.count;
                            match = true;
                        }
                    }
                });

                if (!match) {
                    cart.push(product);
                }

                $('.ml-action_cart__count').text(cart.length);
                localStorage.setItem('cart', JSON.stringify(cart));
            });

        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const acc_carousel = new Swiper('.page-product-main-dop__items', {
            loop: false,
            slidesPerView: 3,
            spaceBetween:0,
            pagination: {
                el: '.swiper-wrapper-pagination',
            },
        });
    </script>


@endsection
