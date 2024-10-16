@extends('layouts.app')

@section('title', 'Qpick — магазин особливої техніки')

@section('mediaContent')
  <div style="padding: 20px;">
    <div style="max-width: 1200px; margin: 0 auto; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 30px;">
       <h1 class="header-title">Оформлення замовлення</h1>
        <div style="display: flex; justify-content: space-between; gap: 20px;">
            <div style="flex: 2;">
              <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325516.3770455823!2d30.532690549999998!3d50.402035500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x5f251d1397901804!2z0LzRltGB0YLQviDQmtC40ZfQsiwg0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1729072902647!5m2!1suk!2sua" 
                width="100%" height="400" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
              </div>
              <div style="margin-top: 30px;">
                <h2  class="title-input">Адреса доставки</h2>
                <form action="#" method="post" style="margin-top: 10px;">
                    <input type="text" id="street" class="input-field" placeholder="Вулиця" style="width: 100%; padding: 10px; margin-bottom: 10px;">
                    <div style="display: flex; gap: 10px;">
                        <input type="text" id="city" class="input-field" placeholder="Місто" style="flex: 1; padding: 10px;">
                        <input type="text" id="zipcode" class="input-field" placeholder="Поштовий індекс" style="flex: 1; padding: 10px;">
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 10px;">
                        <input type="text" id="building" class="input-field" placeholder="Будинок" style="flex: 1; padding: 10px;">
                        <input type="text" id="apartment" class="input-field" placeholder="Квартира" style="flex: 1; padding: 10px;">
                    </div>
                    <input type="text" id="region" class="input-field" placeholder="Область" style="width: 100%; padding: 10px; margin-top: 10px;">
                    <div style="margin-top: 5px;">
                        <label for="phone" class="label-input">Номер отримувача</label>
                        <input type="tel" id="phone" class="input-field" placeholder="+380 999 999 999" style="width: 100%; padding: 10px;">
                    </div>
                    <button type="submit" class="btn-input">Закінчити оформлення</button>
              </div>
            </div>
            <div style="flex: 1; background-color: #fff; border-radius: 8px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px;">
                <div>
                    <h2 class="title-input tit-ord">Ваш заказ</h2>
                    <div class="price-container">
                        <span>{{$product->name}}</span>
                        <span>{{$product->price}}</span>
                    </div>
                    <div class="price-container">
                        <span>Доставка</span>
                        <span>{{$randomNumber}} UAH</span>
                    </div>
                    <div class="price-container">
                        <span>До оплати</span>
                        <span>{{$product->price+$randomNumber}} UAH</span>
                    </div>  
                </div>
                <div style="margin-top: 30px;">
                    <h2  class="title-input tit-ord">Спосіб оплати</h2>  
                    <div style="display: flex; align-items:baseline; justify-content:space-between; margin-bottom: 18px;">
                        <div>
                            <i class="fa-solid fa-money-bill fa-pay"></i>
                            <span class="payment-method-name">Оплата при утриманні</span>
                        </div>
                    <input type="radio" name="payment_method" value="cash">
                    </div>
                    <div style="display: flex; align-items:baseline; justify-content:space-between; margin-bottom: 18px;">
                        <div>
                            <i class="fa-brands fa-cc-paypal fa-pay"></i>
                            <span class="payment-method-name">Оплата на карту</span>
                        </div>
                    <input type="radio" name="payment_method" value="cash">
                    </div>
                    <div style="display: flex; align-items:baseline; justify-content:space-between;">
                        <div>
                            <i class="fa-solid fa-percent fa-pay"></i>
                            <span class="payment-method-name">Чи є промокод?</span>
                        </div>
                            <i style="font-size: 2rem; cursor: pointer;" id="arrowPromo" class="fa-solid fa-caret-down"></i>
                    </div>
                        <div>
                            <input type="text" id="promo" name="promoCode" class="promoCode" placeholder="Введіть промокод">
                        </div>
                </div>
            </div>
            </form>
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