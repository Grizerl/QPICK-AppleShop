@extends('layouts.app')

@section('title', 'Qpick — магазин особливої техніки')

@section('mediaContent')
<div style="height: 64.5vh; margin:5vh;">
    <div class="external-border">
        <div class="internal-border">
            <div class="media-border-container">
                <p class="border-text">Номер вашого замовлення №{{$order->order_number}}, з Вами зв'яжеться наш менеджер.</p>
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