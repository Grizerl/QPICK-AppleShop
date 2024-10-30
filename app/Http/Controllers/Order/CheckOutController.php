<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Orders;
use App\Models\Product;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function checkout(OrderRequest $request,$id)
    {
        
        $randomNumber = $request->input('randomNumber');

        $product = Product::find($id);

        $validatedData = $request->validated();
        
        $order = new Orders();
        
        $orderNumber = rand(1500, 50000);
        $order->order_number = $orderNumber; 
        $order->street = $validatedData['street'];
        $order->region = $validatedData['region'];
        $order->city = $validatedData['city'];
        $order->zipcode = $validatedData['zipcode'];
        $order->house = isset($validatedData['house']) ? $validatedData['house'] : (isset($validatedData['flat']) ? $validatedData['flat'] : null);
        $order->phone = $validatedData['phone'];
        $order->product_name=$product->name;
        $order->price = $product->price+ $randomNumber;
        $order->paymentMethod = $validatedData['paymentMethod']; 
        
        $order->save();

        return redirect(route('checkout.reserved', ['order' => $order]))->with('success', 'Дані успішно передані');
    }
}
