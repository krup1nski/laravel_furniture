<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="top-line">
    <div class="container flex-center">
        <div class="top-line__main flex-center">
            <div class="select-city flex-center">
                <span class="select-city__text">Москва</span>
                <div class="select-city__icon">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>

            <div class="pick-up-point flex-center">
                <span class="pick-up-point__text">Пункт выдачи</span>
                <div class="pick-up-point__icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>

            <div class="top-line-time flex-center"><span class="top-line-time__text"> Пн-Пт <span>c 9:00 до 21:00</span></span></div>
        </div>
        <div class="user-account flex-center">
            <div class="user-account__icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <span class="user-account__text">Личный кабинет</span>
        </div>
    </div>
</div>
<div class="middle-line">
    <div class="container flex-center">
        <a class="ml-logo" href="/">
            <img src="{{ asset('images\logo.png') }}" alt="">
        </a>
        <form class="fast-search">
            <div class="fast-search__input">
                <input type="text" name="search" placeholder="Поиск товара">
                <div class="fast-search__icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <span class="fast-search__example">Например</span>
        </form>
        <div class="ml-callback">
            <a href="tel:+375441234567" class="ml-callback__phone">+375(44)12-34-567</a>
            <a href="" class="ml-callback__call">Заказать звонок</a>
        </div>
        <div class="ml-action flex-center">
            <div class="ml-action_compare">
                <i class="fa-solid fa-equals"></i>
            </div>
            <div class="ml-action_like">
                <i class="fa-solid fa-heart"></i>
            </div>
            <div class="ml-action_cart">
                <div class="ml-action_cart_icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div class="ml-action__cart_text">Корзина</div>
            </div>

        </div>
    </div>
</div>

<nav class="main-menu">
    <div class="container">
        <div class="list-cat">
            <div class="list-cat__main flex-center">
                <div class="list-cat__main_icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <span class="list-cat__main_text">Все категории</span>
            </div>
            <div class="list-cat_drop">
                <ul class="list-cat__list">
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Комоды и тумбы</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Мебель для детской</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Мебель для кухни</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Прихожие</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Стенки для гостиной</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Столы</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Шкафы</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Диваны</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Кресла</a></li>
                    <li class="list-cat__list_item"><a href="" class="list-cat__list_link">Пуфы</a></li>
                </ul>
            </div>
        </div>
        <ul class="main-menu__list">
            <li class="main-menu__item"><a href="" class="main-menu__link">Акции</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">О фабрике</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Оплата</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Производители</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Сборка</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Доставка</a></li>
            <li class="main-menu__item"><a href="" class="main-menu__link">Контакты</a></li>
        </ul>
    </div>
</nav>

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

@yield('content')

<section class="info">
    <div class="container">
        <div class="info_desc">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
            <a href="" class="info__link">Подробнее</a>
        </div>
    </div>
</section>

@include('partials.footer')


@yield('scripts')

</body>
</html>
