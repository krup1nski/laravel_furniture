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
    </div>




    <div class="page-cart">
        <div class="container">
            <div class="page-cart-main">
                <div class="page-cart-product-list">

{{--                    товары в корзине тут    --}}

                </div>
                <div class="pcart-main-contact">
                    <span class="pcart-main-contact__title">1.Контактная информация</span>
                    <div class="pcart-main-contact__input-wrap">
                        <input type="text" name="name" placeholder="ФИО">
                        <input type="text" name="emain" placeholder="E-mail">
                    </div>
                    <div class="pcart-main-contact__input-wrap">
                        <input type="text" name="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="pcart-main-delivery">
                    <div class="pcart-main-delivery__title">2.Способ получения заказа</div>
                    <div class="pcart-main-delivery__items">
                        <label class="pcart-main-delivery__item">
                            <input type="radio" name="1">
                            <div class="pcart-main-delivery__item_box">

                            </div>
                            <div class="pcart-main-delivery__item_info">
                                <span class="pcart-main-delivery__item_title">Доставка в пункт выдачи</span>
                                <span class="pcart-main-delivery__item_desc">Срок и стоимость уточняйте у продавца</span>
                            </div>
                        </label>

                        <label class="pcart-main-delivery__item">
                            <input type="radio" name="1">
                            <div class="pcart-main-delivery__item_box">

                            </div>
                            <div class="pcart-main-delivery__item_info">
                                <span class="pcart-main-delivery__item_title">Самомывоз</span>
                                <span class="pcart-main-delivery__item_desc">Доступен в городе Минск, график работы уточняйте у продавца</span>
                            </div>
                        </label>

                    </div>
                </div>
                <div class="pcart-main-comment">
                    <span class="pcart-main-comment__title">3.Комментарий</span>
                    <textarea name="comment" id="" cols="30" rows="10" placeholder="Комментарий к заказу" class="pcart-main-comment__textarea"></textarea>
                </div>
            </div>
            <div class="pcart-main-order">
                <div class="pcart-main-order-promo">
                    <input type="text" name="promocode" class="pcart-main-order-promo__input" placeholder="Промокод">
                    <button class="pcart-main-order-promo__btn">Применить</button>
                </div>
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
    </div>




@endsection

@section('scripts')

    <script>
        $(document).ready(function (){

            let calculate_result_sum = function (cart){
                if(cart != null){
                    let result = 0;
                    cart.forEach(item => {
                        result += item.product_price * item.count;
                    })
                    return result;
                }
            }

            let cart = JSON.parse(localStorage.getItem('cart'))
            let output = ``
            //отображение продуктов корзины из локалсторэдж
            cart.forEach(item => {

                let options = ``
                if(item.product_options.option_title){
                    options += `
                        <span>${item.product_options.option_title}</span>
                    `
                }

                output += `
                <div class="page-cart-product-list-item">
                    <input type="hidden" name="product_id" value="${item.product_id}" >
                    <div class="page-cart-product-list-item__info_wrap">
                        <div class="page-cart-product-list-item__img">
                            <img src="${item.product_img}" alt="">
                        </div>
                        <div class="page-cart-product-list-item__info">
                            <a href="product/${item.product_hash}" class="page-cart-product-list-item__title">${item.product_title}</a>
                            <div class="page-cart-product-list-item_options">${options}</div>
                        </div>
                    </div>
                    <div class="page-cart-product-list-item__count">
                        <span class="page-cart-product-list-item__count_minus">-</span>
                        <input type="text" name="count" value="${item.count}">
                            <span class="page-cart-product-list-item__count_plus">+</span>
                    </div>
                    <div class="page-cart-product-list-item__price">
                        ${item.product_price} byn
                    </div>
                    <div class="page-cart-product-list-item__remove">
                        <i class="fa-solid fa-xmark"></i>
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
            $(document).on('click', '.page-cart-product-list-item__remove', function (){
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
                let cart = JSON.parse(localStorage.getItem('cart'))
                $(this).parents('.page-cart-product-list-item').remove()
                cart = cart.filter(item => {
                    if(item.product_id != id){
                        return item
                    }
                })
                $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length)
                $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                $('.ml-action_cart__count').text(cart.length);
                localStorage.setItem('cart', JSON.stringify(cart))
            })


            // увеличение кол-во продукта
            $(document).on('click', '.page-cart-product-list-item__count_plus', function () {
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
                let cart = JSON.parse(localStorage.getItem('cart'))
                let count = $(this).siblings('input[name="count"]').val();

                $(this).siblings('input[name="count"]').val(Number(count) + 1);
                cart.map(item => {
                    if(item.product_id == id){
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
                let id = $(this).parents('.page-cart-product-list-item').find('input[name="product_id"]').val()
                let cart = JSON.parse(localStorage.getItem('cart'))
                let count = $(this).siblings('input[name="count"]').val();

                if (count > 1) {
                    $(this).siblings('input[name="count"]').val(Number(count) - 1)
                    cart.map(item => {
                        if(item.product_id == id){
                            return item.count -= 1
                        }
                    })
                    $('.result-product-count .pcart-main-order__info-item_val .num').text(cart.length)
                    $('.result-product-sum .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                    $('.result-product-itog .pcart-main-order__info-item_val .num').text(calculate_result_sum(cart))
                    localStorage.setItem('cart', JSON.stringify(cart))
                }
            });

            $('.pcart-main-order__buy').on('click', function (e){
                e.preventDefault()
                let name = $('input[name="name"]').val()
                let phone = $('input[name="phone"]').val()
                let email = $('input[name="email"]').val()
                let comment = $('textarea[name="comment"]').val()

                $.ajax({
                    url: "{{ route('cart-order') }}",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        cart: JSON.parse(localStorage.getItem('cart')), name, phone, email, comment
                    },
                    success:function (response){
                        if(response){//очищаем корзину + редирект
                            window.location.replace("/cart/thanks")
                            localStorage.setItem('cart', null)
                        }
                    }
                })
            })

        })
    </script>
@endsection
