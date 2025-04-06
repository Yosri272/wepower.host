<?php

namespace App\Repositories;

<<<<<<< HEAD
use Abedin\Boiler\Repositories\Repository;
use App\Http\Requests\CartRequest;
use App\Http\Requests\GiftRequest;
use App\Http\Resources\AddressResource;
=======
use Abedin\Maker\Repositories\Repository;
use App\Http\Requests\CartRequest;
use App\Http\Resources\ColorResource;
use App\Http\Resources\SizeResource;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Number;

class CartRepository extends Repository
{
    public static function model()
    {
        return Cart::class;
    }

    public static function ShopWiseCartProducts($groupCart)
    {
        $shopWiseProducts = collect([]);
        foreach ($groupCart as $key => $products) {
            $productArray = collect([]);

            foreach ($products as $cart) {
<<<<<<< HEAD
                $discountPercentage = $cart->product->getDiscountPercentage($cart->product->price, $cart->product->discount_price);

                $totalSold = $cart->product->orders->sum('pivot.quantity');

                $gift = null;

                if ($cart->gift_id) {
                    $gift = [
                        'id' => $cart->gift_id,
                        'cart_id' => $cart->id,
                        'name' => $cart->gift->name,
                        'thumbnail' => $cart->gift->thumbnail,
                        'price' => (float) $cart->gift->price,
                        'receiver_name' => $cart->gift_receiver_name,
                        'sender_name' => $cart->gift_sender_name,
                        'note' => $cart->gift_note,
                        'address' => $cart->address ? AddressResource::make($cart->address) : null,
                    ];
                }

                $productArray[] = (object) [
                    'id' => $cart->product->id,
                    'quantity' => (int) $cart->quantity,
                    'name' => $cart->product->name,
                    'thumbnail' => $cart->product->thumbnail,
                    'brand' => $cart->product->brand?->name ?? null,
                    'price' => (float) $cart->product->price,
                    'discount_price' => (float) $cart->product->discount_price,
                    'discount_percentage' => (float) number_format($discountPercentage, 2, '.', ''),
                    'rating' => (float) $cart->product->averageRating,
                    'total_reviews' => (string) Number::abbreviate($cart->product->reviews->count(), maxPrecision: 2),
                    'total_sold' => (string) number_format($totalSold, 0, '.', ','),
                    'color' => $cart->color,
                    'size' => $cart->size,
                    'unit' => $cart->unit,
                    'gift' => $gift,
                ];
            }

            $shop = $products[0]->shop;
            $hasGift = $shop->gifts()->isActive()->count() > 0 ? true : false;
=======

                $product = $cart->product;

                $discountPercentage = $product->getDiscountPercentage($product->price, $product->discount_price);

                $totalSold = $product->orders->sum('pivot.quantity');

                $flashSale = $product->flashSales?->first();
                $flashSaleProduct = null;
                $quantity = null;

                if ($flashSale) {
                    $flashSaleProduct = $flashSale?->products()->where('id', $product->id)->first();

                    $quantity = $flashSaleProduct?->pivot->quantity - $flashSaleProduct->pivot->sale_quantity;

                    if ($quantity == 0) {
                        $quantity = null;
                        $flashSaleProduct = null;
                    } else {
                        $discountPercentage = $flashSale?->pivot->discount;
                    }
                }

                $size = $product->sizes()?->where('id', $cart->size)->first();
                $color = $product->colors()?->where('id', $cart->color)->first();

                $sizePrice = $size?->pivot?->price ?? 0;
                $colorPrice = $color?->pivot?->price ?? 0;
                $extraPrice = $sizePrice + $colorPrice;

                $discountPrice = $product->discount_price > 0 ? ($product->discount_price + $extraPrice) : 0;
                if ($flashSaleProduct) {
                    $discountPrice = $flashSaleProduct->pivot->price + $extraPrice;
                }

                $mainPrice = $product->price + $extraPrice;

                // calculate vat taxes
                $priceTaxAmount = 0;
                $discountTaxAmount = 0;
                foreach ($product->vatTaxes ?? [] as $tax) {
                    if ($tax->percentage > 0) {
                        $priceTaxAmount += $mainPrice * ($tax->percentage / 100);
                        $discountPrice > 0 ? $discountTaxAmount += $discountPrice * ($tax->percentage / 100) : null;
                    }
                }

                $mainPrice += $priceTaxAmount;
                $discountPrice > 0 ? $discountPrice += $discountTaxAmount : null;

                if ($discountPrice > 0) {
                    $discountPercentage = ($mainPrice - $discountPrice) / $mainPrice * 100;
                }

                $productArray[] = (object) [
                    'id' => $product->id,
                    'quantity' => (int) $cart->quantity,
                    'name' => $product->name,
                    'thumbnail' => $product->thumbnail,
                    'brand' => $product->brand?->name ?? null,
                    'price' => (float) number_format($mainPrice, 2, '.', ''),
                    'discount_price' => (float) number_format($discountPrice, 2, '.', ''),
                    'discount_percentage' => (float) number_format($discountPercentage, 2, '.', ''),
                    'rating' => (float) $product->averageRating,
                    'total_reviews' => (string) Number::abbreviate($product->reviews->count(), maxPrecision: 2),
                    'total_sold' => (string) number_format($totalSold, 0, '.', ','),
                    'color' => $color ? ColorResource::make($color) : null,
                    'size' => $size ? SizeResource::make($size) : null,
                    'unit' => $cart->unit,
                ];
            }

            $shop = $products[0]?->shop;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $shopWiseProducts[] = (object) [
                'shop_id' => $key,
                'shop_name' => $shop->name,
                'shop_logo' => $shop->logo,
                'shop_rating' => (float) $shop->averageRating,
<<<<<<< HEAD
                'has_gift' => (bool) $hasGift,
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'products' => $productArray,

            ];
        }

