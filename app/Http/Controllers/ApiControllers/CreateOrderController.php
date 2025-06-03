<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;

class CreateOrderController extends Controller
{
    /**
     * Summary of order
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function order(int $id): JsonResponse
    {

        $product = Product::findOrFail($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json(['product' => $product,]);
    }

    /**
     * Summary of checkout
     * @param \App\Http\Requests\OrderRequest $request
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function checkout(OrderRequest $request, int $id): JsonResponse
    {

        $randomNumber = $request->input('randomNumber');

        $product = Product::findOrFail($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $validatedData = $request->validated();

        $order = new Order();

        $orderNumber = rand(1500, 50000);
        $order->order_number = $orderNumber;
        $order->street = $validatedData['street'];
        $order->region = $validatedData['region'];
        $order->city = $validatedData['city'];
        $order->zipcode = $validatedData['zipcode'];
        $order->house = isset($validatedData['house']) ? $validatedData['house'] : (isset($validatedData['flat']) ? $validatedData['flat'] : null);
        $order->phone = $validatedData['phone'];
        $order->product_name = $product->name;
        $order->price = $product->price + $randomNumber;
        $order->paymentMethod = $validatedData['payment_method'];

        $order->save();

        return response()->json([
            'product' => $product,
            'order' => $order
        ]);
    }

    public function trackNumber(): JsonResponse
    {
        $order = Order::paginate(5);

        if (!$order) {
            return response()->json(["message" => "Order not found"]);
        }

        return response()->json(['order' => $order]);
    }
}
