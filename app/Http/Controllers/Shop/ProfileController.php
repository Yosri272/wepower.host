<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ShopProfileRequest;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Repositories\ShopRepository;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * show profile.
     */
    public function index()
    {
<<<<<<< HEAD
        $shop = auth()->user()->shop;
=======
        $shop = generaleSetting('shop');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return view('shop.profile.index', compact('shop'));
    }

    /**
     * edit profile
     */
    public function edit()
    {
<<<<<<< HEAD
        $shop = auth()->user()->shop;
=======
        $shop = generaleSetting('shop');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return view('shop.profile.edit', compact('shop'));
    }

    /**
     * update profile
     */
    public function update(ShopProfileRequest $request)
    {
<<<<<<< HEAD
        $shop = auth()->user()->shop;
=======
        /** @var \App\Models\Shop $shop */
        $shop = generaleSetting('shop');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        ShopRepository::updateByRequest($shop, $request);

        return to_route('shop.profile.index')->withSuccess(__('Profile updated successfully'));
    }

    /**
     * show change password form
     */
    public function changePassword()
    {
        return view('shop.profile.change-password');
    }

    /**
     * change password
     *
     * @model User $user
     */
    public function updatePassword(ChangePasswordRequest $request)
    {
<<<<<<< HEAD
        $user = User::find(auth()->id());
=======
        /** @var App\Models\User $user */
        $user = auth()->user();

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (! Hash::check($request->current_password, $user->password)) {
            return back()->withError(__('You have entered wrong password'));
        }
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->withSuccess(__('password change successfully'));
    }
}
