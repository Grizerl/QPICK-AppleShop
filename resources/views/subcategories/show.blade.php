@extends('layouts.app')

@section('title','Qpick — магазин особливої техніки')

@section('mediaContent')
<aside>
    <div class="scroll--container">
        <div class="container--title">
            <h2>{{ $subcategory->name }}</h2>
        </div>
        <div class="scroll--container">
            <ul class="scroll--container--desktop">  
                @foreach($products as $product)
                    <li class="scroll--list sc-lt-head">
                        <div class="select-container">   
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <a class="scroll--item" href="{{route('subcategories.detaile',$product['id'])}}">
                            <img class="scroll--img" src="{{ $product->image ? $product->image : asset('./assets/images/noimage.jpg') }}" alt="{{ $product->name }}" loading="lazy" title="{{$product->name}}">
                            <div class="card--container--item">
                                <div class="scroll--card--info">
                                    <h3>{{ $product->name }}</h3>
                                    <div class="scroll--card-info">
                                        <i class="fa-solid fa-star st-rate"></i>
                                        <span class="rate">4.7</span>
                                    </div>
                                </div>
                                <div class="scroll--card--price">
                                    @if($product->discount)
                                        <span class="price">{{ $product->price }} UAH</span>
                                        <span class="old--price">{{ $product->discount }} UAH</span>
                                    @else
                                        <span class="price">{{ $product->price }} UAH</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>
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