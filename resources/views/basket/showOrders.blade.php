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
<section class="basket-section">
    @if($orders->isNotEmpty()) <!-- Make sure you're using the correct variable name -->
        <div style="height: 64.5vh; margin:5vh;">
            <div class="external-border">
                <div class="internal-border">
                    @foreach ($orders as $order) <!-- Use $order to avoid confusion -->
                        <div style="margin-bottom: 15px;" class="media-border-container">
                            <p class="border-text">Номер вашого замовлення №{{$order->order_number}}, з Вами зв'яжеться наш менеджер.</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination-container">
                {{ $orders->links() }}
            </div>
        </div>
    @else
        <div class="basket-container">
            <div class="basket-content">
                <img src="/assets/images/BasketOrders/trolley.png" alt="Images Trolley" class="basket-image">
                <div class="basket-text">
                    <h1 class="basket-title">Корзина пуста</h1>
                    <span class="basket-subtitle">Але це ніколи не пізно виправити</span>
                    <div class="basket-btn-container">
                        <a href="{{ route('categories.index') }}" class="basket-btn">В каталог товарів</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
@endsection


