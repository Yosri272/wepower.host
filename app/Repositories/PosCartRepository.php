<?php

namespace App\Repositories;

<<<<<<< HEAD
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Http\Requests\PosCartRequest;
use App\Models\Coupon;
use App\Models\Customer;
<<<<<<< HEAD
use App\Models\PosCart;
use App\Models\PosCartProduct;
use App\Models\Product;
use Arafat\LaravelRepository\Repository;
=======
use App\Models\OrderVatTax;
use App\Models\PosCart;
use App\Models\PosCartProduct;
use App\Models\Product;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;

class PosCartRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return PosCart::class;
    }

    public static function getLatestCart(Request $request)
    {
<<<<<<< HEAD
        $name = $request->name ?? null;

        return self::query()->where('shop_id', auth()->user()->shop->id)->when($name, function ($query) use ($name) {
=======
        $shop = generaleSetting('shop');

        $name = $request->name ?? null;

        return self::query()->where('shop_id', $shop->id)->when($name, function ($query) use ($name) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $query->where('name', $name);
        })->whereIpAddress($request->ip())->latest('id')->first();
    }

    public static function storeByRequest(PosCartRequest $request, Product $product)
    {
<<<<<<< HEAD
        $postCart = self::query()->where('shop_id', auth()->user()->shop->id)->where('name', $request->name)->first();

        if ($postCart) {
            self::attachProduct($postCart, $product->id, $request);

            $calculateAmount = self::calculateTotal($postCart);
            $postCart->update([
=======
        $shop = generaleSetting('shop');

        $posCart = self::query()->where('shop_id', $shop->id)->where('name', $request->name)->first();

        if ($posCart) {
            self::attachProduct($posCart, $product->id, $request);

            $calculateAmount = self::calculateTotal($posCart);
            $posCart->update([
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'subtotal' => $calculateAmount['subtotal'],
                'total' => $calculateAmount['total'],
                'discount' => $calculateAmount['discount'],
            ]);
<<<<<<< HEAD
            return $postCart;
        }

        $postCart = self::create([
            'name' => $request->name ?? str()->random(12),
            'shop_id' => auth()->user()->shop->id,
            'ip_address' => $request->ip(),
            'user_id' => $request->user_id
        ]);

        self::attachProduct($postCart, $product->id, $request);

        $calculateAmount = self::calculateTotal($postCart);
        $postCart->update([
            'subtotal' => $calculateAmount['subtotal'],
            'total' => $calculateAmount['total'],
            'discount' => $calculateAmount['discount'],
        ]);

        return $postCart;
=======

            return $posCart;
        }

        $posCart = self::create([
            'name' => $request->name ?? str()->random(12),
            'shop_id' => $shop->id,
            'ip_address' => $request->ip(),
            'user_id' => $request->user_id,
        ]);

        self::attachProduct($posCart, $product->id, $request);

        $calculateAmount = self::calculateTotal($posCart);
        $posCart->update([
            'subtotal' => $calculateAmount['subtotal'],
            'total' => $calculateAmount['total'],
            'discount' => (float) $calculateAmount['discount'],
        ]);

        return $posCart;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public static function updateByRequest(PosCartRequest $request, PosCartProduct $posCartProduct)
    {
        $posCartProduct->update([
            'quantity' => $request->quantity,
            'color' => $request->color,
            'size' => $request->size,
<<<<<<< HEAD
            'unit' => $request->unit
=======
            'unit' => $request->unit,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);

        $calculateAmount = self::calculateTotal($posCartProduct->posCart);

        $posCartProduct->posCart->update([
            'subtotal' => $calculateAmount['subtotal'],
            'total' => $calculateAmount['total'],
            'discount' => $calculateAmount['discount'],
        ]);

        return $posCartProduct->posCart;
    }

    private static function attachProduct(PosCart $postCart, $productID, $request)
    {
        // check if product exist
        $existCartProduct = PosCartProduct::where('pos_cart_id', $postCart->id)->where('product_id', $productID)->where('color', $request->color)->where('size', $request->size)->first();

        if ($existCartProduct) {
            $existCartProduct->update([
<<<<<<< HEAD
                'quantity' => $request->quantity
=======
                'quantity' => $request->quantity,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ]);

            return $existCartProduct;
        }
<<<<<<< HEAD
=======

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        // attach new product
        return $postCart->products()->attach($productID, [
            'quantity' => $request->quantity,
            'color' => $request->color,
            'size' => $request->size,
            'unit' => $request->unit ?? null,
        ]);
    }

    private static function calculateTotal(PosCart $posCart)
    {
        $subtotal = 0;
        $total = 0;
        $discount = 0;

        foreach ($posCart->products as $product) {
            $productPrice = $product->discount_price > 0 ? $product->discount_price : $product->price;

<<<<<<< HEAD
            $subtotal += $product->pivot->quantity * $productPrice;
=======
            $mainProduct = Product::find($product->id);

            $size = $mainProduct->sizes()->where('id', $product->pivot->size)->first();
            $color = $mainProduct->colors()->where('id', $product->pivot->color)->first();

            $colorPrice = $color?->pivot->price ?? 0;
            $sizePrice = $size?->pivot->price ?? 0;
            $extraPrice = $colorPrice + $sizePrice;

            $subtotal += ($product->pivot->quantity * $productPrice) + $extraPrice;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $total = $subtotal - ($posCart->discount ?? 0);

        if ($posCart->coupon) {
            $couponDiscount = CouponRepository::getCouponDiscountAmount($posCart->coupon, $subtotal)['discount_amount'];

<<<<<<< HEAD
            if ($couponDiscount['discount_amount'] > 0) {
                $discount = $couponDiscount['discount_amount'];
=======
            if ($couponDiscount > 0) {
                $discount = $couponDiscount;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $total = $total - $discount;
            }
        }

        return [
            'subtotal' => $subtotal,
            'total' => $total,
            'discount' => $discount,
        ];
    }

    public static function applyCoupon($request, Coupon $coupon, PosCart $postCart)
    {
        if ($coupon) {
            $getDiscount = CouponRepository::getCouponDiscountAmount($coupon, $postCart->subtotal);

            if ($getDiscount['discount_amount'] > 0) {
                $totalAmount = $postCart->subtotal - $getDiscount['discount_amount'];

                $postCart->update([
                    'discount' => $getDiscount['discount_amount'],
                    'total' => $totalAmount,
                    'coupon_id' => $coupon->id,
                ]);
            }
        }

        return $postCart;
    }

    public static function removeCoupon(PosCart $postCart)
    {
        $postCart->update([
            'coupon_id' => null,
            'discount' => 0,
        ]);

        $calculateAmount = self::calculateTotal($postCart);

        $postCart->update([
            'subtotal' => $calculateAmount['subtotal'],
            'total' => $calculateAmount['total'],
            'discount' => $calculateAmount['discount'],
        ]);

        return $postCart;
    }

    public static function destroyProduct($request, PosCart $postCart)
    {
        $postCartProduct = PosCartProduct::find($request->pos_cart_id);
        if ($postCartProduct) {
            $postCartProduct->delete();
        }

        $calculateAmount = self::calculateTotal($postCart);
        $postCart->update([
            'subtotal' => $calculateAmount['subtotal'],
            'total' => $calculateAmount['total'],
            'discount' => $calculateAmount['discount'],
        ]);

        return $postCart;
    }

    public static function storeOrder(PosCart $posCart, $request)
    {
<<<<<<< HEAD
        $shop = auth()->user()->shop;
=======
        $shop = generaleSetting('shop');

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($request->order_type == 'draft') {
            $customer = null;
            if ($request->customer_id) {
                $customer = Customer::find($request->customer_id);
            }
            $posCart->update([
                'is_draft' => true,
                'user_id' => $customer?->user?->id ?? null,
            ]);
            self::createNewCart();
<<<<<<< HEAD
=======

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return true;
        }

        $paymentMethod = $request->payment_method == 'cash' ? PaymentMethod::CASH->value : PaymentMethod::ONLINE->value;

<<<<<<< HEAD
=======
        $vatTaxes = VatTaxRepository::getActiveVatTaxes();
        $allVatTaxes = [];
        $totalTaxAmount = 0;

        $subtotal = $posCart->subtotal;

        foreach ($vatTaxes ?? [] as $vatTax) {
            if ($vatTax?->name && $vatTax?->percentage > 0 && $subtotal > 0) {
                $taxAmount = round($subtotal * ($vatTax->percentage / 100), 2);

                $allVatTaxes[] = (object) [
                    'name' => $vatTax->name,
                    'percentage' => $vatTax->percentage,
                    'amount' => $taxAmount,
                ];

                $totalTaxAmount += $taxAmount;
            }
        }
        $total = $posCart->total ?? 0;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $lastOrderId = self::query()->max('id');
        $order = OrderRepository::create([
            'shop_id' => $shop->id,
            'pos_order' => true,
            'customer_id' => $request->customer_id ?? null,
            'order_code' => str_pad($lastOrderId + 1, 6, '0', STR_PAD_LEFT),
            'prefix' => $shop->prefix ?? 'RC',
            'coupon_id' => $posCart->coupon_id,
            'delivery_charge' => 0,
<<<<<<< HEAD
            'payable_amount' => $posCart->total,
            'total_amount' => $posCart->total,
            'coupon_discount' => $posCart->discount,
=======
            'total_amount' => $posCart->subtotal,
            'coupon_discount' => $posCart->discount,
            'tax_amount' => $totalTaxAmount,
            'payable_amount' => $total + $totalTaxAmount,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'payment_method' => $paymentMethod,
            'order_status' => OrderStatus::DELIVERED->value,
            'instruction' => $request->note,
            'payment_status' => PaymentStatus::PAID->value,
        ]);

        foreach ($posCart->products as $product) {
            $quantity = $product->quantity - $product->pivot->quantity;
            $product->update([
                'quantity' => ($quantity > 0) ? $quantity : 0,
            ]);
<<<<<<< HEAD
            $order->products()->attach($product->id, [
                'quantity' => $product->pivot->quantity,
                'color' => $product->pivot->color,
                'size' => $product->pivot->size,
=======

            $size = $product->sizes()?->where('id', $product->pivot->size)->first();
            $color = $product->colors()?->where('id', $product->pivot->color)->first();

            $order->products()->attach($product->id, [
                'quantity' => $product->pivot->quantity,
                'color' => $color?->name,
                'size' => $size?->name,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'unit' => $product->pivot->unit,
            ]);
        }

<<<<<<< HEAD
=======
        // store order vat taxes
        foreach ($allVatTaxes ?? [] as $vatTax) {
            if (! $vatTax) {
                continue;
            }
            OrderVatTax::create([
                'order_id' => $order->id,
                'name' => $vatTax->name,
                'percentage' => $vatTax->percentage,
                'amount' => $vatTax->amount,
            ]);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $posCart->products()->detach();
        $posCart->delete();

        self::createNewCart();

        return $order;
    }

    private static function createNewCart()
    {
<<<<<<< HEAD
        return self::create([
            'name' => str()->random(12),
            'shop_id' => auth()->user()->shop->id,
=======
        $shop = generaleSetting('shop');

        return self::create([
            'name' => str()->random(12),
            'shop_id' => $shop->id,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'ip_address' => request()->ip(),
            'is_draft' => false,
        ]);
    }
}
