<?php

namespace App\Providers;

use App\Enums\OrderStatus;
<<<<<<< HEAD
=======
use App\Enums\Roles;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Models\GeneraleSetting;
use App\Models\Order;
use App\Models\User;
use App\Repositories\LanguageRepository;
use Illuminate\Pagination\Paginator;
<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;
=======
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        // share order status with view
        view()->composer(['layouts.app', 'admin.dashboard', 'shop.dashboard'], function ($view) {
            if (request()->is('admin*')) {
                $allOrders = Order::count();
                foreach (OrderStatus::cases() as $status) {
                    // share status wise orders
                    $view->with(Str::camel($status->value), Order::whereOrderStatus($status->value)->count());
                }
            } else {
                $allOrders = auth()->user()->shop?->orders()?->count();
                foreach (OrderStatus::cases() as $status) {
                    // share status wise orders
                    $view->with(Str::camel($status->value), auth()->user()->shop?->orders()?->whereOrderStatus($status->value)->count());
                }
            }
            // share all orders
=======
        // set default string length
        Schema::defaultStringLength(255);

        // share order status with view
        view()->composer(['layouts.app', 'admin.dashboard', 'shop.dashboard'], function ($view) {

            // general setting
            $generaleSetting = generaleSetting('setting');

            $businessModel = $generaleSetting?->shop_type ?? 'multi';

            // Cache key prefix
            $cacheKeyPrefix = request()->is('admin*') ? 'admin_' : 'shop_';
            $shop = null;

            if ($businessModel === 'single' || request()->is('admin*')) {
                $shop = Cache::remember("{$cacheKeyPrefix}shop", 60 * 24, function () {
                    return User::role(Roles::ROOT->value)->whereHas('shop')->first()?->shop;
                });
            } else {
                $shop = generaleSetting('shop');
            }

            // Cache all orders count
            if (request()->is('admin*') && $businessModel != 'single') {
                $allOrders = Cache::remember("{$cacheKeyPrefix}all_orders", 60 * 24, function () {
                    return Order::count();
                });

                // Share status-wise orders
                foreach (OrderStatus::cases() as $status) {
                    $statusKey = "{$cacheKeyPrefix}status_".Str::camel($status->value);

                    $statusOrder = Cache::remember($statusKey, 60 * 24, function () use ($status) {
                        return Order::whereOrderStatus($status->value)->count();
                    });

                    $view->with(Str::camel($status->value), $statusOrder);
                }
            } else {
                $allOrders = Cache::remember("{$cacheKeyPrefix}all_orders", 60 * 24, function () use ($shop) {
                    return $shop?->orders()?->count() ?? Order::count();
                });

                // Share status-wise orders
                foreach (OrderStatus::cases() as $status) {

                    $statusKey = "{$cacheKeyPrefix}status_".Str::camel($status->value);

                    $statusOrder = Cache::remember($statusKey, 60 * 24, function () use ($shop, $status) {

                        return $shop?->orders()?->whereOrderStatus($status->value)->count();
                    });

                    $view->with(Str::camel($status->value), $statusOrder);
                }
            }

            // Share all orders
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $view->with('allOrders', $allOrders);
        });

        view()->composer('*', function ($view) {
<<<<<<< HEAD
            // general settings and business model
            $generaleSetting = GeneraleSetting::first();
            $businessModel = $generaleSetting?->shop_type ?? 'multi';

            // language
            $languages = LanguageRepository::getAll();
=======
            // Cache general setting data for  30 days
            $generaleSetting = Cache::remember('generale_setting', 60 * 24 * 30, function () {
                return GeneraleSetting::first();
            });

            $businessModel = $generaleSetting?->shop_type ?? 'multi';

            // language
            $languages = Cache::remember('languages', 60 * 24, function () {
                return LanguageRepository::getAll();
            });
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            // share languages with view
            $view->with('languages', $languages);

<<<<<<< HEAD
            $users = User::count();

            $seederRun = true;
            // check if users exists
            if ($users > 0) {
=======
            $rootUser = Cache::remember('rootUser', 60 * 24 * 30, function () {
                return User::role(Roles::ROOT->value)->whereHas('shop')->count();
            });

            $seederRun = true;
            // check if users exists
            if ($rootUser > 0) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $seederRun = false;
            }

            $storageLink = true;
            // check if storage folder exists
            if (file_exists(public_path('storage'))) {
                $storageLink = false;
            }

            // share seederRun and storageLink
            $view->with('seederRun', $seederRun);
            $view->with('storageLink', $storageLink);

            // share business model and generale setting
            $view->with('generaleSetting', $generaleSetting);
            $view->with('businessModel', $businessModel);
        });

        // use bootstrap 5 for pagination
        Paginator::useBootstrapFive();
    }
}
