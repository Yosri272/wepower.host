<<<<<<< HEAD
=======
@php
    $directory = app()->getLocale() == 'ar' ? 'rtl' : 'ltr';
@endphp
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        @page {
            margin: 0;
            padding: 0;
            size: a4;
        }

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 16px;
            background-color: #F9FAFC;
            font-size: 14px;
            color: #303042;
            line-height: 18px;
            -webkit-print-color-adjust: exact;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
            position: relative;
=======
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            position: relative;
            color: #303042;
            font-family: "freeSerif", "kalpurush", serif;
            background-color: #F9FAFC;
            font-size: 16px;
            font-weight: 400;
            font-style: normal;
            margin: 0;
            padding: 16px;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        p,
        h2,
        h1,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

<<<<<<< HEAD
        .display-table {
            display: table;
        }

        .table-cell {
            display: table-cell;
        }

        .header {
            display: table;
=======
        .header {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            width: 100%;
            color: #5E6470;
            padding: 12px;
        }

        .header .row {
<<<<<<< HEAD
            display: table-cell;
            width: 50%;
            vertical-align: middle;
        }

        .header .logo {
            width: 65px;
            height: 65px;
=======
            width: 50%;
        }

        .header .logo {
            width: 90px;
            height: 90px;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        .header img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .text-right {
            text-align: right !important;
        }

        .pl-3 {
            padding-left: 12px;
        }

        .pt-2 {
            padding: 5px;
        }

        .pt-1-5 {
            padding-top: 2px;
        }

        .pt-1 {
            padding-top: 4px;
        }

        .pt-3 {
            padding-top: 12px;
        }

        .site-name {
            font-size: 18px;
            font-weight: 600;
            color: #303042;
            line-height: normal;
        }

        .text-gray {
            color: #5E6470;
        }

        .fz-14 {
            font-size: 14px;
            line-height: 16px
        }

        .contains {
            position: absolute;
            padding: 12px;
            background: #fff;
            left: 16px;
            right: 16px;
            bottom: 16px;
<<<<<<< HEAD
            top: 155px;
=======
            top: 120px;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            border-radius: 16px;
        }

        .fw-400 {
            font-weight: 400 !important;
        }

        .fw-500 {
            font-weight: 500;
        }

<<<<<<< HEAD
        .fw-bold {
            font-weight: bold;
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        .w-full {
            width: 100%;
        }

        .payAmount {
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 28px;
        }

        .qrCode {
            width: 61px;
            height: 60px;
        }

        .invoice-details {
<<<<<<< HEAD
            width: 100%;
            margin-top: 40px;
        }

        .invoice-details tr th {
            text-align: left;
            font-weight: normal;
            color: #5E6470;
        }

        .invoice-details tr td {
            font-weight: 500;
        }

=======
            width: 100% !important;
            margin-top: 40px;
            margin-left: 30px
        }

        .invoice-details tr th {
            color: #5E6470;
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        .items-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
<<<<<<< HEAD
        }

        .items-table tr th {
            text-align: left;
=======
            margin-left: 30px;
        }

        .items-table tr th {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            padding: 12px;
            background: #3546AE;
            color: #fff;
            font-style: normal;
<<<<<<< HEAD
            font-weight: 600;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        .items-table tr {
            border-right: 0.5px solid #CFCFCF;
            border-bottom: 0.5px solid #CFCFCF;
            border-left: 0.5px solid #CFCFCF;
<<<<<<< HEAD
        }

        .items-table tr td {
            font-weight: 500;
=======
            border-top: 0;
        }

        .items-table tr td {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            padding: 12px;
            background: #FFF;
        }

        .text-center {
            text-align: center !important;
        }

        .product-des {
            font-size: 10px;
            font-weight: 400;
        }

        .invoice-total {
            width: 320px;
<<<<<<< HEAD
            float: right;
            margin-top: 8px;
        }

        .clearfix {
            display: block;
            clear: both;
            content: "";
        }

=======
            float: {{ $directory == 'rtl' ? 'left' : 'right' }};
            margin-top: 8px;
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        .border-top {
            border-top: 1px solid #CFCFCF;
            margin-top: 6px;
        }

        .total {
<<<<<<< HEAD
            font-weight: bold;
            font-size: 16px;
        }

        .footer {
            width: 95%;
            position: absolute;
            display: table;
            left: 20px;
            right: 32px;
            color: #303042;
            padding: 8px;
            bottom: 60px;
        }

        .footer .signature {
            border-top: 1px solid #303042;
            padding: 0 8px;
        }
    </style>
=======
            font-size: 16px;
            font-weight: 700;
        }

        .footer {
            width: 90%;
            position: absolute;
            left: 32px;
            right: 0;
            bottom: 16px;
            color: #303042;
            padding: 8px;
        }

        .footer .signature {
            border: 1px solid #303042;
            background-clip: border-box;
            padding: 0 8px;
        }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .pt-4 {
            padding-top: 20px;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .w-50 {
            width: 50%;
        }

        .text {
            color: #5E6470;
        }

        .address span {
            color: #5E6470;
            font-size: 13px;
        }

        .address_name {
            color: #5E6470;
            font-size: 12px;
        }
    </style>
    @if ($directory == 'rtl')
        <style>
            body {
                direction: rtl !important;
            }

            .items-table tr td {
                font-weight: normal !important;
            }

            .items-table tr th {
                font-weight: normal !important;
            }

            .items-table tr th.text-left {
                text-align: right !important;
            }

            .invoice-details tr th {
                text-align: right;
                font-weight: normal !important;
            }

            .invoice-details tr td {
                font-weight: normal !important;
            }
        </style>
    @else
        <style>
            body {
                direction: ltr !important;
            }

            .items-table tr td {
                font-weight: 500;
            }

            .items-table tr th {
                font-weight: 600;
            }
        </style>
    @endif
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
</head>

<body>
    <div class="header">
<<<<<<< HEAD
        <div class="row ">
            <div class="display-table">
                <div class="logo">
                    <img src="./assets/favicon.png" alt="ReadyeCommerce Logo">
                </div>
                <div class="table-cell pl-3">
                    <h2 class="site-name">{{ config('app.name') }}</h2>
=======
        <div class="row float-left">
            <div class="clearfix">
                <div class="logo float-left">
                    <img src="{{ $generaleSetting?->favicon ?? asset('assets/favicon.png') }}" alt="logo" />
                </div>
                <div class="pl-3 pt-4 text-left float-left">
                    <h2 class="site-name">{{ __($generaleSetting?->name ?? config('app.name')) }}</h2>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    <p class="pt-1-5">{{ config('app.url') }}</p>
                    <p class="pt-1-5">{{ $generaleSetting?->email }}</p>
                    <p class="pt-1-5">{{ $generaleSetting?->mobile }}</p>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        <div class="row text-right">
            <p class="fz-14">Business address</p>
            <p class="fz-14 pt-1-5">{{ $generaleSetting?->address }}</p>
=======
        <div class="pt-4 {{ $directory == 'rtl' ? '' : 'text-right' }} float-right">
            <p class="fz-14">{{ __('Business Address') }}</p>
            <p class="fz-14 pt-1-5">{{ __($generaleSetting?->address) }}</p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>

    <div class="contains">
<<<<<<< HEAD

        <div class="display-table w-full">
            <div>
                <div class="text-gray">Bill To:</div>
                <p class="fw-500 pt-1">{{ $order->customer?->user?->name }}</p>
                <div class="text-gray pt-1">Address:</div>
                <p class="fw-500 pt-1">
                    {{ ($order?->address?->address_line ?? 'N/A') . ', ' . ($order->address?->address_line2 ?? 'N/A') . ', ' . ($order->address?->area ?? 'N/A') }}
                </p>
                <div class="text-gray pt-1">Email:</div>
                <p class="fw-500 pt-1">{{ $order->customer?->user?->email }}</p>
            </div>
            <div class="table-cell text-right">
                <p>Invoice of ({{ $generaleSetting?->currency }})</p>
=======
        @php
            $address = $order->address;
            $user = $order->customer?->user;
        @endphp

        <div class="w-full overflow-hidden">
            <div class="float-left" style="width: 60%;">
                <div class="text-gray">{{ __('Bill To') }}:</div>
                <p class="fw-500 pt-1">{{ $user?->name }}</p>
                <div class="text-gray pt-1">{{ __('Address') }}:</div>
                <p class="fw-500 pt-1 address">
                    @if ($address?->address_type)
                        {{ __($address?->address_type) }}
                    @endif
                    @if ($address?->address_line)
                        ,{{ $address->address_line }}
                    @endif
                    @if ($address?->address_line2)
                        ,{{ $address->address_line2 }}
                    @endif
                    @if ($address?->area)
                        ,{{ $address?->area }}
                    @endif
                </p>

                <div class="text-gray pt-1">
                    {{ __('Email') }}:
                    <span class="fw-500 pt-1" style="color:  #000">{{ $user?->email }}</span>
                </div>
                <div class="text-gray pt-1">
                    {{ __('Phone') }}:
                    <span class="fw-500 pt-1" style="color:  #000">{{ $user?->phone }}</span>
                </div>
            </div>

            <div class="{{ $directory == 'rtl' ? '' : 'text-right' }}">
                <p>{{ __('Invoice of') }} ({{ $generaleSetting?->currency ?? '$' }})</p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <h3 class="payAmount">{{ showCurrency($order->payable_amount) }}</h3>
                <div class="pt-2">
                    <img class="qrCode" src="{{ $qrCodeImage }}" alt="">
                </div>
            </div>
        </div>

<<<<<<< HEAD
        <table class="invoice-details">
            <tr>
                <th>Payment Method</th>
                <th>Invoice Number</th>
                <th>Invoice Date</th>
                <th style="text-align: right !important">Order Date</th>
            </tr>
            <tr>
                <td>{{ $order->payment_method->value }}</td>
                <td>#{{ $order->prefix . $order->order_code }}</td>
                <td>{{ now()->format('d F, Y') }}</td>
                <td class="text-right">{{ $order->created_at->format('d F, Y') }}</td>
            </tr>
        </table>

        <table class="items-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Item Name</th>
                    <th class="text-center">Rate</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                    @php
                        $price = $product->discount_price > 0 ? $product->discount_price : $product->price;
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>
                            <span style="text-transform: capitalize">{{ $product->name }}</span>
                            <p class="pt-1 text-gray product-des">
                                {{ Str::limit($product->short_description, 60, '...') }}
                            </p>
                        </td>
                        <td class="text-center fw-400">{{ showCurrency($price) }}</td>
                        <td class="text-center">{{ $product->pivot->quantity }}</td>
                        <td class="text-right">{{ showCurrency($price * $product->pivot->quantity) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="clearfix">
            <div class="invoice-total">
                <div class="display-table w-full pt-2">
                    <p class="table-cell">Subtotal</p>
                    <p class="table-cell text-right fw-500">
                        {{ showCurrency($order->total_amount) }}
                    </p>
                </div>
                <div class="display-table w-full pt-2">
                    <p class="table-cell">Discount</p>
                    <p class="table-cell text-right fw-500">
                        {{ showCurrency($order->total_discount) }}
                    </p>
                </div>
                <div class="display-table w-full pt-2">
                    <p class="table-cell">Delivery Charge</p>
                    <p class="table-cell text-right fw-500">
                        {{ showCurrency($order->delivery_charge) }}
                    </p>
                </div>
                <div class="display-table w-full pt-2 border-top">
                    <p class="table-cell total">Total</p>
                    <p class="table-cell text-right total">
=======
        <div class="clearfix w-full">

            <table class="invoice-details">
                <tr>
                    <th class="text-left">{{ __('Payment Method') }}</th>
                    <th class="text-left">
                        {{ __('Invoice Number') }}
                    </th>
                    <th class="text-left">
                        {{ __('Invoice Date') }}
                    </th>
                    <th class="text-right">
                        {{ __('Order Date') }}
                    </th>
                </tr>
                <tr>
                    <td>{{ $order->payment_method->value }}</td>
                    <td>#{{ $order->prefix . $order->order_code }}</td>
                    <td>{{ now()->format('d F, Y') }}</td>
                    <td class="text-right">{{ $order->created_at->format('d F, Y') }}</td>
                </tr>
            </table>

            <table class="items-table">
                <thead>
                    <tr>
                        <th class="text-left">
                            {{ __('Item') }}
                        </th>
                        <th class="text-left">
                            {{ __('Item Name') }}
                        </th>
                        <th class="text-center">
                            {{ __('Rate') }}
                        </th>
                        <th class="text-center">
                            {{ __('Quantity') }}
                        </th>
                        <th class="text-center">
                            {{ __('Size') }}
                        </th>
                        <th class="text-center">
                            {{ __('Color') }}
                        </th>
                        <th class="text-right">
                            {{ __('Price') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products ?? [] as $product)
                        @php
                            $price = $product->discount_price > 0 ? $product->discount_price : $product->price;

                            $name = $product->name;
                            $shortDescription = $product->short_description;

                            if ($directory == 'rtl') {
                                $translation = $product->translations()?->where('lang', 'ar')->first();
                                $name = $translation?->name ?? $name;
                               $shortDescription = $translation?->short_description ?? $shortDescription;
                            }
                            $plainShortDescription = strip_tags($shortDescription);
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td style="border: none !important">
                                <table>
                                    <tr>
                                        <td style="width: 40px !important; padding: 0 !important">
                                            <img src="{{ $product->thumbnail }}" alt=""
                                                style="width: 40px; height: 40px">
                                        </td>
                                        <td style="padding: 3px">
                                            <span style="text-transform: capitalize">
                                                {{ $name }}
                                            </span>
                                            <p class="pt-1 text-gray product-des">
                                                {{ $plainShortDescription }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="text-center fw-400">{{ showCurrency($price) }}</td>
                            <td class="text-center">{{ $product->pivot->quantity }}</td>
                            <td class="text-center">{{ $product->pivot->size ?? '--' }}</td>
                            <td class="text-center">{{ $product->pivot->color ?? '--' }}</td>
                            <td class="text-right">{{ showCurrency($price * $product->pivot->quantity) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if ($directory != 'rtl')
            <div class="invoice-total">
                <div class="pt-2 w-full">
                    <p class="float-left w-50">
                        {{ __('Sub Total') }}
                    </p>
                    <p class="w-50 text-right fw-500">
                        {{ showCurrency($order->total_amount) }}
                    </p>
                </div>
                @if ($order->coupon_discount > 0)
                    <div class="w-full pt-2">
                        <p class="w-50 float-left">
                            {{ __('Discount') }}
                        </p>
                        <p class="w-50 text-right fw-500">
                            {{ showCurrency($order->coupon_discount) }}
                        </p>
                    </div>
                @endif
                <div class="w-full pt-2">
                    <p class="w-50 float-left">
                        {{ __('Delivery Charge') }}
                    </p>
                    <p class="w-50 text-right fw-500">
                        {{ showCurrency($order->delivery_charge) }}
                    </p>
                </div>

                @foreach ($order->vatTaxes ?? [] as $vatTax)
                    <div class="w-full pt-2">
                        <p class="w-50 float-left">
                            {{ $vatTax->name . '(' . $vatTax->percentage . '%)' }}
                        </p>
                        <p class="w-50 text-right fw-500">
                            {{ showCurrency($vatTax->amount) }}
                        </p>
                    </div>
                @endforeach
                @if ($order->tax_amount > 0 && count($order->vatTaxes ?? []) <= 0)
                    <div class="w-full pt-2">
                        <p class="w-50 float-left">
                            {{ __('Total Tax Amount') }}
                        </p>
                        <p class="w-50 text-right fw-500">
                            {{ showCurrency($order->tax_amount) }}
                        </p>
                    </div>
                @endif
                <div class="w-full pt-2 border-top">
                    <p class="w-50 float-left">
                        {{ __('Total Amount') }}
                    </p>
                    <p class="w-50 text-right total">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        {{ showCurrency($order->payable_amount) }}
                    </p>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </div>

    <div class="footer">
        <p class="table-cell">Thanks for the business.</p>
        <div class="table-cell text-right">
            <span class="signature">Signature</span>
=======
        @else
            <div class="invoice-total" style="margin-left: 30px">
                <div class="pt-2 w-full" style="padding-left: 20px">
                    <p class="w-50 float-left text-left">
                        {{ showCurrency($order->total_amount) }}
                    </p>
                    <p class="w-50">
                        {{ __('Sub Total') }}
                    </p>

                </div>
                @if ($order->coupon_discount > 0)
                    <div class="w-full pt-2" style="padding-left: 20px">
                        <p class="w-50 float-left text-left">
                            {{ showCurrency($order->coupon_discount) }}
                        </p>
                        <p class="w-50">
                            {{ __('Discount') }}
                        </p>
                    </div>
                @endif
                <div class="w-full pt-2" style="padding-left: 20px">
                    <p class="w-50 float-left text-left">
                        {{ showCurrency($order->delivery_charge) }}
                    </p>
                    <p class="w-50">
                        {{ __('Delivery Charge') }}
                    </p>
                </div>
                @if ($order->tax_amount > 0)
                    <div class="w-full pt-2" style="padding-left: 20px">
                        <p class="w-50 float-left text-left">
                            {{ showCurrency($order->tax_amount) }}
                        </p>
                        <p class="w-50">
                            {{ __('VAT & Tax') }}
                        </p>
                    </div>
                @endif
                <div class="w-full pt-2 border-top" style="padding-left: 20px">
                    <p class="w-50 float-left total text-left">
                        {{ showCurrency($order->payable_amount) }}
                    </p>
                    <p class="w-50 total">
                        {{ __('Total Amount') }}
                    </p>
                </div>
            </div>
        @endif
    </div>

    <div class="footer">
        <p class="w-50 float-left">
            {{ __('Thanks for the business.') }}
        </p>
        <div class="w-50 text-right float-left">
            <span class="signature">
                {{ __('Signature') }}
            </span>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>

</body>

</html>
