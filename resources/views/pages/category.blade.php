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
                    <span  class="breadcrumbs__el">Комоды</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Комоды и тумбы</h1>
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
            <div class="pc-filter">
                <div class="pc-filter__top">
                    <div class="pc-filter__title">Фильтр</div>
                    <div class="pc-filter__icon">
                        <i class="fa-solid fa-filter"></i>
                    </div>
                </div>
                <div class="pc-filter-price">
                    <div class="pc-filter-price_inputs">
                        <input type="text" id="filter-price-slider-from" class="pc-filter-price__input" name="price_from" placeholder="от 100">
                        <input type="text" id="filter-price-slider-to" class="pc-filter-price__input" name="price_to" placeholder="до 3500">
                    </div>
                    <div id="filter-price-slider" class="pc-filter-price__slider"></div>
                    <div class="pc-filter__item">
                        <div class="pc-filter__item_top">
                            <span class="pc-filter__item_title">Конструкция</span>
                            <span class="pc-filter__item_icon">
                                <i class="fa-solid fa-angle-up"></i>
                            </span>
                        </div>
                        <div class="pc-filter__item_cont">
                            <label class="pc-filter-checkbox">
                                <input type="checkbox" name="dsa" class="pc-filter-checkbox__checkbox">
                                <span class="pc-filter-checkbox__box"></span>
                                <span class="pc-filter-checkbox__value">С ящиком</span>
                            </label>
                            <label class="pc-filter-checkbox">
                                <input type="checkbox" name="dsa" class="pc-filter-checkbox__checkbox">
                                <span class="pc-filter-checkbox__box"></span>
                                <span class="pc-filter-checkbox__value">С зеркалом</span>
                            </label>
                            <label class="pc-filter-checkbox">
                                <input type="checkbox" name="dsa" class="pc-filter-checkbox__checkbox">
                                <span class="pc-filter-checkbox__box"></span>
                                <span class="pc-filter-checkbox__value">Угловые</span>
                            </label>

                        </div>
                    </div>
                </div>
            </div>

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
                    <div class="mini-product">
                        <div class="mini-product__top">
                            <div class="mini-product__stock">4 шт.</div>
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
                            <img src="{{ asset('images/komod.jpg') }}" alt="">
                        </div>
                        <a href="" class="mini-product__title">Комод 2</a>
                        <div class="mini-product__rating">
                            <div class="mini-product__rating_icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span class="mini-product__rating_text">4.7</span>
                        </div>
                        <div class="mini-product__price">
                            <div class="mini-product__price_main">
                                <span class="mini-product__price_old">459 BYN</span>
                                <span class="mini-product__price_current">379 BYN</span>
                            </div>
                            <div class="mini-product__price_sale">
                                <div class="mini-product__price_sale-count">-10%</div>
                            </div>
                        </div>
                        <div class="mini-product__buy">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="http://cdn.jsdelivr.net/npm/jquery-ui-slider@1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function (){
            $('#filter-price-slider').slider({
                range: true,
                min: 0,
                max: 9999,
                values: ['1000', '9000'],
                slide: function(event, ui){
                    $('#filter-price-slider-from').val(ui.values[0]);
                    $('#filter-price-slider-to').val(ui.values[1]);
                }
            });
        })
    </script>
@endsection
