<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this -> id,
            'name' => $this -> getTranslations('name'),
            'price' => $this -> price,
            'order_quantity' => $this->when(isset($this->quantity), $this->quantity),
            'description' => $this -> getTranslations('description'),
            'category' => new CategoryResource($this->category),
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this -> updated_at,
            'updated_at' => $this -> created_at,

        ];
    }
}
