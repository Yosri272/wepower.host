<?php

namespace App\Http\Controllers\Shop\Auth;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
=======
use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\ShopCreateRequest;
use App\Models\GoogleReCaptcha;
use App\Models\User;
use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class LoginController extends Controller
{
    /**
     * Show the application login page.
     */
    public function index()
    {
<<<<<<< HEAD
        return view('shop.auth.login');
=======
        $GoogleReCaptcha = GoogleReCaptcha::first();

        return view('shop.auth.login', compact('GoogleReCaptcha'));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(AdminLoginRequest $request)
    {
        // check credentials
        $user = $this->checkCredentials($request);
<<<<<<< HEAD

        // check user is active
        if ($user && $user->is_active) {
=======
        $roles = $user?->roles?->pluck('name')->toArray() ?? [];

        // check user is active
        if ($user && $user->is_active && ! in_array('customer', $roles)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            // login the user
            Auth::login($user);

            // redirect to dashboard
<<<<<<< HEAD
            return to_route('shop.dashboard')->withSuccess('Login successfully');
        } elseif ($user && ! $user->is_active) {
            return back()->withError('Your account is deactivated. Please contact the admin');
=======
            return to_route('shop.dashboard.index')->withSuccess('Login successfully');
        } elseif ($user && ! $user->is_active) {

            return back()->withError('Your account is not active. Please contact the admin to activate your shop or wait for approval!');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        // redirect back with error
        return back()->withErrors([
            'email' => 'The provided credentials is invalid.',
            'password' => 'The provided credentials is invalid.',
        ]);
    }

    /**
     * Check user exists or not and check password.
     */
    private function checkCredentials(AdminLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            return $user;
        }

        return false;
    }

<<<<<<< HEAD
=======
    public function create()
    {
        return view('shop.auth.create');
    }

    public function store(ShopCreateRequest $request)
    {
        $shop = ShopRepository::storeByRequest($request);

        $shop->user()->update(['is_active' => false]);

        return to_route('shop.login')->with('successAlert', 'Your account is pending. Please wait for the admin to activate your account!');
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
<<<<<<< HEAD
=======
        $user = auth()->user();

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        // logout
        auth()->logout();

        // invalidate session
        $request->session()->invalidate();

        // regenerate session
        $request->session()->regenerateToken();

<<<<<<< HEAD
=======
        $cacheKeys = [
            'admin_all_orders',
            'shop_all_orders',
        ];

        foreach (OrderStatus::cases() as $status) {
            $cacheKeys[] = 'admin_status_'.Str::camel($status->value);
            $cacheKeys[] = 'shop_status_'.Str::camel($status->value);
        }

        foreach ($cacheKeys as $key) {
            Cache::forget($key);
        }
        Cache::forget('user_permissions_'.$user->id);
        Cache::forget('user_non_permissions_'.$user->id);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return to_route('shop.login')->withSuccess('Logout successfully');
    }
}
