<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentGatewayRequest;
use App\Models\PaymentGateway;
use App\Repositories\PaymentGatewayRepository;

class PaymentGatewayController extends Controller
{
    /**
     * Show payment gateway
     */
    public function index()
    {
        $paymentGateways = PaymentGatewayRepository::getAll();

        return view('admin.payment-gateway.index', compact('paymentGateways'));
    }

    /**
     * Update payment gateway
     */
    public function update(PaymentGatewayRequest $request, PaymentGateway $paymentGateway)
    {
<<<<<<< HEAD
        if (app()->environment() == 'local') {
            return back()->with('demoMode', 'You can not update the payment gateway in demo mode');
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        PaymentGatewayRepository::updateByRequest($request, $paymentGateway);

        return back()->withSuccess(__('Payment Gateway Updated Successfully'));
    }

    /**
     * Toggle payment gateway status
     */
    public function toggle(PaymentGateway $paymentGateway)
    {
<<<<<<< HEAD

        if (app()->environment() == 'local') {
            return back()->with('demoMode', 'You can not update the payment gateway status in demo mode');
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $paymentGateway->update([
            'is_active' => ! $paymentGateway->is_active,
        ]);

        return back()->withSuccess(__('Status Updated Successfully'));
    }
}
