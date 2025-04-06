@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div> {{ __('Dashboard') }}
                    <div class="page-title-subheading">
                        {{ __('This is a admin dashboard') }}.
                    </div>
                </div>
            </div>
        </div>

        @if (app()->environment('local'))
            <div class="alert alert-danger d-flex align-items-center gap-1 justify-content-between mt-2 mb-0" role="alert"
                id="alertBox">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-bell"></i>
                    <div>
                        <strong>{{ __('Note') }}</strong> {{ __('Every 3 hours all data will be cleared') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    </div>
=======
@section('header-title', __('Welcome Back,') . ' ' . Str::limit(auth()->user()?->name, 20))
@section('header-subtitle', __('Monitor your business analytics and statistics.'))

@section('content')

    <!-- Alert Box -->
    @if (app()->environment('local'))
        <div id="alertBox" class="alert alert-danger align-items-center gap-1 justify-content-between mb-3" role="alert" style="display: flex">
            <div class="d-flex align-items-center gap-2">
                <i class="fa-solid fa-bell"></i>
                <div>
                    <strong>{{ __('Note') }}</strong> {{ __('Every 3 hours all data will be cleared') }}
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    @php
        $text = 'Total ' . ($businessModel == 'single' ? 'Categories' : 'Shops');
    @endphp

<<<<<<< HEAD
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
            <div class="dashboard-summery bg-shop">
                <h2>{{ $businessModel == 'single' ? $totalCategories : $totalShop }}</h2>
                <h3>{{ __($text) }}</h3>
                <div class="icon">
                    <i class="bi bi-shop"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
            <div class="dashboard-summery bg-midnight-bloom">
                <h2>{{ $totalProduct }}</h2>
                <h3>{{ __('Total Products') }}</h3>
                <div class="icon">
                    <i class="bi bi-basket"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
            <div class="dashboard-summery bg-alternate">
                <h2>{{ $totalOrder }}</h2>
                <h3>{{ __('Total Orders') }}</h3>
                <div class="icon">
                    <i class="bi bi-cart-check"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
            <div class="dashboard-summery bg-grow-early">
                <h2>{{ $totalCustomer }}</h2>
                <h3>{{ __('Total Customers') }}</h3>
                <div class="icon">
                    <i class="bi bi-person-circle"></i>
                </div>
            </div>
        </div>
    </div>

    <!---- Order Analytics -->
    <div class="card">
        <div class="card-body">
            <div class="cardTitleBox">
                <h5 class="card-title chartTitle">
                    <i class="bi bi-bar-chart"></i> {{ __('Order Analytics') }}
                </h5>
            </div>

            @php
                $icons = [
                    'pending' => 'bi-clock',
                    'confirm' => 'bi-bag-check-fill',
                    'processing' => 'bi-arrow-repeat',
                    'pickup' => 'bi-bicycle',
                    'delivered' => 'bi-patch-check-fill',
                    'onTheWay' => 'bi-bicycle',
                    'cancelled' => 'bi-x-circle',
                ];
            @endphp

            <div class="d-flex flex-wrap gap-3 orderStatus">
                @foreach ($orderStatuses as $status)
                    <a href="{{ route('admin.order.index', str_replace(' ', '_', $status->value)) }}"
                        class="d-flex align-items-center gap-3 status flex-grow-1">
                        <div>
                            <i class="bi {{ $icons[Str::camel($status->value)] }}"></i>
                            <span>{{ __($status->value) }}</span>
                        </div>
                        <span class="count">{{ ${Str::camel($status->value)} }}</span>
                    </a>
                @endforeach
=======
    <!-- Flash Deal Alert -->
    @if ($flashSale)
        <div>
            <div class="alert flash-deal-alert d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="d-flex flex-column">
                    <div class="deal-text">{{ $flashSale->name }}</div>
                    <div class="deal-title">{{ __('Coming Soon') }}</div>
                </div>
                <div class="countdown d-flex align-items-center">
                    <!-- Days -->
                    <div class="countdown-section">
                        <div class="countdown-label">{{__('Days') }}</div>
                        <div id="days" class="countdown-time">00</div>
                    </div>
                    <!-- Hours -->
                    <div class="countdown-section">
                        <div class="countdown-label">{{__('Hours') }}</div>
                        <div id="hours" class="countdown-time">00</div>
                    </div>
                    <!-- Minutes -->
                    <div class="countdown-section">
                        <div class="countdown-label">{{__('Minutes') }}</div>
                        <div id="minutes" class="countdown-time">00</div>
                    </div>
                    <!-- Seconds -->
                    <div class="countdown-section">
                        <div class="countdown-label">{{__('Seconds') }}</div>
                        <div id="seconds" class="countdown-time">00</div>
                    </div>
                </div>
                @hasPermission('shop.flashSale.show')
                    <a href="{{ route('shop.flashSale.show', $flashSale->id) }}" class="btn btn-primary py-2.5 addBtn">
                        Add Product
                    </a>
                @endhasPermission
            </div>
        </div>
    @endif
    <!-- End Flash Deal Alert -->

    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="dashboard-box item-1">
                        <h2 class="count">{{ $businessModel == 'single' ? $totalCategories : $totalShop }}</h2>
                        <h3 class="title">{{ __($text) }}</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/icons-admin/dashboard-shop.svg') }}" alt="icon" loading="lazy" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="dashboard-box item-2">
                        <h2 class="count">{{ $totalProduct }}</h2>
                        <h3 class="title">{{ __('Total Products') }}</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/icons-admin/dashboard-product.svg') }}" alt="icon"
                                loading="lazy" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="dashboard-box item-3">
                        <h2 class="count">{{ $totalOrder }}</h2>
                        <h3 class="title">{{ __('Total Orders') }}</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/icons-admin/dashboard-order.svg') }}" alt="icon"
                                loading="lazy" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="dashboard-box item-4">
                        <h2 class="count">{{ $totalCustomer }}</h2>
                        <h3 class="title">{{ __('Total Customers') }}</h3>
                        <div class="icon">
                            <img src="{{ asset('assets/icons-admin/dashboard-customer.svg') }}" alt="icon"
                                loading="lazy" />
                        </div>
                    </div>
                </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>
        </div>
    </div>

<<<<<<< HEAD
=======
    @hasPermission('admin.order.index')
        <!---- Order Analytics -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="cardTitleBox">
                    <h5 class="card-title chartTitle">
                        {{ __('Order Analytics') }}
                    </h5>
                </div>

                @php
                    $icons = [
                        'pending' => asset('assets/icons-admin/clock.svg'),
                        'confirm' => asset('assets/icons-admin/shopping-cart-check.svg'),
                        'processing' => asset('assets/icons-admin/rotate-circle.svg'),
                        'pickup' => asset('assets/icons-admin/delivery-cart-arrow-up.svg'),
                        'delivered' => asset('assets/icons-admin/box-check.svg'),
                        'onTheWay' => asset('assets/icons-admin/truck.svg'),
                        'cancelled' => asset('assets/icons-admin/shopping-cart-times.svg'),
                    ];
                @endphp

                <div class="d-flex flex-wrap gap-3 orderStatus">
                    @foreach ($orderStatuses as $status)
                        <a href="{{ route('admin.order.index', str_replace(' ', '_', $status->value)) }}"
                            class="d-flex status flex-grow-1 {{ Str::camel($status->value) }}">
                            <div class="d-flex align-items-center gap-2 justify-content-between w-100">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ $icons[Str::camel($status->value)] }}" alt="icon" loading="lazy" />
                                    <span>{{ __($status->value) }}</span>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/icons-admin/arrow-export.svg') }}" alt="icon"
                                        loading="lazy" />
                                </div>
                            </div>
                            <span class="count">{{ ${Str::camel($status->value)} }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endhasPermission

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <!---- Shop Wallet -->
    <div class="card mt-4">
        <div class="card-body">
            <div class="cardTitleBox">
                <h5 class="card-title chartTitle">
<<<<<<< HEAD
                    <i class="bi bi-wallet2"></i> {{ __('Admin Wallet') }}
=======
                    {{ __('Admin Wallet') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </h5>
            </div>

            <div class="row">
<<<<<<< HEAD
                <div class="col-md-5">
                    <div class="wallet py-4 px-3">
                        <div class="wallet-icon">
                            <img src="{{ asset('assets/images/wallet.png') }}" alt="" width="100%">
                        </div>
                        <h3 class="balance">{{ showCurrency(auth()->user()->wallet->balance) }}</h3>

                        <div class="title">{{ __('Total Earning') }}</div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <div class="wallet-others py-md-4">
                                <div>
                                    <div class="amount">{{ showCurrency($alreadyWithdraw) }}</div>
                                    <div class="title">{{ __('Already Withdraw') }}</div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/icons/alreadyWithdraw.png') }}" alt="icon" />
=======
                <div class="col-lg-5">
                    <div class="wallet h-100">
                        <h3 class="balance">{{ showCurrency(auth()->user()?->wallet?->balance) }}</h3>
                        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap w-100">
                            <div>
                                <div class="d-flex align-items-center gap-1 percentUp">
                                    <span>+18.53%</span>
                                    <img src="{{ asset('assets/icons-admin/arrow.svg') }}" alt="icon" loading="lazy" />
                                </div>
                                <div class="title">{{ __('Total Earning') }}</div>
                            </div>
                            <div class="wallet-icon svg-bg">
                                <img src="{{ asset('assets/icons-admin/wallet.svg') }}" alt="" width="100%">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="wallet-others">
                                <div class="amount">{{ showCurrency($alreadyWithdraw) }}</div>
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="title">{{ __('Already Withdraw') }}</div>
                                    <div class="icon svg-bg">
                                        <img src="{{ asset('assets/icons-admin/withdraw.svg') }}" alt="icon"
                                            loading="lazy" />
                                    </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
<<<<<<< HEAD
                            <div class="wallet-others py-md-4">
                                <div>
                                    <div class="amount">{{ showCurrency($pendingWithdraw) }}</div>
                                    <div class="title">{{ __('Pending Withdraw') }}</div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/icons/pendingWithdraw.png') }}" alt="icon" />
=======
                            <div class="wallet-others">
                                <div class="amount">{{ showCurrency($pendingWithdraw) }}</div>
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="title">{{ __('Pending Withdraw') }}</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/icons-admin/credit-card-orange.svg') }}"
                                            alt="icon" loading="lazy" />
                                    </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
<<<<<<< HEAD
                            <div class="wallet-others py-md-4">
                                <div>
                                    <div class="amount">{{ showCurrency($totalCommission) }}</div>
                                    <div class="title">{{ __('Total Commission') }}</div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/icons/totalEarn.png') }}" alt="icon" />
=======
                            <div class="wallet-others">
                                <div class="amount">{{ showCurrency($totalCommission) }}</div>
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="title">{{ __('Total Commission') }}</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/icons-admin/chart-trend-up-green.svg') }}"
                                            alt="icon" loading="lazy" />
                                    </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
<<<<<<< HEAD
                            <div class="wallet-others py-md-4">
                                <div>
                                    <div class="amount">{{ showCurrency($deniedWithddraw) }}</div>
                                    <div class="title">{{ __('Rejected Withdraw') }}</div>
                                </div>
                                <div class="icon">
                                    <img src="{{ asset('assets/icons/reject.png') }}" alt="icon" />
=======
                            <div class="wallet-others">
                                <div class="amount">{{ showCurrency($deniedWithdraw) }}</div>
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <div class="title">{{ __('Rejected Withdraw') }}</div>
                                    <div class="icon">
                                        <img src="{{ asset('assets/icons-admin/withdraw-reject.svg') }}" alt="icon"
                                            loading="lazy" />
                                    </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

<<<<<<< HEAD
    <!-- User Overview -->
    <div class="row">
        <div class="col-xl-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">{{ __('Orders Summary') }}</h5>
                        <p class="lastAll"><i class="bi bi-calendar-date pe-1"></i>
                            {{ __('latest 6th orders') }}
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><strong>{{ __('Order ID') }}</strong></th>
                                    <th><strong>{{ __('Qty') }}</strong></th>
                                    <th><strong>{{ __('Shop') }}</strong></th>
                                    <th><strong>{{ __('Date') }}</strong></th>
                                    <th><strong>{{ __('Status') }}</strong></th>
                                    <th><strong>{{ __('Action') }}</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestOrders as $order)
                                    <tr>
                                        <td class="tableId">#{{ $order->prefix . $order->order_code }}</td>
                                        <td class="tableId">
                                            {{ $order->products->count() }}
                                        </td>
                                        <td class="tableCustomar">
                                            {{ $order->shop->name }}
                                        </td>
                                        <td class="tableId">
                                            {{ $order->created_at->format('d M, Y') }}
                                        </td>
                                        @php
                                            $status = Str::ucfirst(str_replace(' ', '', $order->order_status->value));
                                        @endphp
                                        <td class="tableStatus">
                                            <div class="statusItem">
                                                <div class="circleDot animated{{ $status }}"></div>
                                                <div class="statusText">
                                                    <span class="status{{ $status }}">
                                                        {{ $order->order_status->value }}
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tableAction">
                                            <a href="{{ route('admin.order.show', $order->id) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                data-bs-title="Order details"
                                                class="circleIcon btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <a href="{{ route('shop.download-invoice', $order->id) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                data-bs-title="Download Invoice"
                                                class="circleIcon btn-outline-success btn btn-sm">
                                                <i class="bi bi-arrow-down-circle"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-3">
            <div class="card h-100">
                <div class="card-header py-3">
                    <h5 class="card-title m-0">
                        <i class="bi bi-person fz-16"></i> {{ __('User Overview') }}
                    </h5>
                </div>
                <div class="card-body">
                    <div id="donut"></div>
                </div>
=======
    <!-- statistics Overview -->
    <div class="card mt-3">
        <div class="card-body">
            <div class="cardTitleBox d-flex align-items-center justify-content-between flex-wrap gap-2">
                <h5 class="card-title chartTitle mb-0">{{ __('Statistics') }}</h5>
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <button class="statisticsBtn active" data-value="daily">
                            {{ __('Daily') }}
                        </button>
                        <button class="statisticsBtn" data-value="monthly">
                            {{ __('Monthly') }}
                        </button>
                        <button class="statisticsBtn" data-value="yearly">
                            {{ __('Yerly') }}
                        </button>
                    </div>

                    <div class="statisticsDivder"></div>

                    <div>
                        <input type="date" name="date" class="statisticsInput">
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col- col-lg-8">

                    <div class="card theme-dark">
                        <div class="card-body">
                            <div class="border-bottom pb-3">
                                <h3 id="totalOrder">{{ $totalOrder }}</h3>
                                <p>{{ __('Total Orders') }}</p>
                            </div>
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card h-100 border theme-dark">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="border-bottom pb-3">
                                <h3>{{ $totalCustomer + $totalShop + $totalRider }}</h3>
                                <p>{{ __('User Overview') }}</p>
                            </div>

                            <div class="mt-auto colorDark">
                                <canvas id="myPieChart" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="cardTitleBox">
                <h5 class="card-title chartTitle">
                    {{ __('Order Summary') }} <span style="color: #687387">({{ __('Latest 5 Order') }})</span>
                </h5>
            </div>

            <div class="table-responsive">
                <table class="table dashboard">
                    <thead>
                        <tr>
                            <th><strong>{{ __('Order ID') }}</strong></th>
                            <th><strong>{{ __('Qty') }}</strong></th>
                            @if ($businessModel == 'multi')
                                <th><strong>{{ __('Shop') }}</strong></th>
                            @endif
                            <th><strong>{{ __('Date') }}</strong></th>
                            <th><strong>{{ __('Status') }}</strong></th>
                            <th><strong>{{ __('Action') }}</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($latestOrders as $order)
                            <tr>
                                <td class="tableId">#{{ $order->prefix . $order->order_code }}</td>
                                <td class="tableId">
                                    {{ $order->products->count() }}
                                </td>
                                @if ($businessModel == 'multi')
                                    <td class="tablecustomer">
                                        {{ $order->shop?->name }}
                                    </td>
                                @endif
                                <td class="tableId">
                                    {{ $order->created_at->format('d M, Y') }}
                                </td>
                                @php
                                    $status = Str::ucfirst(str_replace(' ', '', $order->order_status->value));
                                @endphp
                                <td class="tableStatus">
                                    <div class="statusItem">
                                        <div class="circleDot animated{{ $status }}"></div>
                                        <div class="statusText">
                                            <span class="status{{ $status }}">
                                                {{ $order->order_status->value }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="tableAction">
                                    <a href="{{ route('admin.order.show', $order->id) }}" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-title="Order details"
                                        class="circleIcon btn-sm btn-outline-primary svg-bg">
                                        <img src="{{ asset('assets/icons-admin/eye.svg') }}" alt="icon" loading="lazy">
                                    </a>
                                    <a href="{{ route('shop.download-invoice', $order->id) }}" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-title="Download Invoice"
                                        class="circleIcon btn-outline-secondary btn-sm">
                                        <img src="{{ asset('assets/icons-admin/download-alt.svg') }}" alt="icon" loading="lazy">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            </div>
        </div>
    </div>

    <div class="row mb-4">
<<<<<<< HEAD
        <!-- Top Customer -->
        <div class="col-xxl-4 col-lg-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">
                            <i class="bi bi-people fz-18"></i> {{ __('Top Customer') }}
                        </h5>
                    </div>

                    <div class="d-flex flex-column gap-1">
                        @foreach ($topCustomers as $customer)
                            <div class="customar-section">
                                <div class="customat-details">
                                    <div class="customar-image">
                                        <img src="{{ $customer->user->thumbnail }}" alt="">
                                    </div>
                                    <div class="customar-about">
                                        <p class="name">{{ Str::limit($customer->user->name, 30, '...') }}</p>
                                        <p class="order">
                                            {{ __('Orders') }}:
                                            <span class="">{{ $customer->orders_count }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="customar-socal-icon">
                                    <a href="#" class="circleIcon btn btn-outline-dark">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <a href="#" class="circleIcon btn btn-outline-dark">
                                        <i class="bi bi-bookmark-check-fill"></i>
                                    </a>

                                    <a href="#" class="circleIcon btn btn-outline-dark">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        @if ($businessModel == 'multi')
            <!-- Top Shops -->
=======
        <!-- Top Shops -->
        @if ($businessModel == 'multi')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            <div class="col-xxl-4 col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="cardTitleBox">
                            <h5 class="card-title chartTitle">
<<<<<<< HEAD
                                <i class="bi bi-shop fz-16"></i> {{ __('Top Trending Shops') }}
=======
                                {{ __('Top Trending Shops') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </h5>
                        </div>

                        <div class="d-flex flex-column gap-1">
                            @foreach ($topShops as $shop)
<<<<<<< HEAD
                                <a href="{{ route('admin.shop.show', $shop->id) }}" class="customar-section">
                                    <div class="customat-details">
                                        <div class="customar-image">
                                            <img src="{{ $shop->logo }}" alt="">
                                        </div>
                                        <div class="customar-about">
=======
                                <a href="{{ route('admin.shop.show', $shop->id) }}" class="customer-section">
                                    <div class="customer-details">
                                        <div class="customer-image">
                                            <img src="{{ $shop->logo }}" alt="logo" loading="lazy"/>
                                        </div>
                                        <div class="customer-about">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            <p class="name text-dark">
                                                {{ Str::limit($shop->name, 30, '...') }}
                                            </p>
                                            <p class="order">
                                                <i class="bi bi-star-fill text-warning"></i>
<<<<<<< HEAD
=======
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <i class="bi bi-star-fill text-warning"></i>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                                <i class="bi bi-star-half text-warning"></i>
                                                {{ $shop->average_rating }}
                                            </p>
                                        </div>
                                    </div>
<<<<<<< HEAD
                                    <div class="border rounded text-primary px-2 py-1 flex-shrink-0"
                                        style="font-size: 13px">
                                        <div>{{ __('Orders') }}: {{ $shop->orders_count }}</div>
=======
                                    <div class="border text-black px-2 py-1 flex-shrink-0"
                                        style="font-size: 13px; border-radius: 25px;">
                                        <div>{{ __('Order') }}: {{ $shop->orders_count }}</div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

<<<<<<< HEAD
=======
        <!-- Most Favorite Products -->
        <div class="col-xxl-4 col-lg-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">
                            {{ __('Most Favorite Products') }}
                        </h5>
                    </div>

                    <div class="d-flex flex-column gap-1">
                        @foreach ($topFavorites as $product)
                            <a href="{{ route('admin.product.show', $product->id) }}" class="customer-section">
                                <div class="customer-details">
                                    <div class="customer-image">
                                        <img src="{{ $product->thumbnail }}" alt="icon" loading="lazy"/>
                                    </div>
                                    <div class="customer-about">
                                        <p class="name text-dark">{{ Str::limit($product->name, 30, '...') }}</p>
                                        <div class="d-flex gap-1 align-items-center text-black">
                                            <i class="bi bi-heart-fill text-danger"></i> {{ $product->favorites_count }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <!-- Top Selling Products -->
        <div class="col-xxl-4 col-lg-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">
<<<<<<< HEAD
                            <i class="bi bi-bag-check fz-16"></i> {{ __('Top Selling Products') }}
=======
                            {{ __('Top Selling Products') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </h5>
                    </div>

                    <div class="d-flex flex-column gap-1">
                        @foreach ($topSellingProducts as $product)
<<<<<<< HEAD
                            <a href="{{ route('admin.product.show', $product->id) }}" class="customar-section">
                                <div class="customat-details">
                                    <div class="customar-image">
                                        <img src="{{ $product->thumbnail }}" alt="">
                                    </div>
                                    <div class="customar-about">
                                        <p class="text-dark name">
                                            {{ Str::limit($product->name, 30, '...') }}
                                        </p>
                                        <p class="order">{{__('Rating')}}: {{ number_format($product->reviews->avg('rating'), 1) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="border rounded text-primary px-2 py-1 flex-shrink-0" style="font-size: 13px">
=======
                            <a href="{{ route('admin.product.show', $product->id) }}" class="customer-section">
                                <div class="customer-details">
                                    <div class="customer-image">
                                        <img src="{{ $product->thumbnail }}" alt="icon" loading="lazy" />
                                    </div>
                                    <div class="customer-about">
                                        <p class="text-dark name">
                                            {{ Str::limit($product->name, 30, '...') }}
                                        </p>
                                        <p class="order">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-half text-warning"></i>
                                            <span class="text-black ms-1">{{ number_format($product->reviews->avg('rating'), 1) }}</span>
                                            <span class="text-secondary">({{ $product->reviews->count() }})</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="border text-black px-2 py-1 flex-shrink-0" style="font-size: 13px; border-radius: 25px;">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    <div>{{ __('Sold') }}: {{ $product->orders_count }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD

        <!-- Top Rating Products -->
        <div class="col-xxl-4 col-lg-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">
                            <i class="bi bi-stars fz-16"></i> {{ __('Top Rating Products') }}
                        </h5>
                    </div>

                    <div class="d-flex flex-column gap-1">
                        @foreach ($topReviewProducts as $product)
                            <a href="{{ route('admin.product.show', $product->id) }}" class="customar-section">
                                <div class="customat-details">
                                    <div class="customar-image">
                                        <img src="{{ $product->thumbnail }}" alt="">
                                    </div>
                                    <div class="customar-about">
                                        <p class="name text-dark">{{ Str::limit($product->name, 30, '...') }}</p>
                                        <p class="order">{{__('Sold')}}: {{ $product->orders->count() }}</p>
                                    </div>
                                </div>
                                <div class="border rounded text-primary px-2 py-1 flex-shrink-0" style="font-size: 13px">
                                    <div>{{ __('Rating') }}: <i class="bi bi-star-fill text-warning"></i>
                                        {{ number_format($product->average_rating, 1) }}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Favorite Products -->
        <div class="col-xxl-4 col-lg-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="cardTitleBox">
                        <h5 class="card-title chartTitle">
                            <i class="bi bi-bag-heart fz-16"></i> {{ __('Most Favorite Products') }}
                        </h5>
                    </div>

                    <div class="d-flex flex-column gap-1">
                        @foreach ($topFavorites as $product)
                            <a href="{{ route('admin.product.show', $product->id) }}" class="customar-section">
                                <div class="customat-details">
                                    <div class="customar-image">
                                        <img src="{{ $product->thumbnail }}" alt="">
                                    </div>
                                    <div class="customar-about">
                                        <p class="name text-dark">{{ Str::limit($product->name, 30, '...') }}</p>
                                        <div class="d-flex gap-2 align-items-center">
                                            <p class="order">Sold: {{ $product->orders->count() }}</p>
                                            <div class="border-start" style="width: 1px; height: 14px;"></div>
                                            <p class="order">
                                                {{ __('Rating') }}: <i class="bi bi-star-fill text-warning"></i>
                                                {{ number_format($product->average_rating, 1) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border rounded text-danger px-2 py-1 flex-shrink-0" style="font-size: 16px">
                                    <div>{{ $product->favorites_count }} <i class="bi bi-heart-fill text-danger"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <style>
        .apexcharts-legend-series {
            margin: 6px 5px !important;
        }
    </style>
@endsection

@push('scripts')
    <script>
        const hideAlert = () => {
            setTimeout(() => {
                document.getElementById('alertBox').classList.add('d-none');
            }, 5000);
        }

        hideAlert();

        var optionDonut = {
            chart: {
                type: 'donut',
                width: '100%',
                height: 320
            },
            dataLabels: {
                enabled: false,
            },
            plotOptions: {
                pie: {
                    customScale: 0.8,
                    donut: {
                        size: '65%',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '18px',
                                color: undefined,
                            },
                            value: {
                                show: true,
                                fontSize: '24px',
                                color: undefined,
                                formatter: function(val) {
                                    return val
                                }
                            }
                        }
                    },
                    offsetY: 20,
                },
                stroke: {
                    colors: undefined
                }
            },
            colors: ['#00D8B6', '#6d28d9', '#0d9488'],
            series: [{{ $totalCustomer }}, {{ $totalShop }}, 0],
            labels: ["{{ __('Customer') }}", "{{ __('Shop') }}", "{{ __('Rider') }}"],
            legend: {
                position: 'left',
                fontSize: '16px',
                offsetY: 100
            }
        }

        var donut = new ApexCharts(
            document.querySelector("#donut"),
            optionDonut
        )
        donut.render();
    </script>
=======
    </div>
@endsection

@push('scripts')
    <!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // get the value of --theme-color and --theme-hover-color
        var themeColor = "{{ $generaleSetting?->primary_color ?? '#EE456B' }}";
        var themeHoverColor = "{{ $generaleSetting?->secondary_color ?? '#FEE5E8' }}";

        var currentSitatics = 'daily';

        $('.statisticsBtn').on('click', function () {
            $('.statisticsBtn').removeClass('active');
            $(this).addClass('active');
            var sitatics = $(this).data('value');

            if (sitatics != currentSitatics) {
                currentSitatics = sitatics;
                fetchOrdersChart();
            }
        });

        const fetchOrdersChart = () => {
            $.ajax({
                url: "{{ route('admin.dashboard.statistics') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    type: currentSitatics
                },
                success: (response) => {
                   var chartLabels = response.data.labels;
                   var chartData = response.data.values;
                   loadChart(chartLabels, chartData);

                   $('#totalOrder').text(response.data.total);
                }
            });
        }

        fetchOrdersChart();

        var isDarkMode = document.getElementById('appContent').classList.contains('app-theme-dark');
        var chartLabelColor = isDarkMode ? "#fff" : '#24262D';
        var chartBgColor = isDarkMode ? "#5a5a5b63" : themeHoverColor;

        const ctx = document.getElementById('myChart').getContext('2d');
        let myChart;

        function loadChart(chartLabels, chartData) {

            if (myChart) {
                myChart.destroy();
            }

            // Define your chart data
            const data = {
                labels: chartLabels,
                datasets: [{
                        type: 'bar',
                        label: 'Orders',
                        data: chartData,
                        backgroundColor: '#FAA7B5',
                        borderRadius: {
                            topLeft: 12,
                            topRight: 12,
                            bottomLeft: 0,
                            bottomRight: 0
                        },
                        borderColor: themeHoverColor,
                        borderSkipped: false
                    },
                    {
                        type: 'line',
                        label: 'Orders',
                        data: chartData,
                        borderColor: themeColor,
                        backgroundColor: chartBgColor,
                        fill: true,
                        tension: 0.5,
                        pointBackgroundColor: 'white',
                        pointBorderColor: 'rgba(255, 99, 132, 1)',
                        pointRadius: 5
                    }
                ]
            };

            // Chart configuration
            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: false,
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                borderDash: [5, 5],
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            };

            // Initialize the chart
            myChart = new Chart(ctx, config);
        }

        const shopType = "{{ $generaleSetting?->shop_type }}";
        const ismultiShop = shopType != 'single' ? true : false;
        const labelsData = ismultiShop ? ["{{ __('Customer') }}", "{{ __('Shop') }}", "{{ __('Rider') }}"] : ["{{ __('Customer') }}", "{{ __('Rider') }}"];
        const chartData = ismultiShop ? ["{{ $totalCustomer }}", "{{ $totalShop }}", "{{ $totalRider }}"] : ["{{ $totalCustomer }}", "{{ $totalRider }}"];
        const chartDataBg = isDarkMode ? ['#EE456B', '#318E55', '#067BFF'] : ['#EE456B', '#067BFF'];

        // customer, shop, rider chart
        const cutOut = document.getElementById('myPieChart').getContext('2d');
        new Chart(cutOut, {
            type: 'doughnut',
            data: {
                labels: labelsData,
                datasets: [{
                    data: chartData,
                    backgroundColor: chartDataBg,
                    hoverOffset: 4,
                    borderWidth: 0,
                }]
            },
            options: {
                cutout: '50%',
                rotation: -90,
                circumference: 180,
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 1.5,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 14,
                            font: {
                                size: 14
                            },
                            color: chartLabelColor,
                            padding: 20
                        }
                    }
                },
            }
        });

        // Hide the alert box after 5 seconds
        const hideAlert = () => {
            setTimeout(() => {
                $('#alertBox').slideUp();
            }, 5000);

            setTimeout(() => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 100);
        }
        hideAlert();
    </script>
    @if ($flashSale)
        <script>
            // Set the start and end date/time
            var startDateAndTime = "{{ $flashSale->start_date }}T{{ $flashSale->start_time }}";
            var endDateAndTime = "{{ $flashSale->end_date }}T{{ $flashSale->end_time }}";
            let startDate = new Date(startDateAndTime).getTime();
            let endDate = new Date(endDateAndTime).getTime();

            // Update the countdown every 1 second
            let countdownInterval = setInterval(() => {
                let now = new Date().getTime();

                // If current time is before the start date, show "Deal Coming" message
                if (now < startDate) {
                    let distanceToStart = startDate - now;

                    // Time calculations for days, hours, minutes, and seconds
                    let days = Math.floor(distanceToStart / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((distanceToStart % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distanceToStart % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distanceToStart % (1000 * 60)) / 1000);

                    // Display the countdown with a "Deal Coming" message
                    document.getElementById("days").innerHTML = String(days).padStart(2, '0');
                    document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
                    document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
                    document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');
                    return;
                }

                // Once the current time is after the start date and before the end date, show the active countdown
                let distance = endDate - now;

                // If the deal has ended, stop the countdown and show the message
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("days").innerHTML = "00";
                    document.getElementById("hours").innerHTML = "00";
                    document.getElementById("minutes").innerHTML = "00";
                    document.getElementById("seconds").innerHTML = "00";
                    document.querySelector(".deal-text").innerHTML = "Deal Ended!";
                    return;
                }

                // Time calculations for days, hours, minutes, and seconds
                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result
                document.getElementById("days").innerHTML = String(days).padStart(2, '0');
                document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
                document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
                document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');
            }, 1000);
        </script>
    @endif
@endpush
@push('css')
    <style>
        /* Flash Deal Alert Styles */
        .flash-deal-alert {
            background: url("{{ asset('assets/images/flash-sale.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 8px;
            color: white;
            border-radius: 8px;
            padding: 16px 32px;
        }

        .deal-title,
        .deal-text {
            font-size: 24px;
            font-weight: 600;
            color: white;
            margin: 0;
            line-height: 32px;
        }

        /* Countdown Timer Styles */
        .countdown {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .countdown-section {
            text-align: center;
            padding: 4px 8px;
            border-radius: 8px;
            background-color: white;
            min-width: 68px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .countdown-label {
            font-size: 12px;
            color: #000;
        }
        .countdown-time {
            font-size: 20px;
            font-weight: bold;
            color: var(--theme-color);
        }
        .addBtn{
            border-radius: 25px;
            padding: 10px 20px;
        }
    </style>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@endpush
