@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Edit Promo Code'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')

    <div class="page-title">
        <div class="d-flex gap-2 align-items-center text-muted">
<<<<<<< HEAD
            <i class="bi bi-pencil-square"></i> {{ __('Edit Voucher') }}
=======
            <i class="bi bi-pencil-square"></i> {{ __('Edit Promo Code') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-9 col-md-10 m-auto">
            <form action="{{ route('shop.voucher.update', $coupon->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between gap-2 py-3">
                        <h4 class="card-title m-0">
<<<<<<< HEAD
                            <i class="bi bi-pencil-square"></i> {{ __('Edit Voucher') }}
=======
                            <i class="bi bi-pencil-square"></i> {{ __('Edit Promo Code') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
<<<<<<< HEAD
                                <x-input name="code" type="text" placeholder="Voucher Code" label="Voucher Code"  :value="$coupon->code"/>
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <x-select name="discount_type" label="Discount Type">
=======
                                <x-input name="code" type="text" placeholder="Voucher Code" label="Voucher Code"  :value="$coupon->code" required="true"/>
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <x-select name="discount_type" label="Discount Type" required="true">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    @foreach ($discountTypes as $type)
                                        <option value="{{ $type->value }}" @if ($coupon->type->value == $type->value) selected @endif>
                                            {{ __($type->value) }}
                                        </option>
                                    @endforeach
                                </x-select>
                            </div>

                            <div class="col-12 col-md-6">
                                <x-input name="discount" label="Discount" type="text" placeholder="Discount" :value="$coupon->discount"
<<<<<<< HEAD
                                    onlyNumber="true" />
=======
                                    onlyNumber="true" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <x-input name="min_order_amount" type="text" placeholder="Minimum Order Amount" :value="$coupon->min_amount"
<<<<<<< HEAD
                                    label="Minimum Order Amount" onlyNumber="true" />
=======
                                    label="Minimum Order Amount" onlyNumber="true" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <x-input name="limit_for_user" label="Limit For Single User" type="text" placeholder="exm: 5" onlyNumber="true" :value="$coupon->limit_for_user" />
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <x-input name="max_discount_amount" label="Maximum Discount Amount" type="text" placeholder="exm: $300" onlyNumber="true" :value="$coupon->max_discount_amount" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
<<<<<<< HEAD
                                        <x-input type="date" label="Start Date" name="start_date" :value="Carbon\Carbon::parse($coupon->started_at)->format('Y-m-d')" />
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <x-input type="time" label="Start Time" name="start_time" :value="Carbon\Carbon::parse($coupon->started_at)->format('H:i')" />
=======
                                        <x-input type="text" id="datepicker" label="Start Date" name="start_date" :value="Carbon\Carbon::parse($coupon->started_at)->format('m/d/Y')" required="true" placeholder="mm/dd/yyyy"/>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <x-input type="time" id="timepicker" label="Start Time" name="start_time" :value="Carbon\Carbon::parse($coupon->started_at)->format('H:i')" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6">
<<<<<<< HEAD
                                        <x-input type="date" label="Expired Date" name="expired_date" :value="Carbon\Carbon::parse($coupon->expired_at)->format('Y-m-d')" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <x-input type="time" label="Expired Time" name="expired_time" :value="Carbon\Carbon::parse($coupon->expired_at)->format('H:i')" />
=======
                                        <x-input type="text" id="datepicker2" label="Expired Date" name="expired_date" :value="Carbon\Carbon::parse($coupon->expired_at)->format('m/d/Y')" required="true" placeholder="mm/dd/yyyy"/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <x-input type="time" id="timepicker2" label="Expired Time" name="expired_time" :value="Carbon\Carbon::parse($coupon->expired_at)->format('H:i')" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer py-3 d-flex justify-content-between flex-wrap gap-2">
                        <a href="{{ route('shop.voucher.index') }}" class="btn btn-light px-4 py-2">
                            {{ __('Cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary px-5 py-2">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
<<<<<<< HEAD
=======
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $("#datepicker2").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });


            $('#timepicker').timepicker({
                'timeFormat': 'H:i:s'
            });

            $('#timepicker2').timepicker({
                'timeFormat': 'H:i:s'
            });
        });
    </script>
@endpush
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
