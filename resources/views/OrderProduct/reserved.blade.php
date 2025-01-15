@extends('layouts.app')

@section('title', 'Qpick — магазин особливої техніки')

@section('mediaContent')
<div style="height: 64.5vh; margin:5vh;">
    <div class="external-border"> <!-- Outer border for styling -->
        <div class="internal-border"> <!-- Inner border for additional styling -->
            <div class="media-border-container">
                <p class="border-text">Номер вашого замовлення №{{$order->order_number}}, з Вами зв'яжеться наш менеджер.</p> <!-- Display the order number and message to the user -->
            </div> 
        </div>
    </div>
</div>
@endsection

@section('nav')
<!-- Dropdown for selecting product subcategories -->
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

@section('adaptive')
<select name="" id="productSelectAdapite">
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