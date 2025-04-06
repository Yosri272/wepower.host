<?php

namespace App\Repositories;

<<<<<<< HEAD
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Enums\DiscountType;
use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
<<<<<<< HEAD
use App\Http\Requests\BuyNowStoreRequest;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderRequestV1;
use App\Models\AdminCoupon;
use App\Models\GeneraleSetting;
use App\Models\Order;
use App\Models\OrderGift;
use App\Models\Payment;
use App\Models\Product;
=======
use App\Events\OrderMailEvent;
use App\Http\Requests\OrderRequest;
use App\Models\AdminCoupon;
use App\Models\GeneraleSetting;
use App\Models\Order;
use App\Models\OrderVatTax;
use App\Models\Payment;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Models\Shop;
use App\Services\NotificationServices;

class OrderRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Order::class;
    }

<<<<<<< HEAD
    public static function getShopSales($shopId){
        return self::query()->withoutGlobalScopes()->where('shop_id', $shopId)->get();
    }

    /**
     * Store new order
     */
    public static function storeByRequest(OrderRequest $request, $paymentMethod): Payment
    {
        $productsCollection = collect($request->products);
        $shopProducts = $productsCollection->groupBy('shop_id');

        $lastOrderId = self::query()->max('id');

        $totalPayableAmount = 0;

        $payment = Payment::create([
            'amount' => $totalPayableAmount,
            'payment_method' => $request->payment_method,
        ]);

        foreach ($shopProducts as $shopId => $products) {

            $shop = Shop::find($shopId);
            $getAmounts = self::getShopWiseAmounts($shop, $products, $request->coupon_id);

            $order = self::create([
                'shop_id' => $shop->id,
                'order_code' => str_pad($lastOrderId + 1, 6, '0', STR_PAD_LEFT),
                'prefix' => $shop->prefix ?? 'RC',
                'customer_id' => auth()->user()->customer->id,
                'coupon_id' => $getAmounts['coupon'],
                'delivery_charge' => $getAmounts['deliveryCharge'],
                'payable_amount' => $getAmounts['payableAmount'],
                'total_amount' => $getAmounts['totalAmount'],
                'coupon_discount' => $getAmounts['discount'],
                'payment_method' => $paymentMethod->value,
                'order_status' => OrderStatus::PENDING->value,
                'address_id' => $request->address_id,
                'instruction' => $request->note,
                'payment_status' => PaymentStatus::PENDING->value,
            ]);

            $totalPayableAmount += $getAmounts['payableAmount'];
            $payment->orders()->attach($order->id);

            foreach ($products as $product) {
                Product::where('id', $product['id'])->decrement('quantity', $product['quantity']);
                $order->products()->attach($product['id'], [
                    'quantity' => $product['quantity'],
                    'color' => array_key_exists('color', $product) ? $product['color'] : null,
                    'size' => array_key_exists('size', $product) ? $product['size'] : null,
                    'unit' => array_key_exists('unit', $product) ? $product['unit'] : null,
                ]);

                auth()->user()->customer->carts()?->where('product_id', $product['id'])?->delete();
            }
        }

        $payment->update([
            'amount' => $totalPayableAmount,
        ]);

        $payment->refresh();

        return $payment;
=======
    public static function getShopSales($shopId)
    {
        return self::query()->withoutGlobalScopes()->where('shop_id', $shopId)->get();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Store new order from cart
     */
<<<<<<< HEAD
    public static function storeByrequestFromCart(OrderRequestV1 $request, $paymentMethod, $carts): Payment
=======
    public static function storeByRequestFromCart(OrderRequest $request, $paymentMethod, $carts): Payment
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $totalPayableAmount = 0;

        $payment = Payment::create([
            'amount' => $totalPayableAmount,
            'payment_method' => $request->payment_method,
        ]);

        $shopProducts = $carts->groupBy('shop_id');

        foreach ($shopProducts as $shopId => $cartProducts) {

            $shop = Shop::find($shopId);

<<<<<<< HEAD
            $newCartProducts = [];

            $giftProcucts = [];

            foreach ($cartProducts as $carProduct) {
                if ($carProduct->gift && $carProduct->address_id && $request->address_id != $carProduct->address_id) {
                    $giftProcucts[] = $carProduct;
                } else {
                    $newCartProducts[] = $carProduct;
                }
            }

            foreach ($giftProcucts as $giftProduct) {

                $getCartAmounts = self::getCartWiseAmounts($shop, $giftProduct, $request->coupon_code);

                $order = self::createNewOrder($request, $shop, $paymentMethod, $getCartAmounts);

                $totalPayableAmount += $getCartAmounts['payableAmount'];

                $payment->orders()->attach($order->id);

                $giftProduct->product->decrement('quantity', $giftProduct->quantity);

                $order->products()->attach($giftProduct->product->id, [
                    'quantity' => $giftProduct->quantity,
                    'color' => $giftProduct->color,
                    'size' => $giftProduct->size,
                    'unit' => $giftProduct->unit,
                    'is_gift' => true,
                ]);

                $orderGift = OrderGift::create([
                    'order_id' => $order->id,
                    'gift_id' => $giftProduct->gift_id,
                    'address_id' => $giftProduct->address_id,
                    'sender_name' => $giftProduct->gift_sender_name,
                    'receiver_name' => $giftProduct->gift_receiver_name,
                    'price' => $giftProduct->gift->price,
                    'note' => $giftProduct->gift_note,
                ]);

                $order->update([
                    'order_gift_id' => $orderGift->id,
                    'address_id' => $giftProduct->address_id,
                    'instruction' => $giftProduct->gift_note,
                ]);
            }

            $getCartAmounts = self::getCartWiseAmounts($shop, collect($newCartProducts), $request->coupon_code);
=======
            $getCartAmounts = self::getCartWiseAmounts($shop, collect($cartProducts), $request->coupon_code);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $order = self::createNewOrder($request, $shop, $paymentMethod, $getCartAmounts);

            $totalPayableAmount += $getCartAmounts['payableAmount'];
            $payment->orders()->attach($order->id);

<<<<<<< HEAD
            foreach ($newCartProducts as $cart) {

                $cart->product->decrement('quantity', $cart->quantity);

                $order->products()->attach($cart->product->id, [
                    'quantity' => $cart->quantity,
                    'color' => $cart->color,
                    'size' => $cart->size,
                    'unit' => $cart->unit,
                    'is_gift' => $cart->gift_id ? true : false,
                ]);

                if ($cart->gift_id) {
                    $orderGift = OrderGift::create([
                        'order_id' => $order->id,
                        'gift_id' => $cart->gift_id,
                        'address_id' => $cart->address_id,
                        'sender_name' => $cart->gift_sender_name,
                        'receiver_name' => $cart->gift_receiver_name,
                        'price' => $cart->gift->price,
                        'note' => $cart->gift_note,
                    ]);

                    $order->update([
                        'order_gift_id' => $orderGift->id,
                    ]);
=======
            foreach ($cartProducts as $cart) {

                $cart->product->decrement('quantity', $cart->quantity);

                $product = $cart->product;
                $price = $product->discount_price > 0 ? $product->discount_price : $product->price;

                $flashSale = $product->flashSales?->first();
                $flashSaleProduct = null;
                $quantity = 0;

                $saleQty = $cart->quantity;

                if ($flashSale) {
                    $flashSaleProduct = $flashSale?->products()->where('id', $product->id)->first();

                    $quantity = $flashSaleProduct?->pivot->quantity - $flashSaleProduct->pivot->sale_quantity;

                    if ($quantity == 0) {
                        $flashSaleProduct = null;
                    } else {
                        $price = $flashSaleProduct->pivot->price;
                        $saleQty += $flashSaleProduct->pivot->sale_quantity;

                        $flashSale->products()->updateExistingPivot($product->id, [
                            'sale_quantity' => $saleQty,
                        ]);
                    }
                }

                $sizePrice = $product->sizes()?->where('id', $cart->size)->first()?->pivot?->price ?? 0;
                $price = $price + $sizePrice;

                $colorPrice = $product->colors()?->where('id', $cart->color)->first()?->pivot?->price ?? 0;
                $price = $price + $colorPrice;

                $size = $product->sizes()?->where('id', $cart->size)->first();
                $color = $product->colors()?->where('id', $cart->color)->first();

                $order->products()->attach($product->id, [
                    'quantity' => $cart->quantity,
                    'color' => $color?->name,
                    'size' => $size?->name,
                    'unit' => $cart->unit,
                    'price' => $price,
                ]);
            }

            foreach ($getCartAmounts['allVatTaxes'] ?? [] as $vatTax) {
                if (! $vatTax) continue;

                OrderVatTax::create([
                    'order_id' => $order->id,
                    'name' => $vatTax->name,
                    'percentage' => $vatTax->percentage,
                    'amount' => $vatTax->amount,
                ]);
            }

            $user = auth()->user();
            if ($user?->email) {
                try {
                    OrderMailEvent::dispatch($user->email, $order);
                } catch (\Throwable $th) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                }
            }
        }

        $payment->update([
            'amount' => $totalPayableAmount,
        ]);

        $isBuyNow = $request->is_buy_now ?? false;
<<<<<<< HEAD

        auth()->user()->customer->carts()->whereIn('shop_id', $request->shop_ids)->where('is_buy_now', $isBuyNow)->delete();
=======
        $customer = auth()->user()->customer;

        $customer->carts()->whereIn('shop_id', $request->shop_ids)->where('is_buy_now', $isBuyNow)->delete();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $payment;
    }

    private static function createNewOrder($request, $shop, $paymentMethod, $getCartAmounts)
    {
        $lastOrderId = self::query()->max('id');

        $order = self::create([
            'shop_id' => $shop->id,
            'order_code' => str_pad($lastOrderId + 1, 6, '0', STR_PAD_LEFT),
            'prefix' => $shop->prefix ?? 'RC',
            'customer_id' => auth()->user()->customer->id,
            'coupon_id' => $getCartAmounts['coupon'],
            'delivery_charge' => $getCartAmounts['deliveryCharge'],
            'payable_amount' => $getCartAmounts['payableAmount'],
            'total_amount' => $getCartAmounts['totalAmount'],
<<<<<<< HEAD
=======
            'tax_amount' => $getCartAmounts['totalTaxAmount'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'coupon_discount' => $getCartAmounts['discount'],
            'payment_method' => $paymentMethod->value,
            'order_status' => OrderStatus::PENDING->value,
            'address_id' => $request->address_id,
            'instruction' => $request->note,
            'payment_status' => PaymentStatus::PENDING->value,
        ]);

        return $order;
    }

<<<<<<< HEAD
    /**
     * buy now from request
     *
     * @param  mixed  $request
     * @param  mixed  $product
     */
    public static function buyNowFromRequest(BuyNowStoreRequest $request, Product $product, $paymentMethod)
    {
        $quantity = $request->quantity ?? 1;

        $totalAmount = ($product->discount_price > 0 ? $product->discount_price : $product->price) * $quantity;

        $couponDiscount = self::getCouponDiscount($totalAmount, $product->shop->id, $request->coupon_code);

        $deliveryCharge = getDeliveryCharge($quantity);

        $shop = $product->shop;

        $totalPayableAmount = $totalAmount + $deliveryCharge - $couponDiscount['total_discount_amount'];

        $lastOrderId = self::query()->max('id');

        $order = self::create([
            'shop_id' => $shop->id,
            'order_code' => str_pad($lastOrderId + 1, 6, '0', STR_PAD_LEFT),
            'prefix' => $shop->prefix ?? 'RC',
            'customer_id' => auth()->user()->customer->id,
            'coupon_id' => $couponDiscount['coupon']?->id ?? null,
            'delivery_charge' => $deliveryCharge,
            'payable_amount' => $totalPayableAmount,
            'total_amount' => $totalAmount,
            'coupon_discount' => $couponDiscount['total_discount_amount'],
            'payment_method' => $paymentMethod->value,
            'order_status' => OrderStatus::PENDING->value,
            'address_id' => $request->address_id,
            'instruction' => $request->note,
            'payment_status' => PaymentStatus::PENDING->value,
        ]);

        $product->decrement('quantity', $quantity);

        $size = $request->size ?? $product->sizes?->first()?->name;
        $color = $request->color ?? $product->colors?->first()?->name;
        $unit = $request->unit ?? $product->units?->first()?->name;

        $order->products()->attach($product->id, [
            'quantity' => $quantity,
            'color' => $color,
            'size' => $size,
            'unit' => $unit,
        ]);

        $payment = null;
        if ($paymentMethod->value != PaymentMethod::CASH->value) {
            $payment = Payment::create([
                'amount' => $totalPayableAmount,
                'payment_method' => $request->payment_method,
            ]);
            $payment->orders()->attach($order->id);
        }

        return $payment;
    }

    private static function getCartWiseAmounts(Shop $shop, $products, $couponCode = null): array
    {
        $totalAmount = 0;
        $discount = 0;
        $giftCharge = 0;
        $coupon = null;

        $orderQty = $products->sum('quantity');
        $deliveryCharge = getDeliveryCharge($orderQty);

        if (is_countable($products)) {

            foreach ($products as $cart) {
                $price = $cart->product->discount_price > 0 ? $cart->product->discount_price : $cart->product->price;

                $totalAmount += ($price * $cart->quantity);

                if ($cart->gift) {
                    $giftCharge += $cart->gift->price;
                }
            }
        } else {
            $price = $products->product->discount_price > 0 ? $products->product->discount_price : $products->product->price;
            $totalAmount = $price * $products->quantity;
            if ($products->gift) {
                $giftCharge += $products->gift->price;
            }
        }

        $totalAmount += $giftCharge;
=======
    private static function getCartWiseAmounts(Shop $shop, $carts, $couponCode = null): array
    {
        $totalAmount = 0;
        $discount = 0;
        $coupon = null;
        $totalTaxAmount = 0;

        $orderQty = $carts->sum('quantity');
        $deliveryCharge = getDeliveryCharge($orderQty);

        $allVatTaxes = [];

        foreach ($carts ?? [] as $cart) {

            if (! $cart) {
                continue;
            }

            $product = $cart->product;
            $price = $product->discount_price > 0 ? $product->discount_price : $product->price;

            $flashSale = $product->flashSales?->first();
            $flashSaleProduct = null;
            $quantity = 0;

            if ($flashSale) {
                $flashSaleProduct = $flashSale?->products()->where('id', $product->id)->first();

                $quantity = $flashSaleProduct?->pivot->quantity - $flashSaleProduct->pivot->sale_quantity;

                if ($quantity == 0) {
                    $flashSaleProduct = null;
                } else {
                    $price = $flashSaleProduct->pivot->price;
                }
            }
            $sizePrice = $product->sizes()?->where('id', $cart->size)->first()->pivot?->price ?? 0;
            $price = $price + $sizePrice;

            $colorPrice = $product->colors()?->where('id', $cart->color)->first()->pivot?->price ?? 0;
            $price = $price + $colorPrice;

            $totalAmount += ($price * $cart->quantity);
        }

        // order vat taxes
        $vatTaxes = VatTaxRepository::getActiveVatTaxes();

        foreach ($vatTaxes ?? [] as $vatTax) {
            if ($vatTax?->name && $vatTax?->percentage > 0) {
                $taxAmount = round($totalAmount * ($vatTax->percentage / 100), 2);

                $allVatTaxes[] = (object) [
                    'name' => $vatTax->name,
                    'percentage' => $vatTax->percentage,
                    'amount' => $taxAmount,
                ];

                $totalTaxAmount += $taxAmount;
            }
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        // get coupon discount
        $couponDiscount = self::getCouponDiscount($totalAmount, $shop->id, $couponCode);

        // check coupon discount amount
        if ($couponDiscount['total_discount_amount'] > 0) {
            $discount += $couponDiscount['total_discount_amount'];
            $coupon = $couponDiscount['coupon'];
        }

        // calculate payable amount
<<<<<<< HEAD
        $payableAmount = ($totalAmount + $deliveryCharge) - $discount;
=======
        $payableAmount = ($totalAmount + $deliveryCharge + $totalTaxAmount) - $discount;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        // return array
        return [
            'totalAmount' => $totalAmount,
<<<<<<< HEAD
=======
            'totalTaxAmount' => $totalTaxAmount,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'payableAmount' => $payableAmount,
            'discount' => $discount,
            'deliveryCharge' => $deliveryCharge,
            'coupon' => $coupon?->id,
<<<<<<< HEAD
            'giftCharge' => $giftCharge,
=======
            'allVatTaxes' => $allVatTaxes,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }

    /**
     * Creates a new order based on the provided order, generates a new order code,
     * and associates it with the corresponding shop orders and products.
     *
     * @param  Order  $order  The original order to be used as a base for the new order
     * @return Order The newly created order
     */
<<<<<<< HEAD
    public static function reOrder(Order $order): Order
=======
    public static function reOrder(Order $order, $payment): Order
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $lastOrderId = self::query()->max('id');

        $newOrder = self::create([
            'shop_id' => $order->shop_id,
            'order_code' => str_pad($lastOrderId + 1, 6, '0', STR_PAD_LEFT),
            'prefix' => 'RC',
            'customer_id' => $order->customer_id,
            'coupon_id' => $order->coupon_id ?? null,
            'delivery_charge' => $order->delivery_charge,
            'payable_amount' => $order->payable_amount,
            'total_amount' => $order->total_amount,
<<<<<<< HEAD
            'discount' => $order->discount,
            'payment_method' => $order->payment_method,
=======
            'tax_amount' => $order->tax_amount,
            'coupon_discount' => $order->coupon_discount,
            'payment_method' => $payment->payment_method ?? $order->payment_method,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'order_status' => OrderStatus::PENDING->value,
            'address_id' => $order->address_id,
            'instruction' => $order->instruction,
            'payment_status' => PaymentStatus::PENDING->value,
        ]);

        foreach ($order->products as $product) {
<<<<<<< HEAD
            Product::where('id', $product['id'])->decrement('quantity', $product['quantity']);
=======

            $qty = $product->pivot->quantity;

            $product->decrement('quantity', $qty);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $newOrder->products()->attach($product->id, [
                'quantity' => $product->pivot->quantity,
                'color' => $product->pivot->color ?? null,
                'size' => $product->pivot->size ?? null,
                'unit' => $product->pivot->unit ?? null,
<<<<<<< HEAD
            ]);
        }

        return $order;
    }

    /**
     * Calculate the total amounts and payable amount based on the given shop products.
     *
     * @param  mixed  $request  from request
     * @param  mixed  $shopProducts  the shop products array
     * @return array
     */
    private static function getTotalAmounts($request, $shopProducts)
    {
        $totalAmount = 0;
        $payableAmount = 0;
        $discount = 0;
        $orderQty = array_sum(array_column($shopProducts, 'quantity'));
        $deliveryCharge = getDeliveryCharge($orderQty);

        foreach ($shopProducts as $shopId => $products) {
            foreach ($products as $orderProduct) {
                $product = Product::find($orderProduct['id']);
                $amount = $product->discount_price > 0 ? $product->discount_price : $product->price;
                $totalAmount += ($amount * $orderProduct['quantity']);
            }
        }

        $payableAmount = ($totalAmount + $deliveryCharge) - $discount;

        return [
            'totalAmount' => $totalAmount,
            'payableAmount' => $payableAmount,
            'discount' => $discount,
            'deliveryCharge' => $deliveryCharge,
        ];
    }

    /**
     * Get shop wise amounts, discount, delivery charge, total.
     *
     * @param  Shop  $shop  The shop object.
     * @param  mixed  $products  The products array.
     * @return array
     */
    private static function getShopWiseAmounts(Shop $shop, $products, $couponCode = null)
    {
        $totalAmount = 0;
        $discount = 0;
        $coupon = null;

        $orderQty = $products->sum('quantity');
        $deliveryCharge = getDeliveryCharge($orderQty);

        // get total amount
        foreach ($products as $orderProduct) {
            $product = Product::find($orderProduct['id']);
            $amount = $product->discount_price > 0 ? $product->discount_price : $product->price;
            $totalAmount += ($amount * $orderProduct['quantity']);
        }

        // get coupon discount
        $couponDiscount = self::getCouponDiscount($totalAmount, $shop->id, $couponCode);

        // check coupon discount amount
        if ($couponDiscount['total_discount_amount'] > 0) {
            $discount += $couponDiscount['total_discount_amount'];
            $coupon = $couponDiscount['coupon'];
        }

        // calculate payable amount
        $payableAmount = ($totalAmount + $deliveryCharge) - $discount;

        // return array
        return [
            'totalAmount' => $totalAmount,
            'payableAmount' => $payableAmount,
            'discount' => $discount,
            'deliveryCharge' => $deliveryCharge,
            'coupon' => $coupon?->id,
        ];
=======
                'price' => $product->pivot->price,
            ]);
        }

        foreach ($order->vatTaxes ?? [] as $vatTax) {
            if (! $vatTax) {
                continue;
            }
            OrderVatTax::create([
                'order_id' => $newOrder->id,
                'name' => $vatTax->name,
                'percentage' => $vatTax->percentage,
                'amount' => $vatTax->amount,
            ]);
        }

        $user = auth()->user();
        if ($user?->email) {
            try {
                OrderMailEvent::dispatch($user->email, $newOrder);
            } catch (\Throwable $th) {
            }
        }

        return $order;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get applied coupon orders
     *
     * @param  mixed  $coupon
     * @return collection
     */
    public static function getAppliedCouponOrders($coupon)
    {
        return auth()->user()->customer?->orders()?->where('coupon_id', $coupon->id)->get();
    }

    /**
     * Get coupon discount
     *
     * @param  mixed  $totalAmount
     * @param  mixed  $shopId
     * @param  mixed  $couponCode
     * @return array
     */
    public static function getCouponDiscount($totalAmount, $shopId, $couponCode = null)
    {
        $totalOrderAmount = 0;
        $totalDiscountAmount = 0;
        $coupon = null;

        if ($couponCode) {
            $shop = Shop::find($shopId);
            $coupon = $shop->coupons()->where('code', $couponCode)->Active()->isValid()->first();

            if (! $coupon) {
                $coupon = AdminCoupon::where('shop_id', $shopId)->whereHas('coupon', function ($query) use ($couponCode) {
                    $query->where('code', $couponCode)->Active()->isValid();
                })->first()?->coupon;
            }

            if ($coupon) {
                $discount = self::getCouponDiscountAmount($coupon, $totalAmount);

                $totalOrderAmount += $discount['total_amount'];
                $totalDiscountAmount += $discount['discount_amount'];
            }
        } else {

            $collectedCoupons = CouponRepository::getCollectedCoupons($shopId);

            foreach ($collectedCoupons as $collectedCoupon) {

                $discount = self::getCouponDiscountAmount($collectedCoupon, $totalAmount);

                $totalOrderAmount += $discount['total_amount'];

                if ($discount['discount_amount'] > 0) {
                    $coupon = $collectedCoupon;
                    $totalDiscountAmount += $discount['discount_amount'];
                    break;
                }
            }
        }

        return [
            'total_order_amount' => $totalOrderAmount,
            'total_discount_amount' => $totalDiscountAmount,
            'coupon' => $coupon,
        ];
    }

    /**
     * Get coupon discount amount
     *
     * @param  mixed  $coupon
     * @param  mixed  $totalAmount
     * @return array
     */
    private static function getCouponDiscountAmount($coupon, $totalAmount)
    {
        $appliedOrders = self::getAppliedCouponOrders($coupon);

        $amount = $coupon->type->value == DiscountType::PERCENTAGE->value ? ($totalAmount * $coupon->discount) / 100 : $coupon->discount;

        $couponDiscount = 0;
        if ($appliedOrders->count() < ($coupon->limit_for_user ?? 500) && $coupon->min_amount <= $totalAmount) {
            $couponDiscount = $amount;
            if ($coupon->max_discount_amount && $coupon->max_discount_amount < $amount) {
                $couponDiscount = $coupon->max_discount_amount;
            }
        }

        return [
            'total_amount' => $totalAmount,
            'discount_amount' => (float) round($couponDiscount ?? 0, 2),
        ];
    }

    /**
     * Order status update from rider
     */
    public static function OrderStatusUpdateFromRider(Order $order, $driverOrder, $orderStatus)
    {
        if ($orderStatus == OrderStatus::PROCESSING->value) {
            $driverOrder->update(['is_accept' => true]);
        }

        $order->update([
            'order_status' => ($orderStatus == 'deliveredAndPaid') ? OrderStatus::DELIVERED->value : $orderStatus,
        ]);

        if ($orderStatus == OrderStatus::PICKUP->value) {
            $order->update([
                'pick_date' => now(),
                'order_status' => OrderStatus::ON_THE_WAY->value,
            ]);
        }

        $paymentMethod = $order->payment_method->value;

        $isDelivery = false;
        if ($paymentMethod != PaymentMethod::CASH->value && $orderStatus == OrderStatus::DELIVERED->value) {
            $isDelivery = true;
        }

        if (($orderStatus == 'deliveredAndPaid') || $isDelivery) {

            $driverOrder->update(['is_completed' => true]);

            if ($paymentMethod == PaymentMethod::CASH->value) {
                $driverOrder->update(['cash_collect' => true]);

                $totalCashCollected = $driverOrder->driver->total_cash_collected + $order->payable_amount;

                $driverOrder->driver->update([
                    'total_cash_collected' => $totalCashCollected,
                ]);
            }

            $generaleSetting = GeneraleSetting::first();

            $commission = 0;

            if ($generaleSetting?->commission_charge != 'monthly') {

                if ($generaleSetting?->commission_type != 'fixed') {
                    $commission = $order->total_amount * $generaleSetting->commission / 100;
                } else {
                    $commission = $generaleSetting->commission ?? 0;
                }
            }

            $order->update([
                'delivery_date' => now(),
                'delivered_at' => now(),
                'payment_status' => PaymentStatus::PAID->value,
                'admin_commission' => $commission,
            ]);

            $wallet = $order->shop->user->wallet;

            WalletRepository::updateByRequest($wallet, $order->total_amount, 'credit');

<<<<<<< HEAD
            TransactionRepository::storeByRequest($wallet, $commission, 'debit', true, true, 'admin commission added', 'order commision added in admin wallet');
=======
            TransactionRepository::storeByRequest($wallet, $commission, 'debit', true, true, 'admin commission added', 'order commission added in admin wallet');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $driverWallet = DriverRepository::getWallet($driverOrder->driver);

            $deliveryCharge = $order->delivery_charge;

            WalletRepository::updateByRequest($driverWallet, $deliveryCharge, 'credit');
        }

<<<<<<< HEAD
        $message = "Hello {$order->customer->user->name}. Your order status is {$orderStatus}. OrderID: {$order->prefix}{$order->order_code}";

        $title = 'Order Status Update';

        if ($order->customer->user->devices->count() > 0) {

            $deviceKeys = $order->customer->user->devices->pluck('key')->toArray();
            try {
                NotificationServices::sendNotification($message, $deviceKeys, $title);
            } catch (\Exception $e) {}
=======
        $user = $order->customer?->user;

        $message = "Hello {$user?->name}. Your order status is {$orderStatus}. OrderID: {$order->prefix}{$order->order_code}";

        $title = 'Order Status Update';

        $devices = $user?->devices;

        if (count($devices) > 0) {

            $deviceKeys = $devices->pluck('key')->toArray();
            try {
                NotificationServices::sendNotification($message, $deviceKeys, $title);
            } catch (\Throwable $th) {
            }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        NotificationRepository::storeByRequest((object) [
            'title' => $title,
            'content' => $message,
<<<<<<< HEAD
            'user_id' => $order->customer->user_id,
=======
            'user_id' => $user?->id,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'url' => $order->id,
            'type' => 'order',
            'icon' => null,
            'is_read' => false,
        ]);
    }
}
