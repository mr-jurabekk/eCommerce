<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $result = [
            'quantity' => $this->quantity,
        ];


        return $this->getAttributes($result);

    }

    /**
     * @param array $result
     * @return array
     */
    public function getAttributes(array $result)
    {
        $attributes = json_decode($this->attribute);

        foreach ($attributes as $stock_attribute) {
            $attribute = Attribute::find($stock_attribute->attribute_id);
            $value = Value::find($stock_attribute->value_id);

            $result[$attribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
