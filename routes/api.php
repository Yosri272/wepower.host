<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\ForgotPasswordController;
use App\Http\Controllers\API\BannerController;
<<<<<<< HEAD
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CouponController;
use App\Http\Controllers\API\GiftController;
=======
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\CouponController;
use App\Http\Controllers\API\FlashSaleController;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\LegalPageController;
use App\Http\Controllers\API\MasterController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\ShopController;
<<<<<<< HEAD
use App\Http\Controllers\API\SubCategoryController;
use App\Http\Controllers\API\SupportController;
use App\Http\Controllers\API\UserController;
=======
use App\Http\Controllers\API\SocialAuthController;
use App\Http\Controllers\API\SubCategoryController;
use App\Http\Controllers\API\SupportController;
use App\Http\Controllers\API\SupportTicketController;
use App\Http\Controllers\API\SupportTicketMessageController;
use App\Http\Controllers\API\TicketIssueTypeController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\File;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

<<<<<<< HEAD
=======
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


// auth token route
Route::controller(SocialAuthController::class)->group(function () {
    Route::post('/social-auth', 'login');
    Route::post('/auth/{provider}/token', 'handleTokenExchange');
});

// country route
Route::controller(CountryController::class)->group(function () {
    Route::get('/countries', 'index');
});

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(AuthController::class)->group(function () {
    Route::post('/registration', 'register');
    Route::post('/login', 'login');
});

Route::controller(ForgotPasswordController::class)->group(function () {
    Route::post('/send-otp', 'resendOTP');
    Route::post('/verify-otp', 'verifyOtp');
    Route::post('/reset-password', 'resetPassword');
});

<<<<<<< HEAD
//legal page route
=======
// legal page route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(LegalPageController::class)->group(function () {
    Route::get('/legal-pages/{slug}', 'index');
    Route::get('/contact-us', 'contactUs');
});

<<<<<<< HEAD
//support route
=======
// support route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(SupportController::class)->group(function () {
    Route::post('/support', 'store');
});

<<<<<<< HEAD
//master route
=======
// master route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(MasterController::class)->group(function () {
    Route::get('/master', 'index');
});

<<<<<<< HEAD
//home route
=======
// home route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
    Route::get('/recently-views', 'recentlyViews');
});

<<<<<<< HEAD
//Banner route
=======
// Banner route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(BannerController::class)->group(function () {
    Route::get('/banners', 'index');
});

<<<<<<< HEAD
//category route
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index');
    Route::get('/category-products', 'show');
});

//sub category route
=======
// category route
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index');
});

// sub category route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/sub-categories', 'index');
});

<<<<<<< HEAD
//product route
=======
// category products route
Route::get('/category-products', [ProductController::class, 'index']);

// product route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/product-details', 'show');
});

<<<<<<< HEAD
//review route
=======
// review route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(ReviewController::class)->group(function () {
    Route::get('/reviews', 'index');
});

<<<<<<< HEAD
//shop route
=======
// shop route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
Route::controller(ShopController::class)->group(function () {
    Route::get('/shops', 'index');
    Route::get('/shops/top', 'topShops');
    Route::get('/shop-categories', 'shopCategory');
    Route::get('/shops/popular-products', 'popularProducts');
    Route::get('/shops/{shop}', 'show');
});

<<<<<<< HEAD
Route::middleware(['auth:sanctum', 'role:customer'])->group(function () {

    //user route
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'index');
        Route::post('/update-profile', 'update');
        Route::post('/change-password', 'changePassword');
    });

    //recently view route
=======
// flash sale route
Route::controller(FlashSaleController::class)->group(function () {
    Route::get('/flash-sales', 'index');
    Route::get('/flash-sale/{flashSale}/details', 'show');
});

// route for blog
Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'index');
    Route::get('/blog/{blog}/details', 'show');
});

// auth middleware route
Route::middleware(['auth:sanctum', 'role:customer'])->group(function () {

    // user route
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile', 'index');
        Route::post('/update-profile', 'update')->middleware('demoMode');
        Route::post('/change-password', 'changePassword')->middleware('demoMode');
    });

    // recently view route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(HomeController::class)->group(function () {
        Route::get('/recently-views', 'recentlyViews');
    });

<<<<<<< HEAD
    //favorite add or remove route
=======
    // favorite add or remove route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(ProductController::class)->group(function () {
        Route::post('/favorite-add-or-remove', 'addFavorite');
        Route::get('/favorite-products', 'favoriteProducts');
        Route::post('/product-review', 'storeReview');
    });

<<<<<<< HEAD
    //order route
=======
    // order route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::post('/place-order', 'store');
        Route::get('/order-details', 'show');
        Route::post('/orders/cancel', 'cancel');
        Route::post('/place-order/again', 'reOrder');
        Route::get('/order-payment/{order}/{paymentMethod?}', 'payment');
<<<<<<< HEAD
        Route::post('buy-now/place-order', 'buyNowStore');
        Route::post('/buy-now', 'buyNow');
    });

    //order route for version 1
    Route::controller(OrderController::class)->prefix('/v1')->group(function () {
        Route::post('/place-order', 'storeV1');
    });

    //coupon route
=======
    });

    // order route for version 1
    Route::controller(OrderController::class)->prefix('/v1')->group(function () {
        Route::post('/place-order', 'store');
    });

    // coupon route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(CouponController::class)->group(function () {
        Route::get('/get-vouchers', 'index');
        Route::post('/vouchers-collect', 'store')->name('voucher.collect');
        Route::get('/get-collected-vouchers', 'collectedVouchers');
        Route::post('/apply-voucher', 'applyVoucher')->name('voucher.apply');
        Route::post('/coupons/apply', 'getDiscount');
    });

<<<<<<< HEAD
    //address route
=======
    // address route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(AddressController::class)->group(function () {
        Route::get('/addresses', 'index');
        Route::post('/address/store', 'store');
        Route::post('/address/{address}/update', 'update');
        Route::delete('/address/{address}/delete', 'destroy');
    });

<<<<<<< HEAD
    //cart route
=======
    // cart route
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::controller(CartController::class)->group(function () {
        Route::get('/carts', 'index');
        Route::post('/cart/store', 'store');
        Route::post('/cart/increment', 'increment');
        Route::post('/cart/decrement', 'decrement');
        Route::post('/cart/delete', 'destroy');
        Route::post('/cart/checkout', 'checkout');
    });

<<<<<<< HEAD
    // gift route
    Route::controller(GiftController::class)->group(function () {
        Route::get('/gifts', 'index');
        Route::post('/gift/store', 'store');
        Route::post('/gift/update', 'update');
        Route::delete('/gift/delete', 'destroy');
    });

=======
    // support ticket
    Route::controller(SupportTicketController::class)->group(function () {
        Route::get('/support-tickets', 'index');
        Route::post('/support-ticket', 'store');
        Route::get('/support-ticket/show', 'show');
    });

    // support ticket message
    Route::controller(SupportTicketMessageController::class)->group(function () {
        Route::get('/support-ticket-messages', 'index');
        Route::post('/support-ticket-message', 'store');
    });

    // ticket issue types
    Route::controller(TicketIssueTypeController::class)->group(function () {
        Route::get('ticket-issue-types', 'index');
    });
});

// language route
Route::get('/lang/{locale}', function ($locale) {
    $path = base_path("lang/{$locale}.json");
    if (File::exists($path)) {
        return File::get($path);
    }

    return response()->json(['error' => 'Language file not found'], 404);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
});
