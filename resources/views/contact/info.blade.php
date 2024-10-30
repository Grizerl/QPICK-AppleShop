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
<section>
    <div class="section-contact-container">
        <div class="map__container">
            <h3 class="map-title">Наш офис</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20204.457798625717!2d25.30269285232063!3d50.728153122375275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47259a225ba47733%3A0x5b8e05e7631612ce!2z0KDQvtCy0LDQvdGG0ZYsINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1730305972803!5m2!1suk!2sua" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div style=" display: flex; align-items: center; ">
            <i class="fa-solid fa-map-pin fa-map"></i>
            <p class="map-address">Степова 62Б, Рованці, Луцьк<br><span style="color: #555;">3 етаж, 35 кабінет</span></p>
            </div>
        </div>
        <div class="media__link__container">
            <a class="social-media-item-contact" href="#"><i class="fa-brands fa-twitter fa-tw"></i></a>
            <a class="social-media-item-contact" href="#"><i class="fa-brands fa-instagram fa-inst"></i></a>
            <a class="social-media-item-contact" href="#"><i class="fa-brands fa-telegram fa-tm"></i></a>
            <a class="social-media-item-contact" href="#"><i class="fa-brands fa-viber fa-vib"></i></a>
        </div>
    </div>
    <div class="contact-info">
        <div style="width:42%">
            <i class="fa-solid fa-phone"></i> <a href="tel:+380 95 066 29 56">+380 95 066 29 56</a>
        </div>
    </div>
</section>

@endsection

