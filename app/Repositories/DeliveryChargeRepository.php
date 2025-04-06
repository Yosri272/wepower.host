<?php

namespace App\Repositories;

<<<<<<< HEAD
use Abedin\Boiler\Repositories\Repository;
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Http\Requests\DeliveryChargeRequest;
use App\Models\DeliveryCharge;

class DeliveryChargeRepository extends Repository
{
    public static function model()
    {
        return DeliveryCharge::class;
    }

    public static function storeByRequest(DeliveryChargeRequest $request): DeliveryCharge
    {
        return self::create([
            'charge' => $request->delivery_charge,
            'min_qty' => $request->min_order_qty,
            'max_qty' => $request->max_order_qty,
        ]);
    }

    public static function updateByRequest(DeliveryChargeRequest $request, DeliveryCharge $deliveryCharge): DeliveryCharge
    {
        $deliveryCharge->update([
            'charge' => $request->delivery_charge,
            'min_qty' => $request->min_order_qty,
            'max_qty' => $request->max_order_qty,
        ]);

        return $deliveryCharge;
    }
}
