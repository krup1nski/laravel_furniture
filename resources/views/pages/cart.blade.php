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
                    <span class="breadcrumbs__el">Оформление заказа</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1 class="page-title">Оформление заказа</h1>

        @foreach($errors->all() as $message)
            <div class="error">{{ $message }}</div>
        @endforeach
    </div>




    <div class="page-cart">

        <form action="{{ route('cart-order') }}" method="POST" class="form-order">
            @csrf
            <input type="hidden" name="cart" value="">
            <input type="hidden" name="promo_code" value="">
            <input type="hidden" name="promo_code_sale" value="">

            <div class="container">
                <div class="page-cart-main">
                    <div class="page-cart-product-list">

                        {{--                    товары в корзине тут    --}}

                    </div>
                    <div class="pcart-main-contact">
                        <span class="pcart-main-contact__title">1.Контактная информация</span>
                        <div class="pcart-main-contact__input-wrap">
                            <input type="text" name="name" placeholder="ФИО" value="{{ old('name') }}" required >
                            <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
                        </div>
                        <div class="pcart-main-contact__input-wrap">
                            <input type="text" name="phone" placeholder="Телефон" value="{{ old('phone') }}" required>
                        </div>
                    </div>
                    <div class="pcart-main-delivery">
                        <div class="pcart-main-delivery__title">2.Способ получения заказа</div>
                        <div class="pcart-main-delivery__items">

                            @foreach($deliveries as $delivery)
                                <label class="pcart-main-delivery__item">
                                    <input type="radio" name="delivery" value="{{ $delivery->id }}">
                                    <div class="pcart-main-delivery__item_box">

                                    </div>
                                    <div class="pcart-main-delivery__item_info">
                                        <span class="pcart-main-delivery__item_title">{{ $delivery->title }}</span>
                                        <span class="pcart-main-delivery__item_desc">{{ $delivery->description }}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="pcart-main-comment">
                        <span class="pcart-main-comment__title">3.Комментарий</span>
                        <textarea name="comment" id="" cols="30" rows="10" placeholder="Комментарий к заказу"
                                  class="pcart-main-comment__textarea"></textarea>
                    </div>
                </div>
                <div class="pcart-main-order">
                    <div class="pcart-main-order-promo">
                        <input type="text" name="code" class="pcart-main-order-promo__input"
                               placeholder="Промокод">
                        <button class="pcart-main-order-promo__btn">Применить</button>
                    </div>
                    <span class="pcart-main-order-promo__text"></span>
                    <span class="pcart-main-order__title">Ваш заказ</span>

                    <div class="pcart-main-order__info">
                        <div class="pcart-main-order__info-item result-product-count">
                            <div class="pcart-main-order__info-item_title">Всего товаров:</div>
                            <div class="pcart-main-order__info-item_val"><span class="num">0</span> шт</div>
                        </div>
                        <div class="pcart-main-order__info-item result-product-sum">
                            <div class="pcart-main-order__info-item_title">Сумма заказа:</div>
                            <div class="pcart-main-order__info-item_val"><span class="num">0</span> byn</div>
                        </div>
                        <div class="pcart-main-order__info-item result-product-itog">
                            <div class="pcart-main-order__info-item_title">К оплате:</div>
                            <div class="pcart-main-order__info-item_val result"><span class="num">0</span> byn</div>
                        </div>
                        <div class="pcart-main-order__buy-wrap">
                            <button class="pcart-main-order__buy">Оформить заказ</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>




@endsection

