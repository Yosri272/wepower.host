<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SellerProductResource extends JsonResource
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
<<<<<<< HEAD
            'brand' => $this->brand?->name ?? null,
            'thumbnail' => $this->thumbnail,
            'price' => (float) $this->discount_price > 0 ? $this->discount_price : $this->price,
            'quantity' => (int) $this->pivot->quantity,
            'color' => $this->pivot->color ?? null,
            'size' => $this->pivot->size ?? null,
            'unit' => $this->pivot->unit ?? null,
=======
            'thumbnail' => $this->thumbnail,
            'price' => (float) $this->price,
            'discount_price' => (float) $this->discount_price,
            'quantity' => (int) $this->quantity,
            'brand' => $this->brand?->name ?? null,
            'is_active' => (bool) $this->is_active,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}
