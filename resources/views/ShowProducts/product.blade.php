@extends('layouts.app')

@section('title', 'Qpick — магазин особливої техніки')

@section('mediaContent')
    <div class="AppShowProducts">
        <div class="all-container-header">
        <div class="show-container-header">
            <div class="show-content">
                <ul class="show-nav">
                    <li class="show-list">
                        <a href="#">Характеристики</a>
                    </li>
                    <li class="show-list">
                        <a href="#">Опис</a>
                    </li>
                    <li class="show-list">
                        <a href="#">Відгуки</a>
                    </li>
                </ul>
            </div>
            <div class="part-number">
                <span>Артикул: </span>
                <span>{{ $product->article ?? 'MGJ53' }}</span>
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
