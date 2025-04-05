@extends('layouts.main')

@section('content')

    <div class="notifications">

    </div>

    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
{{--                @dd($bradcrumbs)--}}

                @foreach($bradcrumbs as $br)
                    <li class="breadcrumbs__item">
                        @if($loop->last)
                            <span class="breadcrumbs__el">{{ $data['category']->title }}</span>
                        @else
                            <a href="{{ $br['href'] }}" class="breadcrumbs__el">
                                @if($br['is_home'])
                                    <i class="fa-solid fa-house"></i>
                                @endif
                                {{ $br['title'] }}</a>
                        @endif
                    </li>
                @endforeach

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
                <input type="hidden" name="order_by" value="">
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
                               placeholder="до 1999" value="{{ $data['price_to'] }}">
                        @else
                            <input type="text" id="filter-price-slider-from" class="pc-filter-price__input"
                                   name="price_from" placeholder="от 0">
                            <input type="text" id="filter-price-slider-to" class="pc-filter-price__input" name="price_to"
                                   placeholder="до 1999">
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
                            <input type="checkbox" class="pc-filter-checkbox__checkbox" name="filters[{{$f->id }}]" @if(in_array($f->id,  $data['select_filters'])) checked @endif>
                            <div class="pc-filter-checkbox__box">
                                <i class="fa-solid fa-check"></i>
                            </div>
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
            <div class="page-category-main">
                <div class="page-category__content">
                    <div class="page-category__sort">
                        <div class="pc-select">
                            <span class="pc-selector__title">Сортировка:</span>
                            <select name="order_by" id="" class="pc-selector__val">
                                <option value="">По умолчанию</option>
                                <option value="price_increase" @if($data['order_by'] == 'price_increase') selected @endif>По возрастанию</option>
                                <option value="price_decrease" @if($data['order_by'] == 'price_decrease') selected @endif>По убыванию</option>
                            </select>
                        </div>
                        <div class="pc-view">

                        </div>
                    </div>
                    <div class="page-category__products">



                        @foreach($data['products'] as $product)
{{--                            @dd($product)--}}
                            <div class="mini-product">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="product_title" value="{{ $product->title }}">
                                <input type="hidden" name="product_hash" value="{{ $product->hash }}">
                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                <input type="hidden" name="product_sale" value="{{ $product->sale }}">
                                <input type="hidden" name="product_img" value="{{ $product->image_path }}">


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

                                    @if(!empty($product->sale))
                                        <div class="mini-product__price_main">
                                            <span class="mini-product__price_old">{{ $product->price }} BYN</span>
                                            <span class="mini-product__price_current">{{ $product->price-($product->price*$product->sale/100) }} BYN</span>
                                        </div>
                                        <div class="mini-product__price_sale">
                                            <div class="mini-product__price_sale-count">-{{ $product->sale }}%</div>
                                        </div>
                                    @else
                                        <div class="mini-product__price_main">
                                            <span class="mini-product__price_old"></span>
                                            <span class="mini-product__price_current">{{ $product->price }} BYN</span>
                                        </div>
                                    @endif



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
                <div class="page-category__pagination">
                    {{ $data['products']->links() }}
                </div>
            </div>
        </div>

    </div>




@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function (){

            window.addClassElsMiniProduct()

            // при выборе варианта сортировки добавляем его в форму
            $('select[name="order_by"]').on('change', function (){
                $('.pc-filter input[name="order_by"]').val($(this).val())
            })


            // поле с выбором цены и ползунки
            $("#filter-price-slider").slider({
                range: true,
                min: 0,
                max: 1999,
                // values: [0, 9999],
                values: ['{{ $price_from ?? 0 }}','{{ $price_to ?? 1999 }}'],
                slide: function (event, ui) {
                    $("#filter-price-slider-from").val(ui.values[0]);
                    $("#filter-price-slider-to").val(ui.values[1]);
                }
            });

            //добавление товара в локалсторэдж
            $('.mini-product__buy').on('click', function () {
                window.miniProductBuyHandler($(this))
            })


            $('.mini-product__like').on('click', function (){
                window.miniProductLikeHandler($(this))
            })
        })
    </script>
@endsection
