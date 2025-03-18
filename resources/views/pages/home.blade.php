{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <title>Home</title>--}}

{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

{{--</head>--}}
{{--<body>--}}
{{--    <div class="top-line">--}}
{{--        <div class="container flex-center">--}}
{{--            <div class="top-line__main flex-center">--}}
{{--                <div class="select-city flex-center">--}}
{{--                    <span class="select-city__text">Москва</span>--}}
{{--                    <div class="select-city__icon">--}}
{{--                        <i class="fa-solid fa-angle-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="pick-up-point flex-center">--}}
{{--                    <span class="pick-up-point__text">Пункт выдачи</span>--}}
{{--                    <div class="pick-up-point__icon">--}}
{{--                        <i class="fa-solid fa-location-dot"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="top-line-time flex-center"><span class="top-line-time__text"> Пн-Пт <span>c 9:00 до 21:00</span></span></div>--}}
{{--            </div>--}}
{{--            <div class="user-account flex-center">--}}
{{--                <div class="user-account__icon">--}}
{{--                    <i class="fa-solid fa-user"></i>--}}
{{--                </div>--}}
{{--                <span class="user-account__text">Личный кабинет</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="middle-line">--}}
{{--        <div class="container flex-center">--}}
{{--            <a class="ml-logo" href="/">--}}
{{--                <img src="{{ asset('images\logo.png') }}" alt="">--}}
{{--            </a>--}}
{{--            <form class="fast-search">--}}
{{--                <div class="fast-search__input">--}}
{{--                    <input type="text" name="search" placeholder="Поиск товара">--}}
{{--                    <div class="fast-search__icon">--}}
{{--                        <i class="fa-solid fa-magnifying-glass"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <span class="fast-search__example">Например</span>--}}
{{--            </form>--}}
{{--            <div class="ml-callback">--}}
{{--                <a href="tel:+375441234567" class="ml-callback__phone">+375(44)12-34-567</a>--}}
{{--                <a href="" class="ml-callback__call">Заказать звонок</a>--}}
{{--            </div>--}}
{{--            <div class="ml-action flex-center">--}}
{{--                <div class="ml-action_compare">--}}
{{--                    <i class="fa-solid fa-equals"></i>--}}
{{--                </div>--}}
{{--                <div class="ml-action_like">--}}
{{--                    <i class="fa-solid fa-heart"></i>--}}
{{--                </div>--}}
{{--                <div class="ml-action_cart">--}}
{{--                    <div class="ml-action_cart_icon">--}}
{{--                        <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                    </div>--}}
{{--                    <div class="ml-action__cart_text">Корзина</div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--<nav class="main-menu">--}}
{{--    <div class="container">--}}
{{--        <div class="list-cat">--}}
{{--            <div class="list-cat__main flex-center">--}}
{{--                <div class="list-cat__main_icon">--}}
{{--                    <i class="fa-solid fa-bars"></i>--}}
{{--                </div>--}}
{{--                <span class="list-cat__main_text">Все категории</span>--}}
{{--            </div>--}}
{{--            <div class="list-cat_drop">--}}
{{--                <ul class="list-cat__list">--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Комоды и тумбы</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Мебель для детской</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Мебель для кухни</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Прихожие</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Стенки для гостиной</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Столы</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Шкафы</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Диваны</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Кресла</a></li>--}}
{{--                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Пуфы</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <ul class="main-menu__list">--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Акции</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">О фабрике</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Оплата</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Производители</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Сборка</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Доставка</a></li>--}}
{{--            <li class="main-menu__item"><a href="" class="main-menu__link">Контакты</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--    <header class="header">--}}
{{--            <div class="swiper header-carousel">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide header-carousel__slide" style="background-image: url('{{ asset('images/banner1.png') }}')">--}}
{{--                        <div class="container">--}}
{{--                            <h3 class="header-carousel__title">Бери больше -<br> плати меньше</h3>--}}
{{--                            <div class="header-carousel__desc">--}}
{{--                                <p>При покупке одного и более изделий скидка на последующие - 20 byn</p>--}}
{{--                            </div>--}}
{{--                            <a href="" class="bnt-border">Подробнее</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="swiper-slide header-carousel__slide" style="background-image: url('{{ asset('images/banner2.png') }}')">--}}
{{--                        <div class="container">--}}
{{--                            <h3 class="header-carousel__title">Кровать в <br>скандинавском<br> стиле со скидкой 50%</h3>--}}
{{--                            <div class="header-carousel__desc">--}}
{{--                                <p>До 1 августа</p>--}}
{{--                            </div>--}}
{{--                            <a href="" class="bnt-border">Подробнее</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="header-carousel-pagination-wrap">--}}
{{--                    <div class="container">--}}
{{--                        <div class="header-carousel-pagination"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--    </header>--}}

{{--    <section class="categories">--}}
{{--        <div class="container">--}}
{{--            <h2 class="categories__title">Более 30 000 позиций ждут вас</h2>--}}
{{--            <span class="categories__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>--}}
{{--            <div class="categories__items">--}}
{{--                <div class="categories__item_icon">--}}

{{--                </div>--}}
{{--                <h4 class="categories__item_title">Комоды и тумбы</h4>--}}
{{--                <div class="categories__item_count">60</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="adv">--}}
{{--        <div class="container">--}}
{{--            <div class="adv__item">--}}
{{--                <div class="adv__item_icon">--}}
{{--                    <img src="{{ asset('images/discount.svg') }}" alt="">--}}
{{--                </div>--}}
{{--                <span class="adv__item_title">Выгодные акции и честные скидки</span>--}}
{{--            </div>--}}
{{--            <div class="adv__item">--}}
{{--                <div class="adv__item_icon">--}}
{{--                    <img src="{{ asset('images/certificate.svg') }}" alt="">--}}
{{--                </div>--}}
{{--                <span class="adv__item_title">Сертифицированные продукции</span>--}}
{{--            </div>--}}
{{--            <div class="adv__item">--}}
{{--                <div class="adv__item_icon">--}}
{{--                    <img src="{{ asset('images/sell-product.svg') }}" alt="">--}}
{{--                </div>--}}
{{--                <span class="adv__item_title">Широкий ассортимент товаров</span>--}}
{{--            </div>--}}
{{--            <div class="adv__item">--}}
{{--                <div class="adv__item_icon">--}}
{{--                    <img src="{{ asset('images/delivery.svg') }}" alt="">--}}
{{--                </div>--}}
{{--                <span class="adv__item_title">Быстрая и удобная доставка в срок</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="sale">--}}
{{--        <div class="container">--}}
{{--            <h3 class="sale__title">Специальные предложения</h3>--}}
{{--            <div class="swiper sale-carousel">--}}
{{--                <div class="swiper-wrapper">--}}
{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 1</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}



{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 2</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 3</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 4</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 5</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-slide mini-product">--}}
{{--                        <div class="mini-product__top">--}}
{{--                            <div class="mini-product__stock">4 шт.</div>--}}
{{--                            <div class="mini-product__action">--}}
{{--                                <div class="mini-product__compare">--}}
{{--                                    <i class="fa-solid fa-equals"></i>--}}
{{--                                </div>--}}
{{--                                <div class="mini-product__like">--}}
{{--                                    <i class="fa-solid fa-heart"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__img">--}}
{{--                            <img src="{{ asset('images/komod.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <a href="" class="mini-product__title">Комод 6</a>--}}
{{--                        <div class="mini-product__rating">--}}
{{--                            <div class="mini-product__rating_icon">--}}
{{--                                <i class="fa-solid fa-star"></i>--}}
{{--                            </div>--}}
{{--                            <span class="mini-product__rating_text">4.7</span>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__price">--}}
{{--                            <div class="mini-product__price_main">--}}
{{--                                <span class="mini-product__price_old">459 BYN</span>--}}
{{--                                <span class="mini-product__price_current">379 BYN</span>--}}
{{--                            </div>--}}
{{--                            <div class="mini-product__price_sale">--}}
{{--                                <div class="mini-product__price_sale-count">-10%</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mini-product__buy">--}}
{{--                            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}



{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="info">--}}
{{--        <div class="container">--}}
{{--            <div class="info_desc">--}}
{{--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
{{--                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>--}}
{{--                <a href="" class="info__link">Подробнее</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <footer class="footer">--}}
{{--        <div class="container">--}}
{{--            <div class="footer-main">--}}
{{--                <div class="footer-logo">--}}
{{--                    <img src="{{ asset('images/logo.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="footer-main__info">Информация, предоставленная на этой странице не является публичной офертой.</div>--}}
{{--                <span class="footer-main__copy">© 2025</span>--}}
{{--            </div>--}}
{{--            <div class="footer-category">--}}
{{--                <span class="footer-category__title">Каталог</span>--}}
{{--                <ul class="footer-category__list">--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Комоды</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Мебель для детской</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Мебель для кухни</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Пригожие</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Стенки для гостинной</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Столы</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Шкафы</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Диваны</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Кресла</a></li>--}}
{{--                    <li class="footer-category__item"><a href="" class="footer-category__link">Пуфы</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="footer-menu">--}}
{{--                <span class="footer-menu__title">Компания</span>--}}
{{--                <ul class="footer-menu__list">--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Наша продукция</a></li>--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">О нас</a></li>--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Лицензия</a></li>--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Доставка</a></li>--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Контакты</a></li>--}}
{{--                    <li class="footer-menu__item"><a href="" class="footer-menu__link">Политика конфиденциальности</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="footer-contact">--}}
{{--                <span class="footer-contact__title">Компания</span>--}}
{{--                <div class="footer-contact__item">--}}
{{--                    <div class="footer-contact__item_icon">--}}
{{--                        <i class="fa-solid fa-phone orange"></i>--}}
{{--                    </div>--}}
{{--                    <a href="tel:+375441234567" class="footer-contact__item_text">+375(44)123-45-67</a>--}}
{{--                </div>--}}


{{--                <div class="footer-contact__item">--}}
{{--                    <div class="footer-contact__item_icon">--}}
{{--                        <i class="fa-solid fa-envelope orange"></i>--}}
{{--                    </div>--}}
{{--                    <a href="mailto:info-laravel@furniture.by" class="footer-contact__item_text">info-laravel@furniture.by</a>--}}
{{--                </div>--}}



{{--                <div class="footer-contact__item">--}}
{{--                    <div class="footer-contact__item_icon">--}}
{{--                        <i class="fa-solid fa-clock orange"></i>--}}
{{--                    </div>--}}
{{--                    <span class="footer-contact__item_text">Пн.- Пт. c 9:00 до 21:00, Cб. с 10:00 до 20:00</span>--}}
{{--                </div>--}}



{{--                <div class="footer-contact__item">--}}
{{--                    <div class="footer-contact__item_icon">--}}
{{--                        <i class="fa-solid fa-location-dot orange"></i>--}}
{{--                    </div>--}}
{{--                    <span class="footer-contact__item_text">г. Минск, ул. Победы, д.8</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}




{{--    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>--}}
{{--    <script>--}}
{{--        const header_carousel = new Swiper('.header-carousel', {--}}
{{--            loop: true,--}}
{{--            pagination: {--}}
{{--                el: '.swiper-pagination',--}}
{{--            },--}}
{{--        });--}}


{{--        const sale_carousel = new Swiper('.sale-carousel', {--}}
{{--            loop: true,--}}
{{--            slidesPerView: 4,--}}
{{--            spaceBetween:0,--}}
{{--            pagination: {--}}
{{--                el: '.sale-carousel-pagination',--}}
{{--            },--}}
{{--        });--}}
{{--    </script>--}}
{{--</body>--}}
{{--</html>--}}

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
                    <div class="categories__item">
                        <div class="categories__item_icon">
                            <img src="{{ asset('images/cat_svg/table.svg') }}" alt="">
                        </div>
                        <h4 class="categories__item_title">
                            <a href="{{route('category',$category->hash)}}">{{$category->title}}</a>
                        </h4>
                        <div class="categories__item_count">60</div>
                    </div>
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
                    <div class="swiper-slide mini-product">
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
                        <a href="" class="mini-product__title">Комод 1</a>
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



                    <div class="swiper-slide mini-product">
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
                    <div class="swiper-slide mini-product">
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
                        <a href="" class="mini-product__title">Комод 3</a>
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
                    <div class="swiper-slide mini-product">
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
                        <a href="" class="mini-product__title">Комод 4</a>
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
                    <div class="swiper-slide mini-product">
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
                        <a href="" class="mini-product__title">Комод 5</a>
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
                    <div class="swiper-slide mini-product">
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
                        <a href="" class="mini-product__title">Комод 6</a>
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
            slidesPerView: 4,
            spaceBetween:0,
            pagination: {
                el: '.sale-carousel-pagination',
            },
        });
    </script>
@endsection
