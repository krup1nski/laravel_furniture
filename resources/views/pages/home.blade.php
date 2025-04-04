@extends('layouts.main')

@section('content')
    <header class="header">
        <div class="swiper header-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide header-carousel__slide" style="background-image: url('{{ asset('images/banner1.png') }}')">
                    <div class="container">
                        <h3 class="header-carousel__title">Бери больше -<br> плати меньше</h3>
                        <div class="header-carousel__desc">
                            <p>При покупке одного и более изделий скидка на последующие - 20 byn</p>
                        </div>
                        <a href="" class="bnt-border">Подробнее</a>
                    </div>
                </div>


                <div class="swiper-slide header-carousel__slide" style="background-image: url('{{ asset('images/banner2.png') }}')">
                    <div class="container">
                        <h3 class="header-carousel__title">Кровать в <br>скандинавском<br> стиле со скидкой 50%</h3>
                        <div class="header-carousel__desc">
                            <p>До 1 августа</p>
                        </div>
                        <a href="" class="bnt-border">Подробнее</a>
                    </div>
                </div>

            </div>
            <div class="header-carousel-pagination-wrap">
                <div class="container">
                    <div class="header-carousel-pagination"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="categories">
        <div class="container">
            <h2 class="categories__title">Более 30 000 позиций ждут вас</h2>
            <span class="categories__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            <div class="categories__items">
                @foreach($categories as $category)
                    @if(empty($category->top))
                    <div class="categories__item">
                        <div class="categories__item_icon">
                            <img src="{{ $category->icon }}" alt="">
                        </div>
                        <h4 class="categories__item_title">
                            <a href="{{route('category',$category->hash)}}">{{$category->title}}</a>
                        </h4>
                        <div class="categories__item_count">{{$category->products_count}} шт.</div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="adv">
        <div class="container">
            <div class="adv__item">
                <div class="adv__item_icon">
                    <img src="{{ asset('images/discount.svg') }}" alt="">
                </div>
                <span class="adv__item_title">Выгодные акции и честные скидки</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">
                    <img src="{{ asset('images/certificate.svg') }}" alt="">
                </div>
                <span class="adv__item_title">Сертифицированные продукции</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">
                    <img src="{{ asset('images/sell-product.svg') }}" alt="">
                </div>
                <span class="adv__item_title">Широкий ассортимент товаров</span>
            </div>
            <div class="adv__item">
                <div class="adv__item_icon">
                    <img src="{{ asset('images/delivery.svg') }}" alt="">
                </div>
                <span class="adv__item_title">Быстрая и удобная доставка в срок</span>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="container">
            <h3 class="sale__title">Специальные предложения</h3>
            <div class="swiper sale-carousel">
                <div class="swiper-wrapper">
                    @foreach($sales as $product)
                        <div class="swiper-slide mini-product">
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
    </section>

    <section class="info">
        <div class="container">
            <div class="info_desc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                <a href="" class="info__link">Подробнее</a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const header_carousel = new Swiper('.header-carousel', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
        });


        const sale_carousel = new Swiper('.sale-carousel', {
            loop: true,
            slidesPerView: 3,
            spaceBetween:0,
            pagination: {
                el: '.swiper-wrapper-pagination',
            },
        });
    </script>
@endsection
