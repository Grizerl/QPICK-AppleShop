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
                        <a class="scroll--item" href="{{route('dyson.index')}}">
                            <img src="/assets/images/Dyson/stylers/stailerdysonbg11.webp" alt="Dyson stylers" loading="lazy" title="Dyson stylers">
                            <span class="scroll--type--cover">Стайлери</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('dyson.hair.dryer')}}">
                            <img src="/assets/images/Dyson/hairDryers/hairDryers10.webp" alt="Dyson hair dryer" loading="lazy" title="Dyson hair dryer">
                            <span class="scroll--type--cover">Фени</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('dyson.rectifiers')}}">
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
                <h2>Навушники</h2>
            </div>
            <div class="scroll--container">
               <ul class="scroll--container--desktop">
                    <li class="scroll--list sc-lt-head">
                        <div class="select-container">   
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneLighting.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple BYZ S852I</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.7</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2927 UAH</span>
                                    <span class="old--price">3527 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneLightingSecond.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple EarPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2327 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneBox.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple EarPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2327 UAH</span>
                                    <span class="old--price">3500 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneLightingSecond.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple EarPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2327 UAH</span>
                                    <span class="old--price">3500 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneBox.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple EarPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2327 UAH</span>
                                    <span class="old--price">3500 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/HeadphoneLighting.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple EarPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.5</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">2327 UAH</span>
                                    <span class="old--price">3500 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
               </ul>
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
                        <a class="scroll--item" href="{{route('console.index')}}">
                            <img src="/assets/images/Console/consoleGaming/console.webp" alt="Console for gaming" loading="lazy" title="Console for gaming">
                            <span class="scroll--type--cover">Ігрові консолі</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('console.accessories')}}">
                            <img src="/assets/images/Console/accessories/accessories.webp" alt="Accessories for console" loading="lazy" title=""Accessories for console">
                            <span class="scroll--type--cover">Для консолей</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="{{route('console.games')}}">
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
