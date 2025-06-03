<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Files -->
    <link rel="stylesheet" href="../../../../../assets/css/index.css" type="text/css"> <!-- Main styles -->
    <link rel="stylesheet" href="../../../assets/css/show/products.css" type="text/css"> <!-- Product display styles -->
    <link rel="stylesheet" href="../../../../assets/css/order/order.css" type="text/css"> <!-- Order styles -->
    <link rel="stylesheet" href="../../../../../../assets/css/order/reserved.css" type="text/css"> <!-- Reserved items styles -->
    <link rel="stylesheet" href="../../../../../../assets/css/contact/contact.css" type="text/css"> <!-- Contact page styles -->
    <link rel="stylesheet" href="../../assets/css/basket.css" type="text/css"> <!-- Shopping basket styles -->
    <link rel="icon" type="image/png" href="../../../../assets/images/StoreLogo/AppleLogo.png" title="Apple Logo"> <!-- Logo WebSite -->

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Swiper for image sliders -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> <!-- Swiper CSS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> <!-- Swiper JS -->

    <!---- Services ---->
    @inject('NumberServices', 'App\Services\AvarageServices') <!-- Dependency injection for service -->

    <title>@yield('title')</title> <!-- Page title -->
</head>
<body>
    <div class="App">
        <div class="container">
            <div class="navbar-container">
                <div class="top-left">
                    <a href="{{route('categories.index')}}">
                        <img src="../../../../../assets/images/StoreLogo/QPICK.png" alt="Hardware store logo"> <!-- Store logo -->
                    </a>
                    <div class="section-phone-select">
                        <div>
                            <img src="../../../../../assets/images/navigation/phone.png" alt="Phone of choice"> <!-- Phone icon -->
                        </div>
                        @yield('nav')  <!-- Placeholder for navigation content -->
                    </div>
                </div>
                <div class="top-right">
                    <div class="right-container">
                        <a href="#">
                            <span class="orders">2</span> <!-- Number of selected products -->
                            <img src="../../../../../assets/images/navigation/selected.png" alt="Selected product"> <!-- Selected product icon -->
                        </a>
                    </div>
                    <div class="right-container">
                        <a href="{{route('basket.order')}}">
                            <span class="orders">{{ $NumberServices->number()['avarage'] }}</span> <!-- Average number of items in the basket -->
                            <img src="../../../../../assets/images/navigation/basket.png" alt="Basket of goods"> <!-- Basket icon -->
                        </a>
                    </div>
                </div>
                <div class="adaptive-menu">
                    <div class="burger-menu">
                            <svg class="menu-btn"  stroke="currentColor" fill="currentColor" stroke-width="0" data-name="Layer 1" id="Layer_1" height="25" width="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#ba63c6;}</style></defs><title/><path class="cls-1" d="M3,9H29a2,2,0,0,0,0-4H3A2,2,0,0,0,3,9Z"/><path class="cls-1" d="M29,14H3a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z"/><path class="cls-1" d="M29,23H3a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z"/></svg>
                        <div class="burger-container">
                            <div class="close-btn-burger">
                                <svg height="25" width="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title/><g id="cross"><line class="cls-1" x1="7" x2="25" y1="7" y2="25"/><line class="cls-1" x1="7" x2="25" y1="25" y2="7"/></g></svg>
                            </div>    
                            <div class="technique">
                                <img src="../../../../../assets/images/navigation/phone.png" alt="Phone of choice"> <!-- Phone icon -->
                                @yield('adaptive')
                            </div>
                            <div class="aside-media-content">
                                <a href="#">
                                    <span class="orders">2</span> <!-- Number of selected products -->
                                    <img src="../../../../../assets/images/navigation/selected.png" alt="Selected product"> <!-- Selected product icon -->
                                </a>
                                <a href="{{route('basket.order')}}">
                                    <span class="orders">{{ $NumberServices->number()['avarage'] }}</span> <!-- Average number of items in the basket -->
                                    <img src="../../../../../assets/images/navigation/basket.png" alt="Basket of goods"> <!-- Basket icon -->
                                </a>
                            </div>
                            <div class="social-media sc-bur">
                                <ul class="social-media-container">
                                    <li>
                                        <a class="social-media-item" href="#"><i class="fa-brands fa-twitter"></i></a> <!-- Twitter icon -->
                                    </li>
                                    <li>
                                        <a class="social-media-item" href="#"><i class="fa-brands fa-instagram"></i></a> <!-- Instagram icon -->
                                    </li>
                                    <li>
                                        <a class="social-media-item" href="#"><i class="fa-brands fa-telegram"></i></a> <!-- Telegram icon -->
                                    </li>
                                    <li>
                                        <a class="social-media-item" href="#"><i class="fa-brands fa-viber"></i></a> <!-- Viber icon -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @yield('mediaContent') <!-- Placeholder for media content -->
<footer class="site-footer">
    <div>
        <div class="container">
            <div class="footer-top-product">
                <div class="wrap-container">
                    <div class="wrap-container-image">
                        <a href="{{route('categories.index')}}">
                            <img src="../../../../../assets/images/StoreLogo/QPICK.png" alt="Hardware store logo"> <!-- Store logo in footer -->
                        </a>
                    </div>
                    <div>
                        <ul class="second-nav">
                            <li class="item">
                                <a href="#">Вибране</a> <!-- Favorite items link -->
                            </li>
                            <li class="item">
                                <a href="{{route('basket.order')}}">Кошик</a> <!-- Basket link -->
                            </li>
                            <li class="item">
                                <a href="{{route('media.info')}}">Контакти</a> <!-- Contact link -->
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mspoiler">Умови сервісу</h3> <!-- Service terms title -->
                    <div>
                        <ul class="second-nav sc-nv">
                            <li class="item">
                                <i class="fa-solid fa-globe fa-glob"></i> <!-- Globe icon -->
                            </li>
                            <li class="item-nv">
                                <a href="#">Укр</a> <!-- Ukrainian language link -->
                            </li>
                            <li class="item-nv">
                                <a href="#">Рус</a> <!-- Russian language link -->
                            </li>
                            <li class="item-nv">
                                <a href="#">Eng</a> <!-- English language link -->
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="social-media">
                        <ul class="social-media-container">
                            <li>
                                <a class="social-media-item" href="#"><i class="fa-brands fa-twitter"></i></a> <!-- Twitter icon -->
                            </li>
                            <li>
                                <a class="social-media-item" href="#"><i class="fa-brands fa-instagram"></i></a> <!-- Instagram icon -->
                            </li>
                            <li>
                                <a class="social-media-item" href="#"><i class="fa-brands fa-telegram"></i></a> <!-- Telegram icon -->
                            </li>
                            <li>
                                <a class="social-media-item" href="#"><i class="fa-brands fa-viber"></i></a> <!-- Viber icon -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
    <!-- JavaScript Files -->
    <script src="/assets/js/productSelect.js"></script> <!-- Product selection script -->
    <script src="/assets/js/swiper.js"></script> <!-- Swiper initialization script -->
    <script src="/assets/js/showCard/card.js"></script> <!-- Card display script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> <!-- Swiper library -->
    <script src="../../../assets/js/Review/review-helpful.js"></script> <!-- Review helpfulness script -->
    <script src="../../../../assets/js/orderBy/order.js"></script> <!-- Ordering script -->
</body>
</html>
