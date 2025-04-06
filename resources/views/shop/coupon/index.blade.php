@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Promo Codes'))
@section('header-subtitle', __('Manage Promo Codes'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between px-3">

        <h4>
<<<<<<< HEAD
            {{ __('Coupon Vouchers') }}
        </h4>

=======
            {{ __('Promo Codes') }}
        </h4>

        @hasPermission('shop.voucher.create')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <a href="{{ route('shop.voucher.create') }}" class="btn py-2 btn-primary">
            <i class="bi bi-patch-plus"></i>
            {{ __('Create New') }}
        </a>
<<<<<<< HEAD

=======
        @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </div>

    <div class="mt-4">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="card rounded-12">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('Code') }}</th>
                                        <th>{{ __('Discount') }}</th>
                                        <th>{{ __('Min Amount') }}</th>
                                        <th>{{ __('Started At') }}</th>
                                        <th>{{ __('Expired At') }}</th>
<<<<<<< HEAD
                                        <th>{{ __('Status') }}</th>
=======
                                        @hasPermission('shop.voucher.toggle')
                                        <th>{{ __('Status') }}</th>
                                        @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td>{{ $coupon->code }}</td>
                                            <td>
                                                {!! $coupon->type->value == 'Amount' ? showCurrency($coupon->discount) : $coupon->discount . '%' !!}
                                            </td>
                                            <td>
                                                {{ showCurrency($coupon->min_amount) }}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($coupon->started_at)->format('M d, Y h:i a')}}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($coupon->expired_at)->format('M d, Y h:i a') }}
                                            </td>
<<<<<<< HEAD
=======
                                            @hasPermission('shop.voucher.toggle')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            <td>
                                                <label class="switch mb-0" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Status Update">
                                                    <a href="{{ route('shop.voucher.toggle', $coupon->id) }}">
                                                        <input type="checkbox" {{ $coupon->is_active ? 'checked' : '' }}>
                                                        <span class="slider round"></span>
                                                    </a>
                                                </label>
                                            </td>
<<<<<<< HEAD
                                            <td>
                                                <a href="{{ route('shop.voucher.edit', $coupon->id) }}" class="btn btn-outline-primary circleIcon" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="{{ route('shop.voucher.destroy', $coupon->id) }}" class="btn btn-outline-danger circleIcon deleteConfirm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </a>
=======
                                            @endhasPermission
                                            <td>
                                                @hasPermission('shop.voucher.edit')
                                                <a href="{{ route('shop.voucher.edit', $coupon->id) }}" class="btn btn-outline-info circleIcon" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Edit">
                                                    <img src="{{ asset('assets/icons-admin/edit.svg') }}" alt="edit" loading="lazy" />
                                                </a>
                                                @endhasPermission
                                                @hasPermission('shop.voucher.destroy')
                                                <a href="{{ route('shop.voucher.destroy', $coupon->id) }}" class="btn btn-outline-danger circleIcon deleteConfirm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Delete">
                                                    <img src="{{ asset('assets/icons-admin/trash.svg') }}" alt="trash" loading="lazy">
                                                </a>
                                                @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{ $coupons->links() }}

            </div>
        </div>
    </div>
@endsection
