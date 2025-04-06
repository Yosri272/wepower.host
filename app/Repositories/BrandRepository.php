<?php

namespace App\Repositories;

<<<<<<< HEAD
use Abedin\Boiler\Repositories\Repository;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
=======
use Abedin\Maker\Repositories\Repository;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Models\TranslateUtility;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class BrandRepository extends Repository
{
    /**
     * Get the model
     * model() brand
     */
    public static function model()
    {
        return Brand::class;
    }

    /**
     * store a new brand
     */
    public static function storeByRequest(BrandRequest $request): Brand
    {
<<<<<<< HEAD
        return self::create([
            'name' => $request->name,
            'is_active' => true,
            'shop_id' => auth()->user()->shop->id,
        ]);
=======
        $shop = generaleSetting('rootShop');

        $brand = self::create([
            'name' => $request->name,
            'is_active' => true,
            'shop_id' => $shop->id,
        ]);

        // create translation
        foreach ($request->names ?? [] as $lang => $name) {
            if (! $lang || ! $name) {
                continue;
            }
            TranslateUtility::create([
                'brand_id' => $brand->id,
                'name' => $name,
                'lang' => $lang,
            ]);
        }

        return $brand;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * update a brand
     */
    public static function updateByRequest(BrandRequest $request, Brand $brand): Brand
    {
        $brand->update([
            'name' => $request->name,
        ]);

<<<<<<< HEAD
=======
        // update and create translation
        foreach ($request->names ?? [] as $lang => $name) {
            if (! $lang || ! $name) {
                continue;
            }
            TranslateUtility::updateOrCreate(
                [
                    'brand_id' => $brand->id,
                    'lang' => $lang,
                ],
                [
                    'name' => $name,
                ]
            );
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $brand;
    }
}
