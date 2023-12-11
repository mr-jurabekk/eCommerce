<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserPaymentCardResource;
use App\Models\UserPaymentCards;
use App\Http\Requests\StoreUserPaymentCardsRequest;
use App\Http\Requests\UpdateUserPaymentCardsRequest;

class UserPaymentCardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return  UserPaymentCardResource::collection(auth()->user()->paymentCards);
    }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserPaymentCardsRequest $request)
    {
//            dd(substr($request->number, -4));
        $card = auth()->user()->paymentCards()->create([
            'name' => encrypt($request->name),
            'number' => encrypt($request->number),
            'holder_name' => encrypt($request->holder_name),
            'exp_date' => encrypt($request->exp_date),
            'payment_card_type_id' =>$request->payment_card_type_id,
            'last_four_numbers' => encrypt(substr($request->number, -4)),
        ]);


        return $this->success('card added');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserPaymentCardsRequest $request, UserPaymentCards $userPaymentCards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPaymentCards $userPaymentCards)
    {
        //
    }
}
