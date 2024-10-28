@extends('layouts.app')

@section('title', 'Qpick — магазин особливої техніки')

@section('mediaContent')
    <div class="AppShowProducts">
        <div class="all-container-header">
        <div class="show-container-header">
            <div class="show-content">
                <ul class="show-nav">
                    <li class="show-list">
                        <a href="#Product__Characteristics">Характеристики</a>
                    </li>
                    <li class="show-list">
                        <a href="#Product__Description">Опис</a>
                    </li>
                    <li class="show-list">
                        <a href="#Review">Відгуки</a>
                    </li>
                </ul>
            </div>
            <div class="part-number">
                <span>Артикул: </span>
                <span>{{ $product->subcategory->article ?? 'MGJ53' }}</span>
            </div>
        </div>
        </div>

        <div class="product-container">
            <div class="img-container">
                <img src="{{ $product->image }}" alt="{{$product->name}}" title="{{$product->name}}">
            </div>
            <div class="product-details">
                <div class="product-title">
                    <h1>{{ $product->name }}</h1>
                </div>
                <div class="product-availability {{ $product->availability > 0 ? 'in-stock' : 'out-of-stock' }}">
                    @if($product->availability <= 0 || $product->availability === null)
                        <p>Товара немає в наявності</p>
                    @else
                        <p>Товар в наявності</p>
                    @endif
                </div>
                <div class="price-container">
                    @if($product->discount == null)
                        <span>{{ $product->price }} UAH</span>
                    @else
                        <span class="new-price">{{ $product->price }} UAH</span>
                        <span class="old-price">{{ $product->discount }} UAH</span>
                    @endif
                </div>
                <div class="actions">
                    @if($product->availability <= 0 || $product->availability === null)
                        <button class="outStock" href="#">Немає в наявності</button>
                    @else
                        <a id="buyBtn" class="btn-animation" href="#">Купити</a>
                        <a id="not-working-service" href="#">Оплата частинами</a>
                    
                    @endif
                </div>
                <div id="buyModal" class="mfp-content modal">
                    <div class="cart--content modal-content">
                        <span class="close">&times;</span>
                        <h2>Оформлення покупки</h2>
                        <form>
                        <div class="modal-form">
                            <img class="modal-img" src="{{ $product->image }}" alt="Product Image">
                            <div style=" display: flex; align-items: center; justify-content: space-between; width: 100%;">
                            <div>
                                <h1 class="modal-name">{{ $product->name }}</h1>
                                <span class="modal-price">{{ $product->price }} UAH</span>
                            </div>
                            <div class="modal-section-price">
                                <span class="modal-title-price">Сума</span>
                                <span class="modal-price">{{ $product->price }} UAH</span>
                            </div>
                            </div>
                        </div>
                        </form>
                        <div class="section-modal-btn">
                            <a href="#"  class="default-btn">Продовжити покупки</a>
                            <a href="{{route('subcategories.order',$product['id'])}}" class="main-but red">Оформити замовлення</a>
                        </div>
                    </div>
                </div>
                    <div class="color-options">
                    <h1>Колір</h1>
                    @if($product->subcategory->category->name === 'Apple iPhone')
                    <div class="colors">
                        <span class="color" style="background-color: #000000;"></span>
                        <span class="color" style="background-color: #ffffff;"></span>
                        <span class="color" style="background-color: #e40d0d;"></span>
                        <span class="color" style="background-color: #d2cedc;"></span>
                        <span class="color" style="background-color: #9fe2ca;"></span>
                        <span class="color" style="background-color: #2f466b;"></span>
                    </div>
                    @elseif($product->subcategory->category->name === 'Apple AirPods')
                    <div class="colors">
                        <span class="color" style="background-color: #9fe2ca;"></span>
                        <span class="color" style="background-color: #ffffff;"></span>
                        <span class="color" style="background-color: #62615f;"></span>
                        <span class="color" style="background-color: #e9e9e1;"></span>
                        <span class="color" style="background-color: #e6b3b0;"></span>
                        <span class="color" style="background-color: #9cafbf;"></span>
                    </div>
                    @elseif($product->subcategory->category->name === 'Apple Mac')
                    <div class="colors">
                        <span class="color" style="background-color: #0d1b3a;"></span>
                        <span class="color" style="background-color: #62615f;"></span>
                        <span class="color" style="background-color: #e9e9e1;"></span>
                        <span class="color" style="background-color: #ffffff;"></span>
                    </div>
                    @elseif($product->subcategory->category->name === 'Dyson')
                    <div class="colors">
                        <span class="color" style="background-color: #eba832;"></span>
                        <span class="color" style="background-color: #b0b3ad;"></span>
                        <span class="color" style="background-color: #3e197a;"></span>
                        <span class="color" style="background-color: #f8522f;"></span>
                        <span class="color" style="background-color: #2fccce;"></span>
                        <span class="color" style="background-color: #0a0a0b;"></span>
                        <span class="color" style="background-color: #3d5890;"></span>
                        <span class="color" style="background-color: #d8b19e;"></span>
                    </div>
                    @elseif($product->subcategory->category->name === 'Console and Gaming')
                    <div class="colors">
                        <span class="color" style="background-color: #0aa8ef;"></span>
                        <span class="color" style="background-color: #ffffff;"></span>
                        <span class="color" style="background-color: #e40d0d;"></span>
                        <span class="color" style="background-color: #494bd4;"></span>
                        <span class="color" style="background-color: #e6b3b0;"></span>
                        <span class="color" style="background-color: #000000;"></span>
                    </div>
                    @elseif($product->subcategory->category->name === 'Apple Watch')
                    <div class="colors">
                        <span class="color" style="background-color: #000000;"></span>
                        <span class="color" style="background-color: #ffffff;"></span>
                        <span class="color" style="background-color: #41454f;"></span>
                        <span class="color" style="background-color: #ee4c17;"></span>
                        <span class="color" style="background-color: #c4beb8;"></span>
                        <span class="color" style="background-color: #223444;"></span>
                    </div>
                    @endif
                </div>
                @if($product->subcategory->category->name === 'Apple iPhone' || $product->subcategory->category->name === 'Apple Mac')
                    <div class="storage-options">
                    <h1>Ємність</h1>
                    <div class="storages">
                        <a href="#"><label>64GB</label></a>
                        <a href="#"><label>128GB</label></a>
                        <a href="#"><label>256GB</label></a>
                        <a href="#"><label>512GB</label></a>
                    </div>
                </div>
                @elseif($product->subcategory->category->name === 'Apple Watch')
                <div class="storage-options">
                    <h1>Ємність</h1>
                    <div class="storages">
                        <a href="#"><label>40mm</label></a>
                        <a href="#"><label>42mm</label></a>
                        <a href="#"><label>44mm</label></a>
                        <a href="#"><label>46mm</label></a>
                    </div>
                </div>
                @endif
                <div class="benefits">
                    <h1>Наші переваги</h1>
                    <div class="benefit-list">
                        <div class="benefit-item">
                            <i class="fa-regular fa-credit-card"></i>
                            <div>Приймаються 5 видів оплати</div>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-certificate"></i>
                            <div>Гарантія до 36 місяців</div>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-rotate"></i>
                            <div>14 днів на обмін товару</div>
                        </div>
                        <div class="benefit-item">
                            <i class="fa-solid fa-truck"></i>
                            <div>Відправимо сьогодні</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside>
    <div class="product-landing">
        <div class="product-characteristic-section">
            <div class="product-title-section">
                <div id="Product__Description" style=" display: flex; align-items: center; justify-content: space-between; ">
                    <h2 class="title-section">Докладніше про {{$product->name}}</h2>
                    <i id="toggle-icon" style="margin: 2.5vh 3.5vh 2.5vh 0vh; font-size: 15px; cursor: pointer; " class="fa-solid fa-chevron-up toggle-icon"></i>
                </div>
                <div id="product-info" class="product-info" style="display: none;">
                    <div class="product-name">
                        <h2>{{$product->name}}</h2>
                    </div>
                    <div class="product-description">
                        <p><br>{!! str_replace("характеристиках.", "характеристиках.<br>", $product->description) !!}<br></p>
                    </div>
                    <div class="product-image">
                        <figure>
                            <img src="{{$product->image}}" alt="{{$product->name}}" title="{{$product->name}}">
                        </figure>
                    </div>
                    @if($product->subcategory->name === 'For Consoles')
                    <div class="product-specs-title">
                        <h2>Технические характеристики {{$product->name}}</h2>
                        <ul class="product-specs-list">
                            <li>Мінімалістичний дизайн корпуса.</li>
                            <li>Стиль та зручність для геймерів.</li>
                            <li>Ергономічний дизайн та комфорт в користуванні.</li>
                            <li>Революція швидкості в іграх.</li>
                            <li>Титановые рамки вокруг корпуса.</li>
                        </ul>
                    </div>
                    @elseif($product->subcategory->name === 'Сonsole Games')
                    <div class="product-specs-title">
                        <h2>Технические характеристики {{$product->name}}</h2>
                        <ul class="product-specs-list">
                            <li>Змінюйте свого персонажа.</li>
                            <li>Вирушайте в подорож, знаходите фантастичних тварин.</li>
                            <li>Об'єднує в собі найкраще з створеного за всю історію самого реалістичного симулятора.</li>
                            <li>Ексклюзив платформи PlayStation.</li>
                            <li>Познайомтеся з історією про Басіма.</li>
                        </ul>
                    </div>
                    @elseif($product->subcategory->name === 'Dyson Straightener' || $product->subcategory->name === 'Dyson HairDryers' || $product->subcategory->name === 'Dyson Rectifiers')
                    <div class="product-specs-title">
                        <h2>Технические характеристики {{$product->name}}</h2>
                        <ul class="product-specs-list">
                            <li>Кращий вибір для вашого дому.</li>
                            <li>Революційні технології для ідеальної чистоти.</li>
                            <li>Дивовижна багатофункціональність та ефективність.</li>
                            <li>Кейс для зберігання.</li>
                            <li>Титановые рамки вокруг корпуса и каленая стеклянная задняя панель.</li>
                        </ul>
                    </div>
                    @elseif($product->subcategory->category->name === 'Apple AirPods')
                    <div class="product-specs-title">
                        <h2>Технические характеристики {{$product->name}}</h2>
                        <ul class="product-specs-list">
                            <li>Залишайся з музикою.</li>
                            <li>Заряду на цілий день.</li>
                            <li>Разом завжди краще.</li>
                            <li>Музика усюди.</li>
                            <li>Кольори що надихають.</li>
                        </ul>
                    </div>
                    @else
                    <div class="product-specs-title">
                        <h2>Технические характеристики {{$product->name}}</h2>
                        <ul class="product-specs-list">
                            <li>{{$product->name}} получил дисплей ProMotion с частотой обновления 120 Гц.</li>
                            <li>Насыщенный контраст, яркость и диагональ остаются без изменений.</li>
                            <li>Процессор нового поколения A17 Pro, впервые созданный по 3-нанометровому процессу.</li>
                            <li>Революція швидкості в іграх</li>
                            <li>Титановые рамки вокруг корпуса и каленая стеклянная задняя панель.</li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div id="Product__Characteristics" class="product-main-characteristics">
                <h2>Основні характеристики:</h2>
                <div class="product-info-line">
                    <div>Бренд:</div>
                    <div>{{$product->brand}}</div>
                </div>
                <div class="product-info-line">
                    <div>Модель:</div>
                    <div>{{$product->name}}</div>
                </div>
                <div class="product-info-line">
                    <div>Гарантія:</div>
                    <div>Гарантія від виробника на 12 місяців. Гарантія 31 день від Ябко з можливістю продовження.</div>
                </div>
                <div class="bottom-line"></div>
                <h2>Корпус та габарити</h2>
                <div class="product-info-line">
                    <div>Рік випуску:</div>
                    <div>{{$product->Year_of_issue}}</div>
                </div>
                <div class="product-info-line">
                    <div>Розмір:</div>
                    <div>{{$product->Weight}}</div>
                </div>
                <div class="product-info-line">
                    <div>Колір:</div>
                    <div>{{$product->Device_color}}</div>
                </div>
            </div>
        </div>
    </div>
