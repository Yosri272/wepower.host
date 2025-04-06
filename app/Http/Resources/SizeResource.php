<?php

namespace App\Http\Resources;

<<<<<<< HEAD
=======
use App\Repositories\ProductRepository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SizeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
<<<<<<< HEAD
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->pivot->price ?? 0,
=======
        $lang = request()->header('accept-language') ?? 'en';

        $price = $this->pivot->price ?? 0;
        $product = ProductRepository::find($this->pivot?->product_id);

        // Calculate VAT extra price
        $amount = 0;
        if ($product) {
            foreach ($product->vatTaxes ?? [] as $tax) {
                if ($tax->percentage > 0) {
                    $amount += $price * ($tax->percentage / 100);
                }
            }
        }
        $price += $amount;

        $translation = $lang != 'en' ? $this->translations()?->where('lang', $lang)->first() : null;

        return [
            'id' => $this->id,
            'name' => $translation ? $translation->name : $this->name,
            'price' => (float) number_format($price, 2, '.', ''),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}
