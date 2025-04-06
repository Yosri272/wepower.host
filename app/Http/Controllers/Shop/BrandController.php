<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Repositories\BrandRepository;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class BrandController extends Controller
{
    /**
     * Display a listing of the brands.
     */
    public function index()
    {
<<<<<<< HEAD
        // Get brands
        $brands = auth()->user()->shop->brands()->paginate(20);

        return view('shop.brand.index', compact('brands'));
    }

    /**
     * store a new brand
     */
    public function store(BrandRequest $request)
    {
        BrandRepository::storeByRequest($request);

        return to_route('shop.brand.index')->withSuccess(__('Brand created successfully'));
    }

    /**
     * update a brand
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        BrandRepository::updateByRequest($request, $brand);

        return to_route('shop.brand.index')->withSuccess(__('Brand updated successfully'));
    }

    /**
     * status toggle a brand
     */
    public function statusToggle(Brand $brand)
    {
        $brand->update([
            'is_active' => ! $brand->is_active,
        ]);

        return to_route('shop.brand.index')->withSuccess(__('Brand status updated'));
    }
=======
        $shop = generaleSetting('rootShop');

        // Get brands
        $brands = $shop->brands()->paginate(20);

        return view('shop.brand.index', compact('brands'));
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
