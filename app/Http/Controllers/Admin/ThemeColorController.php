<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneraleSetting;
use App\Repositories\GeneraleSettingRepository;
<<<<<<< HEAD
=======
use App\Repositories\ThemeColorRepository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;

class ThemeColorController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $themeColors = config('themeColors.shades');

        $generaleSetting = GeneraleSetting::first();

        $primaryColor = array_key_exists($generaleSetting?->primary_color, $themeColors) ? $themeColors[$generaleSetting?->primary_color] : null;

        $primary = $primaryColor ? $generaleSetting?->primary_color : '#EE456B';
        $secondary = $primaryColor ? $primaryColor['100'] : '#FEE5E8';
=======
        $themeColors = ThemeColorRepository::getAll();

        $generaleSetting = GeneraleSetting::first();

        $primaryColor = ThemeColorRepository::query()->where('is_default', true)->first() ?? null;

        $primary = $primaryColor ? $primaryColor->primary : '#EE456B';
        $secondary = $primaryColor ? $primaryColor->secondary : '#FEE5E8';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return view('admin.theme-color', compact('themeColors', 'primary', 'secondary'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'primary_color' => 'required',
            'secondary_color' => 'required',
        ]);

        GeneraleSettingRepository::updateOrCreateThemeColor($request);

<<<<<<< HEAD
=======
        ThemeColorRepository::DefaultColorUpdate($request);

        return back()->with('success', __('Theme color updated successfully'));
    }

    public function change(Request $request)
    {
        if (! $request->generated_color_variants) {
            return back()->with('error', __('Please generated color variants'));
        }

        if (app()->environment('local')) {
            return back()->with('demoMode', __('Sorry! You can not change color in demo mode'));
        }

        ThemeColorRepository::updateColorPalette($request);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return back()->with('success', __('Theme color updated successfully'));
    }
}
