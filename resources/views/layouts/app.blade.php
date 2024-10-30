<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../../../../../assets/css/index.css" type="text/css">
    <link rel="stylesheet" href="../../../assets/css/show/products.css" type="text/css">
    <link rel="stylesheet" href="../../../../assets/css/order/order.css" type="text/css">
    <link rel="stylesheet" href="../../../../../../assets/css/order/reserved.css" type="text/css">
    <link rel="stylesheet" href="../../../../../../assets/css/contact/contact.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/basket.css" type="text/css">
    <link rel="icon" type="image/png" href="../../../../assets/images/StoreLogo/AppleLogo.png" title="Apple Logo">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!---------------->
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!---------------->
    <!--Swiper-->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!----------->
    <!---- Services ---->
    @inject('NumberServices', 'App\Services\AvarageServices')
    <!------------------>
    <title>@yield('title')</title>
</head>
<body>
    <div class="App">
        <div class="container">
            <div class="top-left">
                <a href="{{route('categories.index')}}">
                <img src="../../../../../assets/images/StoreLogo/QPICK.png" alt="Hardware store logo">
                </a>
                <div class="section-phone-select">
                    <div>
                        <img src="../../../../../assets/images/navigation/phone.png" alt="Phone of choice">
                    </div>
                   @yield('nav')
                </div>
            </div>
            <div class="top-right">
                <div class="right-container">
                    <a href="#">
                        <span class="number-save">2</span>
                        <img src="../../../../../assets/images/navigation/selected.png" alt="Selected product">
                    </a>
                </div>
                <div class="right-container">
                    <a href="{{route('basket.order')}}">
                        <span class="number-save">{{ $NumberServices->number()['avarage'] }}</span>
                        <img src="../../../../../assets/images/navigation/basket.png" alt="Basket of goods">
                    </a>
                </div>
            </div>
        </div>
    @yield('mediaContent')    
<footer class="site-footer">
    <div class="footer-top-product">
        <div class="wrap-container">
            <div class="wrap-container-image">
            <a href="{{route('categories.index')}}">
                <img src="../../../../../assets/images/StoreLogo/QPICK.png" alt="Hardware store logo">
            </a>
            </div>
            <div>
                <ul class="second-nav">
                    <li class="item">
                        <a href="#">Вибране</a>
                    </li>
                    <li class="item">
                        <a href="#">Кошик</a>
                    </li>
                    <li class="item">
                        <a href="{{route('media.info')}}">Контакти</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mspoiler">Умови сервісу</h3>
                <div>
                    <ul class="second-nav sc-nv">
                        <li class="item">
                            <i class="fa-solid fa-globe fa-glob"></i>
                        </li>
                        <li class="item-nv">
                            <a href="#">Укр</a>
                        </li>
                        <li class="item-nv">
                            <a href="#">Рус</a>
                        </li>
                        <li class="item-nv">
                            <a href="#">Eng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <ul class="social-media-container">
                    <li>
                        <a class="social-media-item" href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a class="social-media-item" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a class="social-media-item" href="#"><i class="fa-brands fa-telegram"></i></a>
                    </li>
                    <li>
                        <a class="social-media-item" href="#"><i class="fa-brands fa-viber"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="/assets/js/productSelect.js"></script>
<script src="/assets/js/swiper.js"></script>
<script src="/assets/js/showCard/card.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../../../assets/js/Review/review-helpful.js"></script>
<script src="../../../../assets/js/orderBy/order.js"></script>
</body>
</html>