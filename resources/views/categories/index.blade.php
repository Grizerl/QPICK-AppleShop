@extends('layouts.app')

@section('title','Qpick — магазин особливої техніки')

@section('nav')

<select name="" id="productSelect">
    <option value="" disabled selected hidden>Вибрати модель телефону</option>

    @foreach($categories as $category)
        <optgroup label="{{ $category->name }}">
            @foreach($category->subcategories as $subcategory)
                <option value="{{ route('subcategories.show', $subcategory) }}">{{ $subcategory->name }}</option>
            @endforeach
        </optgroup>
    @endforeach
</select>

@endsection

@section('mediaContent')
        <div class="advertising-line">
            <div class="advertising-container">
                <div>
                    <img src="./assets/images/AdvertisingBanner/iPhone-13-Pro-Max.png" alt="Banner on the main part" title="Banner on the main part">
                </div>
            </div>
            <div>
                <h1 class="advertising-banner-main-text">Аксесуари для<br>
                Iphone 13 Pro Max</h1>
            </div>
        </div>
    </div>
<section>
    <div>
        <div class="scroll--container">
            <div class="container--title">
                <h2>Dyson</h2>
            </div>
            <div class="scroll--container">
               <ul class="scroll--container--desktop">
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',28)}}">
                            <img src="/assets/images/Dyson/stylers/stailerdysonbg11.webp" alt="Dyson stylers" loading="lazy" title="Dyson stylers">
                            <span class="scroll--type--cover">Стайлери</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',29)}}">
                            <img src="/assets/images/Dyson/hairDryers/hairDryers10.webp" alt="Dyson hair dryer" loading="lazy" title="Dyson hair dryer">
                            <span class="scroll--type--cover">Фени</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',30)}}">
                            <img src="/assets/images/Dyson/rectifiers/rectifiers5.webp" alt="Dyson rectifiers" loading="lazy" title="Dyson rectifiers">
                            <span class="scroll--type--cover">Випрямлячі</span>
                        </a>
                    </li>
               </ul>
            </div>
        </div>
    <aside>
    <div class="scroll--container">
            <div class="container--title">
                <h2>Apple AirPods</h2>
            </div>
            <div class="swiper AirPods-Swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',316)}}">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods Pro 2.webp" alt="AirPods Pro 2" title="AirPods Pro 2" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods Pro 2</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.7</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">9499 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',317)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods 3.webp" alt="AirPods 3" title="AirPods 3" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods 3</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">6399 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',388)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods4.webp" alt="AirPods 4" tutitle="AirPods 4" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods 4</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.6</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">9699 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',389)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods 2.webp" alt="AirPods 2" title="AirPods 2" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods 2</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">5.0</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">4299 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',320)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods Max 2.webp" alt="AirPods Max 2" title="AirPods Max 2" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods Max 2</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">5.0</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">26799 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',321)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods Max Blue.webp" alt="AirPods Max Blue" title="AirPods Max Blue" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods Max (Sky Blue)</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.4</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">19599 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',387)}}"">
                            <img class="scroll--img" src="/assets/images/AirPods/AirPods Max Red.webp" alt="AirPods Max Red" title="AirPods Max Red" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods Max (Pink)</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.8</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">19599 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="container--title">
                <h2>Apple Watch</h2>
            </div>
            <div class="swiper AppleWatch-Swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',323)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatchSE.webp" alt="Apple Watch SE" title="Apple Watch SE" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch SE 2 40mm Starlight</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.4</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">9799 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',324)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatchSE 2.webp" alt="Apple Watch SE 2" title="Apple Watch SE 2" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch SE 2 44mm Midnight</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.3</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">10899 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',325)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatch9.webp" alt="Apple Watch 9" title="Apple Watch 9" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch Series 9 41mm Starlight</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">19599 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',326)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatch9 Pink.webp" alt="Apple Watch 9 Pink" title="Apple Watch 9 Pink" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch Series 9 41mm Pink</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.8</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">15499 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',327)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatch9 Blue.webp" alt="Apple Watch 9 Blue" title="Apple Watch 9 Blue" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch Series 9 41mm Midnight</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">5.0</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">14599 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',328)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatch Ultra.webp" alt="Apple Watch Ultra" title="Apple Watch Ultra" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch Ultra 2 49mm GPS</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">5.0</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">32799 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                    <div class="swiper-slide">
                        <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.detaile',329)}}">
                            <img class="scroll--img" src="/assets/images/Apple Watch/AppleWatch 10.webp" alt="Apple Watch 10" title="Apple Watch 10" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple Watch Series 10 GPS, 46mm</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.6</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">20599 UAH</span>
                                </div>
                            </div>
                        </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <aside>
    <div class="scroll--container">
            <div class="container--title">
                <h2>Консолі та геймінг</h2>
            </div>
            <div class="scroll--container">
               <ul class="scroll--container--desktop">
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',34)}}">
                            <img src="/assets/images/Console/consoleGaming/console.webp" alt="Console for gaming" loading="lazy" title="Console for gaming">
                            <span class="scroll--type--cover">Ігрові консолі</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',35)}}">
                            <img src="/assets/images/Console/accessories/accessories.webp" alt="Accessories for console" loading="lazy" title=""Accessories for console">
                            <span class="scroll--type--cover">Для консолей</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('subcategories.show',36)}}">
                            <img src="/assets/images/Console/games/games5.webp" alt="Games gta 5" loading="lazy" title="Games gta 5">
                            <span class="scroll--type--cover">Ігри</span>
                        </a>
                    </li>
               </ul>
            </div>
        </div>
    </aside>
    </div>
</section>
@endsection
