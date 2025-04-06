<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\API\Auth\AuthController;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Http\Controllers\Gateway\Bkash\ExecutePaymentController;
use App\Http\Controllers\Gateway\PaymentGatewayController;
use App\Http\Controllers\Gateway\PayTabs\ProcessController;
use App\Http\Controllers\PassportStorageSupportController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
<<<<<<< HEAD
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
=======

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
// Change language
Route::get('/change-language', function () {
    if (request()->language) {
        App::setLocale(request()->language);
        session()->put('locale', request()->language);
    }

    return back();
})->name('change.language');

// Install Passport and storage routes
Route::controller(PassportStorageSupportController::class)->group(function () {
    Route::get('/install-passport', 'index')->name('passport.install.index');
    Route::get('/seeder-run', 'seederRun')->name('seeder.run.index');
    Route::get('/storage-install', 'storageInstall')->name('storage.install.index');
});

<<<<<<< HEAD
// Payment gateway routes
Route::controller(PaymentGatewayController::class)->group(function () {
    //payment routes
    Route::get('/order/{payment}/payment', 'payment')->name('order.payment');

    //success and cancel routes for payment
    Route::get('/order/{payment}/payment/success', 'paymentSuccess')->name('order.payment.success');
    Route::get('/order/{payment}/payment/cancel', 'paymentCancel')->name('order.payment.cancel');

    //success and cancel routes for callback
    Route::get('/payment/{payment}/callback-success', 'success')->name('payment.success');
    Route::get('/payment/{payment}/callback-cancel', 'cancel')->name('payment.cancel');

    //success and cancel routes for callback
=======
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/{provider}/callback', 'callback');
    Route::post('/auth/{provider}/callback', 'callback');
});

// Payment gateway routes
Route::controller(PaymentGatewayController::class)->group(function () {
    // payment routes
    Route::get('/order/{payment}/payment', 'payment')->name('order.payment');

    // success and cancel routes for payment
    Route::get('/order/{payment}/payment/success', 'paymentSuccess')->name('order.payment.success');
    Route::get('/order/{payment}/payment/cancel', 'paymentCancel')->name('order.payment.cancel');

    // success and cancel routes for callback
    Route::get('/payment/{payment}/callback-success', 'success')->name('payment.success');
    Route::get('/payment/{payment}/callback-cancel', 'cancel')->name('payment.cancel');

    // success and cancel routes for callback
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    Route::post('/payment/{payment}/callback-success', 'success')->name('payment.success');
    Route::post('/payment/{payment}/callback-cancel', 'cancel')->name('payment.cancel');
});

// Bkash Payment execute
Route::get('/bkash-payment/{payment}/execute', [ExecutePaymentController::class, 'index'])->name('bkash.payment.execute');

// Paytabs payment execute
<<<<<<< HEAD
Route::get('/paytabs/{payment}/callback', [ProcessController::class, 'callback'])->name('paytabs.payment.callback');
=======
Route::match(['get', 'post'], '/paytabs/{payment}/callback', [ProcessController::class, 'callback'])->name('paytabs.payment.callback');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

// handle frontend page load
Route::get('/{any}', function () {

<<<<<<< HEAD
=======
    // manage admin and shop routes
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    if (request()->is('admin/*', 'shop/*')) {
        return abort(404);
    }

    return view('app');
<<<<<<< HEAD
})->where('any', '.*')->fallback(function () {
    return abort(404);
});

// Fallback route for 404 errors
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
=======
})->where('any', '.*');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
