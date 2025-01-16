<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateOrderController extends Controller
{
    public function order(Request $request, $id){
   
        $product = Product::findOrFail($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    
        return response()->json(['product' =>$product,]);   
    }

    public function checkout(OrderRequest $request,$id)
    {
        
        $randomNumber = $request->input('randomNumber');

        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

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

        return response()->json([
            'product' =>$product,
            'order'=>$order
        ]);
    }

    public function trackNumber(){

        $order =Orders::paginate(5);

        if(!$order) {
            return response()->json(["message" => "Orders not found"]);
        }
        return response()->json(['order'=>$order]);
    }
}
