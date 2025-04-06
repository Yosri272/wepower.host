<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Number;

class ProductDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
<<<<<<< HEAD
        $this->load(['reviews', 'orders', 'colors', 'shop']);

        $favorite = false;
        $user = Auth::guard('api')->user();
        if ($user) {
            $favoriteIDs = $user->customer->favorites()->pluck('product_id')->toArray();
            $favorite = in_array($this->id, $favoriteIDs);
        }

        $discountPercentage = $this->getDiscountPercentage($this->price, $this->discount_price);

        $shopDistance = null;

        if ($request->has('latitude') && $request->has('longitude')) {
            $shopDistance = getDistance([$request->latitude, $request->longitude], [$this->shop->latitude, $this->shop->longitude]);
        }

        $totalSold = $this->orders->sum('pivot.quantity');

        return [
            'id' => $this->id,
            'name' => $this->name,
            'short_description' => $this->short_description,
            'price' => (float) $this->price,
            'discount_price' => (float) $this->discount_price,
            'discount_percentage' => (float) number_format($discountPercentage, 2, '.', ''),
            'rating' => (float) ($this->averageRating > 0) ? $this->averageRating : 5.0,
            'total_reviews' => (string) Number::abbreviate($this->reviews->count(), maxPrecision: 2),
            'total_sold' => (string) number_format($totalSold, 0, '.', ','),
            'quantity' => (int) $this->quantity,
=======
        $this->load(['reviews', 'orders', 'colors', 'shop', 'sizes', 'unit', 'brand', 'flashSales']);

        $lang = request()->header('accept-language') ?? 'en';

        $favorite = false;
        $user = Auth::guard('api')->user();

        if ($user && $user->customer) {
            $favorite = $user->customer->favorites()->where('product_id', $this->id)->exists();
        }

        $discountPercentage = $this->getDiscountPercentage($this->price, $this->discount_price);
        $totalSold = $this->orders->sum('pivot.quantity');

        $flashSale = $this->flashSales?->first();
        $flashSaleProduct = null;
        $quantity = null;

        if ($flashSale) {

            $flashSaleProduct = $flashSale->products()->where('id', $this->id)->first();

            $quantity = $flashSaleProduct->pivot->quantity - $flashSaleProduct->pivot->sale_quantity;

            if ($quantity == 0) {
                $quantity = null;
                $flashSaleProduct = null;
            } else {
                $discountPercentage = $flashSale->pivot->discount;
            }
        }

        $price = $this->price;
        $discountPrice = $flashSaleProduct ? $flashSaleProduct->pivot?->price : $this->discount_price;

        $translation = $this->translations()?->where('lang', $lang)->first();
        $name = $translation?->name ?? $this->name;
        $description = $translation?->description ?? $this->description;
        $shortDescription = $translation?->short_description ?? $this->short_description;

        $brandTranslation = $this->brand?->translations()?->where('lang', $lang)->first();
        $brandName = $brandTranslation?->name ?? $this->brand?->name;
        $shop = $this->shop;

        return [
            'id' => $this->id,
            'name' => $name,
            'short_description' => $shortDescription,
            'price' => (float) number_format($price, 2, '.', ''),
            'discount_price' => (float) number_format($discountPrice, 2, '.', ''),
            'discount_percentage' => (float) number_format($discountPercentage, 2, '.', ''),
            'rating' => (float) $this->averageRating ?? 0.0,
            'total_reviews' => (string) Number::abbreviate($this->reviews?->count(), maxPrecision: 2),
            'total_sold' => (string) number_format($totalSold, 0, '.', ','),
            'quantity' => (int) ($quantity ?? $this->quantity),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'is_favorite' => (bool) $favorite,
            'thumbnails' => $this->thumbnails(),
            'sizes' => SizeResource::collection($this->sizes),
            'colors' => ColorResource::collection($this->colors),
<<<<<<< HEAD
            'brand' => $this->brand?->name ?? null,
            'units' => $this->units,
            'shop' => [
                'id' => $this->shop->id,
                'name' => $this->shop->name,
                'logo' => $this->shop->logo,
                'rating' => (float) round($this->shop->averageRating, 1),
                'estimated_delivery_time' => (string) ($this->shop->estimated_delivery_time ?? 3).' days',
                'delivery_charge' => (float) getDeliveryCharge(1),
            ],
            'description' => $this->description,
=======
            'brand' => $brandName,
            'unit' => $this->unit ? UnitResource::make($this->unit) : null,
            'description' => $description,
            'shop' => [
                'id' => $shop?->id,
                'name' => $shop?->name,
                'logo' => $shop?->logo,
                'rating' => (float) round($shop?->averageRating, 1),
                'estimated_delivery_time' => (string) ($shop?->estimated_delivery_time ?? '2-4 days'),
                'delivery_charge' => (float) getDeliveryCharge(1),
            ],
            'flash_sale' => $flashSaleProduct ? FlashSaleResource::make($flashSale) : null,
            'meta_title' => $this->meta_title ?? $name,
            'meta_description' => $this->meta_description ?? $name,
            'meta_keywords' => $this->meta_keywords,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}
