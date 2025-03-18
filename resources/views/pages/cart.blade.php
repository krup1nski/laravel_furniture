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
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">Всего товаров:</div>
                        <div class="pcart-main-order__info-item_val">4 шт</div>
                    </div>
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">Сумма заказа:</div>
                        <div class="pcart-main-order__info-item_val">100 byn</div>
                    </div>
                    <div class="pcart-main-order__info-item">
                        <div class="pcart-main-order__info-item_title">К оплате:</div>
                        <div class="pcart-main-order__info-item_val result">400 byn</div>
                    </div>
                    <div class="pcart-main-order__buy-wrap">
                        <button class="pcart-main-order__buy">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('script')

    <script>
        $(document).ready(function (){
            let cart = JSON.parse(localStorage.getItem('cart'))
            let output = ``
            //отображение продуктов корзины из локалсторэдж
            cart.forEach(item => {
                output += `
                <div class="page-cart-product-list-item">
                    <input type="hidden" name="product_id" value="${item.product_id}" >
                    <div class="page-cart-product-list-item__info_wrap">
                        <div class="page-cart-product-list-item__img">
                            <img src="${item.product_img}" alt="">
                        </div>
                        <div class="page-cart-product-list-item__info">
                            <a href="" class="page-cart-product-list-item__title">${item.product_title}</a>
                            <div class="page-cart-product-list-item_options">
                                <span class="">Красный</span>
                                <span class="">144х123х123</span>
                            </div>
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
                localStorage.setItem('cart', JSON.stringify(cart))
            });
            // увеличение кол-во продукта
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
                    localStorage.setItem('cart', JSON.stringify(cart))
                }
            });

        })
    </script>
@endsection
