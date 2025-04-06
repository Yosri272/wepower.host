<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Requests\ColorRequest;
use App\Models\Color;
use App\Repositories\ColorRepository;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class ColorController extends Controller
{
    /**
     * Display the colors list.
     */
    public function index()
    {
<<<<<<< HEAD
        $colors = auth()->user()->shop->colors()->paginate(20);

        return view('shop.color.index', compact('colors'));
    }

    /**
     * store a new color
     */
    public function store(ColorRequest $request)
    {
        ColorRepository::storeByRequest($request);

        return to_route('shop.color.index')->withSuccess(__('Color created successfully'));
    }

    /**
     * update a color
     */
    public function update(ColorRequest $request, Color $color)
    {
        ColorRepository::updateByRequest($request, $color);

        return to_route('shop.color.index')->withSuccess(__('Color updated successfully'));
    }

    /**
     * status toggle a color
     */
    public function statusToggle(Color $color)
    {
        $color->update([
            'is_active' => ! $color->is_active,
        ]);

        return back()->withSuccess(__('Status updated successfully'));
    }
=======
        $shop = generaleSetting('rootShop');

        // Get colors
        $colors = $shop->colors()->paginate(20);

        return view('shop.color.index', compact('colors'));
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
