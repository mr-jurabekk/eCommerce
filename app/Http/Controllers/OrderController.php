<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return auth()->user()->orders;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $sum = 0;

        $products = [];
        $notFound = [];

        $address = UserAddress::find($request->address_id);


        foreach ($request['products'] as $requestProduct){
            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);
            $product->quantity = $requestProduct['quantity'];
//            dd($product->quantity);


            if ($product->stocks()->find($requestProduct['stock_id']) &&
                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
            ){
                $productWithStock = $product->withStock($requestProduct['stock_id']);
                $productResource = new ProductResource($productWithStock);

                $sum += $productResource['price'];
                $products[] = $productResource->resolve();
            }else{
                $notFound[] = $requestProduct;
            }
        }

        if ($notFound === [] && $products !== [] && $sum !== 0){
            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'sum' => $sum,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'status_id' => in_array($request['payment_type_id'], [1,2]) ? 1 : 7, // To'lov naqt bo'lsa new click bolsa waiting_payment bo'ladi
                'products' => $products,
                'address' => $address,
            ]);

            if ($order){
                foreach ($products as $product){
                    $stock = Stock::find($product['inventory'][0]['id']);

                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
            }
            return 'success';
        }
        else{
            return response([
               'success' => false,
               'message' => 'Some products are not found or do not have sufficient number!',
                'Not found products' => $notFound,
            ]);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
