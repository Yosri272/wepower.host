<?php

namespace App\Http\Resources;

<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
<<<<<<< HEAD
        $estimatedDelivery = $this->delivered_at ? Carbon::parse($this->delivered_at)->format('d M, Y h:i A') : null;
        if (! $this->delivered_at) {
            $shopEstimate = $this->shop->estimated_delivery_time ?? 3;
            $estimatedDelivery = Carbon::parse($this->created_at)->addDays($shopEstimate)->format('d M, Y');
        }
=======
        $estimatedDelivery = $this->shop?->estimated_delivery_time ?? '2-4 days';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return [
            'order_status' => $this->order_status,
            'total_amount' => $this->total_amount,
            'discount' => $this->discount,
            'delivery_charge' => $this->delivery_charge,
            'payable_amount' => $this->payable_amount,
<<<<<<< HEAD
            'estimated_delivery_time' => $estimatedDelivery,
=======
            'estimated_delivery_time' => (string) $estimatedDelivery,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'address' => AddressResource::make($this->order?->address),
        ];
    }
}
