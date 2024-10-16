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
                    <img src="./assets/images/AdvertisingBanner/iPhone-13-Pro-Max.png" alt="Banner on the main part">
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
                <h2>Чохли</h2>
            </div>
            <div class="scroll--container">
               <ul class="scroll--container--desktop">
                    <li class="scroll--list">
                        <a class="scroll--item" href="#">
                            <img src="/assets/images/covers/Glass.png" alt="Cover" loading="lazy">
                            <span class="scroll--type--cover">Скляні</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="#">
                            <img src="/assets/images/covers/MellowYellow.png" alt="Cover" loading="lazy">
                            <span class="scroll--type--cover">Силіконові</span>
                        </a>
                    </li>
                    <li class="scroll--list">
                        <a class="scroll--item" href="#">
                            <img src="/assets/images/covers/Black.png" alt="Cover" loading="lazy">
                            <span class="scroll--type--cover">Шкіряні</span>
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
                <h2>Бездротові навушники</h2>
            </div>
            <div class="scroll--container">
               <ul class="scroll--container--desktop">
                    <li class="scroll--list sc-lt-head">
                        <div class="select-container">   
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/bluetooth/AirPods_2.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>Apple AirPods</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.7</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">9527 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/bluetooth/AirPodsPro.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>GERLAX GH-04</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.6</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">6527 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="scroll--list sc-lt-head">
                    <div class="select-container">   
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a class="scroll--item" href="#">
                            <img class="scroll--img" src="/assets/images/headphone/bluetooth/Borofone.png" alt="HeadphoneLighting" loading="lazy">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>BOROFONE BO4</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">5.0</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    <span class="price">7527 UAH</span>
                                </div>
                            </div>
                        </a>
                    </li>
               </ul>
            </div>
        </div>
    </aside>
    </div>
</section>
@endsection
