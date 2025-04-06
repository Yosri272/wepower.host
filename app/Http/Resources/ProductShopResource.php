<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'logo' => $this->logo,
            'rating' => (float) ($this->averageRating > 0) ? $this->averageRating : 5.0,
<<<<<<< HEAD
            'estimated_delivery_time' => (string) ($this->estimated_delivery_time ?? 4).' days',
=======
            'estimated_delivery_time' => (string) ($this->estimated_delivery_time ?? '2-3 days'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'delivery_charge' => (float) getDeliveryCharge(1),
        ];
    }
}
