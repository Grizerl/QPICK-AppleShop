<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Orders;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function checkout(OrderRequest $request)
    {
        $validatedData = $request->validated();

        $order = new Orders();
        $order->street = $validatedData['street'];
        $order->region = $validatedData['region'];
        $order->city = $validatedData['city'];
        $order->zipcode = $validatedData['zipcode'];
        $order->house = isset($validatedData['house']) ? $validatedData['house'] : (isset($validatedData['flat']) ? $validatedData['flat'] : null);
        $order->phone = $validatedData['phone'];
        // $order->price = $validatedData['price'];
        $order->paymentMethod = $validatedData['paymentMethod']; 
        $order->save();

        return redirect(route('checkout.reserved'))->with('success', 'Дані успішно передані');
    }
}