</aside>
<aside>
    <div style="width:100%; display: flex; justify-content: center; align-items: center;">
        <div class="wrapp-product__rewievs">
            <div class="top-block-review">
                <h1 class="wrapp-product__rewievs-title">Відгуки клієнтів про {{$product->name}}</h1>
                <div>
                    <h2 class="wrapp-product__rewievs-subtitle">
                        Загальний рейтинг товару:
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </h2>
                </div>
            </div>
            <div style="width: 55%;">
                <form class="form--review" action="{{route('reviews.manage')}}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Ваше ім'я" id="review-name" class="review-name">
                    @if ($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif
                    <textarea rows="8" maxlength="1000" class="input-review" name="input_review" id="input-review" placeholder="Ваш коментар"></textarea>
                    @if ($errors->has('input_review'))
                        <div class="alert alert-danger">{{ $errors->first('input_review') }}</div>
                    @endif
                    <button type="submit" class="submit--review" id="submit--review">Залишити відгук</button>
                </form>
            </div>
        </div>
    </div>
</aside>
<section id="Review" class="review-section">
@foreach ($reviews as $feedback)
    <div class="review-container">
        <div class="review">
            <h3 class="review-author">{{$feedback->name}}</h3>
            <div class="review-stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="review-text">
                <p>{{$feedback->comment}}</p>
            </div>
            <div  class="review-helpful" data-click-count="0">
                <i class="fa-solid fa-thumbs-up"></i>Корисно()
            </div>
        </div>
    </div>
@endforeach
    <div class="pagination-container">
        {{ $reviews->links() }}
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleIcon = document.getElementById("toggle-icon");
        const productInfo = document.getElementById("product-info");

        toggleIcon.addEventListener("click", function() {
            // Toggle visibility
            productInfo.style.display = productInfo.style.display === "none" ? "block" : "none";
            // Rotate the icon
            toggleIcon.classList.toggle("rotate");
        });
    });
</script>
@endsection

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