@section('scripts')

    <script>
        $(document).ready(function (){

            //promo code
            $('.pcart-main-order-promo__btn').on('click',function (e){
                e.preventDefault()

                let code = $('input.pcart-main-order-promo__input[name="code"]').val()

                $.ajax({
                    url: "{{ route('promo-code') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        code
                    },
                    success: function (response){
                        if(response[0] == 'error'){
                            $('.pcart-main-order-promo__text').text('Промокод недейстрителен')
                        }else{
                            $('.input[name="promo_code"]').val(code)
                            $('.input[name="promo_code_sale"]').val(response[1])
                            $('.pcart-main-order-promo__text').text('Ваша скидка ' + response[1] + '%')
                            let current_price = $('.result-product-itog .pcart-main-order__info-item_val .num').text()
                            $('.result-product-itog .pcart-main-order__info-item_val .num').text(current_price - (current_price * response[1] / 100).toFixed(0))
                        }
                    }
                })
            })

            let calculate_result_sum = function (cart){
                let sale = $('.input[name="promo_code_sale"]').val()
                if(cart != null){
                    let result = 0;
                    cart.forEach(item => {
                        if(item.product_sale){
                            result += (item.product_price - (item.product_price * item.product_sale / 100)).toFixed(0) * item.count;
                        }else{
                            result += item.product_price * item.count;
                        }

                    })
                    if(sale){
                        result = (result - (result * sale / 100)).toFixed(0) * item.count;
                    }
                    return result;
                }
            }

            let cart = JSON.parse(localStorage.getItem('cart'))
            let output = ``
            //отображение продуктов корзины из локалсторэдж
            cart.forEach(item => {

                let options = ``
                if(item.product_options.length){
                    item.product_options.forEach(p_option => {
                        options += `
                        <span>${p_option.option_title}</span>
                    `
                    })

                }
                let accessories = ``
                if(item.accessories.length){
                    item.accessories.forEach(p_accessories => {
                        accessories += `
                            <div class="cart-accessories__item">
                                <div class="cart-accessories__img">
                                    <img src="${p_accessories.image}" alt="">
                                </div>
                                <div class="cart-accessories__info">
                                    <div class="cart-accessories__title">${p_accessories.title}</div>
                                    <div class="cart-accessories__price">${p_accessories.price} byn</div>
                                </div>
                            </div>
                    `
                    })

                }

                let price = ``;

                if(item.product_sale) {
                    price = `
                            <div class="page-cart-product__price_main">
                                <span class="page-cart-product__price_old">${item.product_price} BYN</span>
                                <div class="page-cart-product__price_sale-count">-${item.product_sale}%</div>
                            </div>
                            <span class="page-cart-product__price_current"><span class="price">${(item.product_price - (item.product_price * item.product_sale / 100)).toFixed(0)}</span> BYN</span>
                        `;
                } else {
                    price = `
                            <div class="page-cart-product__price_main">
                                <span class="page-cart-product__price_current"><span class="price">${item.product_price}</span> BYN</span>
                            </div>
                        `;
                }

                output += `
                <div class="page-cart-product-list-item">
                    <div class="page-cart-product-list-item__info_wrap">
                    <input type="hidden" name="product_id" value="${item.product_id}" >
                    <input type="hidden" name="id" value="${item.id}" >
                    <input type="hidden" name="price_result" value="${(item.product_price - (item.product_price * item.product_sale / 100)).toFixed(0)}" >
                        <div class="page-cart-product-list-item__img">
                            <img src="${item.product_img}" alt="">
                        </div>
                        <div class="page-cart-product-list-item__info">
                            <a href="product/${item.product_hash}" class="page-cart-product-list-item__title">${item.product_title}</a>
                            <div class="page-cart-product-list-item_options">${options}</div>
                            <div class="page-cart-product-list-item_accessories cart-accessories">${accessories}
                        </div>
                    </div>
                    <div class="page-cart-product-list-item__count">
                        <span class="page-cart-product-list-item__count_minus">-</span>
                        <input type="text" name="count" value="${item.count}">
                            <span class="page-cart-product-list-item__count_plus">+</span>
                    </div>
                    <div class="page-cart-product-list-item__price">
                        ${price}
                    </div>
                    <div class="page-cart-product-list-item__remove">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                </div>
                `
            })

            $('.page-cart-product-list').html(output)

            // вывод Всего товаров, Сумма заказа, К оплате
            $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length)
            $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
            $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))


            // удаление товара из корзины
            $(document).on('click', '.page-cart-product-list-item__remove', function () {
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="id"]').val();
                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                // Фильтруем, оставляя только те элементы, id которых не совпадает с удаляемым
                cart = cart.filter(item => item.id != id);

                // Удаляем товар из DOM
                $(this).parents('.page-cart-product-list-item').remove();

                // Обновляем информацию на странице
                $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length);
                $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart));
                $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart));
                $('.ml-action_cart__count').text(cart.length);

                // Обновляем localStorage
                localStorage.setItem('cart', JSON.stringify(cart));

            });



            // увеличение кол-во продукта
            $(document).on('click', '.page-cart-product-list-item__count_plus', function () {
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="id"]').val()
                let cart = JSON.parse(localStorage.getItem('cart'))
                let count = $(this).siblings('input[name="count"]').val();

                $(this).siblings('input[name="count"]').val(Number(count) + 1);
                cart.map(item => {
                    if(item.id == id){
                        return item.count += 1
                    }
                })
                $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length)
                $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                localStorage.setItem('cart', JSON.stringify(cart))
            });


            // сокращение кол-во продукта
            $(document).on('click', '.page-cart-product-list-item__count_minus', function () {
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="id"]').val()
                let cart = JSON.parse(localStorage.getItem('cart'))
                let count = $(this).siblings('input[name="count"]').val();

                if (count > 1) {
                    $(this).siblings('input[name="count"]').val(Number(count) - 1)
                    cart.map(item => {
                        if(item.id == id){
                            return item.count -= 1
                        }
                    })
                    $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length)
                    $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                    $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                    localStorage.setItem('cart', JSON.stringify(cart))
                }
            });

            {{--$('.pcart-main-order__buy').on('click', function (e){--}}
            {{--    e.preventDefault()--}}
            {{--    let name = $('input[name="name"]').val()--}}
            {{--    let phone = $('input[name="phone"]').val()--}}
            {{--    let email = $('input[name="email"]').val()--}}
            {{--    let comment = $('textarea[name="comment"]').val()--}}

            {{--    $.ajax({--}}
            {{--        url: "{{ route('cart-order') }}",--}}
            {{--        type: "POST",--}}
            {{--        data: {--}}
            {{--            "_token": "{{ csrf_token() }}",--}}
            {{--            cart: JSON.parse(localStorage.getItem('cart')), name, phone, email, comment--}}
            {{--        },--}}
            {{--        success:function (response){--}}
            {{--            if(response){//очищаем корзину + редирект--}}
            {{--                window.location.replace("/cart/thanks")--}}
            {{--                localStorage.setItem('cart', null)--}}
            {{--            }--}}
            {{--        }--}}
            {{--    })--}}
            {{--})--}}

            $('.form-order').submit(function (e){
                e.preventDefault()
                $(this).find('input[name="cart"]').val(localStorage.getItem('cart'))
                $(this).unbind('submit').submit()
            })

        })
    </script>
@endsection