        return $shopWiseProducts;
    }

    /**
     * Store or update cart by request.
     */
    public static function storeOrUpdateByRequest(CartRequest $request, Product $product): Cart
    {
<<<<<<< HEAD
        $size = $request->size ?? $product->sizes?->first()?->name;
        $color = $request->color ?? $product->colors?->first()?->name;
        $unit = $request->unit ?? $product->units?->first()?->name;
=======
        $size = $request->size;
        $color = $request->color;
        $unit = $request->unit ?? $product->unit?->name;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $isBuyNow = $request->is_buy_now ?? false;

        $customer = auth()->user()->customer;

        $cart = $customer->carts()?->where('product_id', $product->id)->where('is_buy_now', $isBuyNow)->first();

        if ($cart) {
            $cart->update([
<<<<<<< HEAD
                'quantity' => $cart->quantity + 1,
=======
                'quantity' => $isBuyNow ? 1 : $cart->quantity + 1,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'size' => $request->size ?? $cart->size,
                'color' => $request->color ?? $cart->color,
                'unit' => $request->unit ?? $cart->unit,
            ]);

            return $cart;
        }

        return self::create([
            'product_id' => $request->product_id,
            'shop_id' => $product->shop->id,
            'is_buy_now' => $isBuyNow,
            'customer_id' => $customer->id,
            'quantity' => $request->quantity ?? 1,
            'size' => $size,
            'color' => $color,
            'unit' => $unit,
        ]);
    }

    public static function checkoutByRequest($request, $carts)
    {
        $totalAmount = 0;
        $deliveryCharge = 0;
<<<<<<< HEAD
        $giftCharge = 0;
        $couponDiscount = 0;
        $payableAmount = 0;

        if (! $carts->isEmpty()) {

            foreach ($carts as $cart) {
                $price = $cart->product->discount_price > 0 ? $cart->product->discount_price : $cart->product->price;
                $totalAmount += $price * $cart->quantity;
                if ($cart->gift) {
                    $giftCharge += $cart->gift->price;
                }
            }

            $groupCarts = $carts->groupBy('shop_id');

            // get delivery charge
            $deliveryCharge = 0;
            foreach ($groupCarts as $shopId => $shopCarts) {

                $productQty = 0;

                foreach ($shopCarts as $cart) {
                    if ($cart->address && $cart->gift) {
                        $deliveryCharge += getDeliveryCharge($cart->quantity);
                    } else {
                        $productQty += $cart->quantity;
                    }
                }

                if ($productQty > 0) {
                    $deliveryCharge += getDeliveryCharge($productQty);
                }
            }

            // generate array for get discount
            $products = collect([]);
            foreach ($carts as $cart) {
                $products->push([
                    'id' => $cart->product_id,
                    'quantity' => (int) $cart->quantity,
                    'shop_id' => $cart->shop_id,
                ]);
            }
            $array = (object) [
                'coupon_code' => $request->coupon_code,
                'products' => $products,
            ];

            // get coupon discount
            $getDiscount = CouponRepository::getCouponDiscount($array);

            $couponDiscount = $getDiscount['discount_amount'];

            $totalAmount += $giftCharge;

            $payableAmount = $totalAmount + $deliveryCharge - $couponDiscount;
        }

=======
        $couponDiscount = 0;
        $payableAmount = 0;

        $shopWiseTotalAmount = [];
        $totalOrderTaxAmount = 0;
        $vatTaxesArray = [];

        foreach ($carts ?? [] as $cart) {

            if (! $cart) {
                continue;
            }

            $product = $cart->product;
            $flashSale = $product->flashSales?->first();
            $flashSaleProduct = null;
            $quantity = null;

            $price = $product->discount_price > 0 ? $product->discount_price : $product->price;

            if ($flashSale) {
                $flashSaleProduct = $flashSale?->products()->where('id', $product->id)->first();

                $quantity = $flashSaleProduct?->pivot->quantity - $flashSaleProduct->pivot->sale_quantity;

                if ($quantity == 0) {
                    $quantity = null;
                    $flashSaleProduct = null;
                } else {
                    $price = $flashSaleProduct->pivot->price;
                }
            }

            $sizePrice = $product->sizes()?->where('id', $cart->size)->first()?->pivot?->price ?? 0;
            $price = $price + $sizePrice;

            $colorPrice = $product->colors()?->where('id', $cart->color)->first()?->pivot?->price ?? 0;
            $price = $price + $colorPrice;

            // get shop wise total amount
            $shop = $product->shop;
            if (array_key_exists($shop->id, $shopWiseTotalAmount)) {
                $currentAmount = $shopWiseTotalAmount[$shop->id];
                $shopWiseTotalAmount[$shop->id] = $currentAmount + ($price * $cart->quantity);
            } else {
                $shopWiseTotalAmount[$shop->id] = $price * $cart->quantity;
            }

            $totalAmount += $price * $cart->quantity;
        }

        $groupCarts = $carts->groupBy('shop_id');

        // get delivery charge
        $deliveryCharge = 0;
        foreach ($groupCarts as $shopId => $shopCarts) {

            $productQty = 0;

            foreach ($shopCarts as $cart) {
                $productQty += $cart->quantity;
            }

            if ($productQty > 0) {
                $deliveryCharge += getDeliveryCharge($productQty);
            }
        }

        // generate array for get discount
        $products = collect([]);
        foreach ($carts as $cart) {
            $products->push([
                'id' => $cart->product_id,
                'quantity' => (int) $cart->quantity,
                'shop_id' => $cart->shop_id,
            ]);
        }
        $array = (object) [
            'coupon_code' => $request->coupon_code,
            'products' => $products,
        ];

        // get coupon discount
        $getDiscount = CouponRepository::getCouponDiscount($array);

        $couponDiscount = $getDiscount['discount_amount'];

        $payableAmount = $totalAmount + $deliveryCharge - $couponDiscount;

        // get order base tax
        $vatTaxes = VatTaxRepository::getActiveVatTaxes();

        foreach ($shopWiseTotalAmount as $shopId => $subtotal) {

            $thisFinalTax = [];

            foreach ($vatTaxes as $vatTax) {
                if ($vatTax->name && $vatTax->percentage > 0) {

                    $totalTaxAmount = round($subtotal * ($vatTax->percentage / 100), 2);

                    if (array_key_exists($vatTax->id, $thisFinalTax)) {
                        $currentAmount = $thisFinalTax[$vatTax->id];
                        $thisFinalTax[$vatTax->id] = $currentAmount + $totalTaxAmount;
                    } else {
                        $thisFinalTax[$vatTax->id] = $totalTaxAmount;
                    }
                    $totalOrderTaxAmount += $totalTaxAmount;
                }
            }

            $vatTaxesArray = $vatTaxes->map(function ($vatTax) use ($thisFinalTax) {
                return [
                    'id' => $vatTax->id,
                    'name' => $vatTax->name,
                    'percentage' => $vatTax->percentage,
                    'amount' => $thisFinalTax[$vatTax->id] ?? 0,
                ];
            })->toArray();
        }

        $payableAmount += $totalOrderTaxAmount;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return [
            'total_amount' => (float) round($totalAmount, 2),
            'delivery_charge' => (float) round($deliveryCharge, 2),
            'coupon_discount' => (float) round($couponDiscount, 2),
<<<<<<< HEAD
            'payable_amount' => (float) round($payableAmount, 2),
            'gift_charge' => (float) round($giftCharge, 2),
        ];
    }

    public static function giftAddToCart(GiftRequest $request, Cart $cart): Cart
    {
        $cart->update([
            'gift_id' => $request->gift_id,
            'gift_receiver_name' => $request->receiver_name,
            'gift_sender_name' => $request->sender_name ?? auth()->user()->name,
            'gift_note' => $request->note,
            'address_id' => $request->address_id,
        ]);

        return $cart;
    }

    public static function giftDeleteToCart($request)
    {
        $cart = self::find($request->cart_id);

        if ($cart) {
            $cart->update([
                'gift_id' => null,
                'gift_receiver_name' => null,
                'gift_sender_name' => null,
                'gift_note' => null,
                'address_id' => null,
            ]);
        }

        return $cart;
    }
=======
            'order_tax_amount' => (float) round($totalOrderTaxAmount, 2),
            'payable_amount' => (float) round($payableAmount, 2),
            'all_vat_taxes' => $vatTaxesArray,
        ];
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
