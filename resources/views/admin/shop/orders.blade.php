@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div>
        <h4>Shop Details</h4>
    </div>

     @include('admin.shop.header-nav')

    <div class="container-fluid mt-3">

        <div class="card">
=======
@section('header-title', __('Shop Orders'))

@section('content')

    <div class="container-fluid">

        <div class="card">
            <div class="card-header py-3 d-flex align-items-center justify-content-between flex-wrap">
                <h4 class="m-0">{{ __('Shop Details') }}</h4>
            </div>
            <div class="card-body">
                @include('admin.shop.header-nav')
            </div>
        </div>

        <div class="card mt-3">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            <div class="card-body">

                <div class="table-responsive">

<<<<<<< HEAD
                    <table class="table table-responsive-lg">
=======
                    <table class="table table-responsive-lg border-left-right">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <thead>
                            <tr>
                                <th>{{ __('Order ID') }}</th>
                                <th>{{ __('Order Date') }}</th>
                                <th>{{ __('Customer') }}</th>
                                <th>{{ __('Total Amount') }}</th>
                                <th>{{ __('Payment Method') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($orders as $order)
=======
                            @forelse ($orders as $order)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                <tr>
                                    <td>{{ $order->prefix . $order->order_code }}</td>
                                    <td>{{ $order->created_at->format('d M Y') }}</td>
                                    <td>{{ $order->customer?->user?->name }}</td>
                                    <td>
                                        {{ showCurrency($order->payable_amount) }}
                                        <br>
<<<<<<< HEAD
                                        <span class="badge rounded-pill text-bg-primary">{{ $order->payment_status }}</span>
=======
                                        <span
                                            class="badge rounded-pill text-bg-primary">{{ $order->payment_status }}</span>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>
                                        <a href="{{ route('admin.order.show', $order->id) }}" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="view order details"
<<<<<<< HEAD
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
=======
                                            class="circleIcon svg-bg">
                                            <img src="{{ asset('assets/icons-admin/eye.svg') }}" alt="icon"
                                                loading="lazy" />
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%" class="text-center">{{ __('No Data Found') }}</td>
                                </tr>
                            @endforelse
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <div class="my-3">
            {{ $orders->links() }}
        </div>

    </div>
@endsection
