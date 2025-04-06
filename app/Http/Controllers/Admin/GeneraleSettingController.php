<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneraleSettingRequest;
<<<<<<< HEAD
=======
use App\Models\Currency;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Repositories\GeneraleSettingRepository;

class GeneraleSettingController extends Controller
{
    /**
     * Display a listing of the generale settings.
     */
    public function index()
    {
<<<<<<< HEAD
        return view('admin.generale-setting');
=======
        $currencies = Currency::all();

        return view('admin.generale-setting', compact('currencies'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Update the generale settings.
     */
    public function update(GeneraleSettingRequest $request)
    {
<<<<<<< HEAD
        if (app()->environment() == 'local') {
            return back()->with('demoMode', 'You can not update the generale settings in demo mode');
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        // store generale settings from generaleSettingRepository
        GeneraleSettingRepository::updateByRequest($request);

        return back()->withSuccess(__('Generale settings updated successfully'));
    }
}
