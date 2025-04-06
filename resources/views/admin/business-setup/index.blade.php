@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="bi bi-buildings"></i> {{__('Business Settings')}}
        </div>
    </div>

    <div class="mt-4">
=======
@section('header-title', __('Business Settings'))
@section('header-subtitle', __('Manage Business Settings'))

@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="bi bi-buildings"></i> {{ __('Business Settings') }}
        </div>
    </div>

    <div class="mt-3">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        @include('admin.business-setup.header')
    </div>

    <form action="{{ route('admin.business-setting.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!--######## Basic Information ##########-->
        <div class="card mt-4">
<<<<<<< HEAD
            <div class="card-body">

                <div class="d-flex align-items-center gap-2 border-bottom pb-2">
                    <i class="bi bi-briefcase-fill"></i>
                    <h5 class="mb-0">{{__('Business Information')}}</h5>
                </div>

=======
            <div class="card-header d-flex align-items-center gap-2 py-3">
                <i class="bi bi-briefcase-fill"></i>
                <h5 class="mb-0">{{ __('Business Information') }}</h5>
            </div>
            <div class="card-body">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <div class="row">

                    <div class="col-lg-4 mt-4">
                        <x-input type="text" label="Company Name" name="name"
                            placeholder="Enter Company Name / Business Name" :value="$generaleSetting?->name" />
                    </div>

                    <div class="col-lg-4 mt-4">
                        <x-input type="text" label="Company Email" name="email" placeholder="Enter Company Email"
                            :value="$generaleSetting?->email" />
                    </div>

                    <div class="col-lg-4 mt-4">
                        <x-input type="text" label="Company Phone" name="mobile" placeholder="Enter Company Phone"
                            :value="$generaleSetting?->mobile" />
                    </div>

                    @php
                        $businessType = $generaleSetting?->shop_type ?? 'multi';
                    @endphp

                    <div class="col-lg-4 mt-4">
<<<<<<< HEAD
                        <label class="form-label">{{__('Business Model')}}</label>
=======
                        <label class="form-label">{{ __('Business Model') }}</label>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <div class="d-flex flex-wrap align-items-center gap-5 border rounded fw-medium"
                            style="padding: 10px;">
                            <div class="flex-grow-1">
                                <input type="radio" name="shop_type" value="single" class="form-check-input"
                                    id="single" {{ $businessType == 'single' ? 'checked' : '' }}>
                                <label for="single" class="m-0 cursor-pointer">
<<<<<<< HEAD
                                    {{__('Singel Shop')}}
=======
                                    {{ __('Single Shop') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </label>
                            </div>

                            <div class="flex-grow-1 d-flex align-items-center gap-2">
                                <input type="radio" name="shop_type" value="multi" class="form-check-input"
                                    id="multi" {{ $businessType == 'multi' ? 'checked' : '' }}>
                                <label for="multi" class="m-0 cursor-pointer">
<<<<<<< HEAD
                                    {{__('Multi Shop')}}
=======
                                    {{ __('Multi Shop') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <label class="form-label">
                            {{ __('Currency Position') }}
                        </label>
                        <div class="d-flex flex-wrap align-items-center gap-5 border rounded fw-medium"
                            style="padding: 10px;">
                            <div class="flex-grow-1">
                                <input type="radio" name="currency_position" value="prefix" class="form-check-input"
                                    id="prefix" {{ $generaleSetting?->currency_position == 'prefix' ? 'checked' : '' }}>
<<<<<<< HEAD
                                <label for="prefix" class="m-0">($) {{ __('Left') }}</label>
=======
                                <label for="prefix" class="m-0">
                                    ({{ $generaleSetting?->currency ?? '$' }}) {{ __('Left') }}
                                </label>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>

                            <div class="flex-grow-1 d-flex align-items-center gap-2">
                                <input type="radio" name="currency_position" value="suffix" class="form-check-input"
                                    id="suffix" {{ $generaleSetting?->currency_position == 'suffix' ? 'checked' : '' }}>
<<<<<<< HEAD
                                <label for="suffix" class="m-0">{{__('Right')}} ($)</label>
=======
                                <label for="suffix" class="m-0">
                                    {{ __('Right') }} ({{ $generaleSetting?->currency ?? '$' }})
                                </label>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <x-select name="timezone" label="Time Zone">
                            @foreach ($timezones as $timezone)
                                <option value="{{ $timezone['zone'] }}"
                                    {{ config('app.timezone') == $timezone['zone'] ? 'selected' : '' }}>
                                    {{ $timezone['diff_from_GMT'] . ' - ' . $timezone['zone'] }}
                                </option>
                            @endforeach
                        </x-select>
                    </div>

                </div>

            </div>
        </div>

<<<<<<< HEAD

        <!--######## Theme Settings ##########-->
        <div class="row">
            <div class="col-lg-4">

                <div class="card mt-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center gap-2 border-bottom pb-2">
                            <i class="bi bi-palette-fill"></i>
                            <h5 class="mb-0">
                                {{__('Theme Color Settings')}}
                            </h5>
                        </div>

                        <div class="d-flex align-items-center gap-5 mt-4 flex-wrap">
                            <div class="color-panel">
                                <span class="color-input"
                                    style="background: {{ $generaleSetting?->primary_color ?? '#8b5cf6' }}"></span>
                                <p class="color">
                                    {{ $generaleSetting?->primary_color ?? '#8b5cf6' }}
                                </p>
                                <label for="primary_color" class="color-label">
                                    {{ __('Primary Color') }}
                                </label>
                            </div>

                            <div class="color-panel">
                                <span class="color-input"
                                    style="background: {{ $generaleSetting?->secondary_color ?? '#ede9fe' }}"></span>
                                <p class="color">
                                    {{ $generaleSetting?->secondary_color ?? '#ede9fe' }}
                                </p>
                                <label for="secondary_color" class="color-label">
                                    {{ __('Secondary Color') }}
                                </label>
                            </div>
                        </div>

                    </div>
=======
        <div class="card mt-3">
            <div class="card-header py-3">
                <h4 class="card-title m-0 fz-20">
                    <i class="bi bi-credit-card-2-front-fill"></i> {{ __('Payment Method Setup') }}
                </h4>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                    <!-- Cash on Delivery -->
                    <label for="cash"
                        class="payment-card border p-3 rounded {{ $generaleSetting?->cash_on_delivery ? 'selected' : '' }}">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3">💰</div>
                            <span class="fw-semibold">
                                {{ __('Cash on Delivery') }}
                            </span>
                        </div>
                        <div class="mt-2 d-flex align-items-center gap-1">
                            <span class="fw-semibold text-muted">
                                {{ $generaleSetting?->cash_on_delivery ? __('Enable') : __('Disable') }}
                            </span>
                            <label class="switch mb-0">
                                <input id="cash" name="cash_on_delivery" type="checkbox"
                                    {{ $generaleSetting?->cash_on_delivery ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="check-icon">✅</div>
                    </label>

                    <!-- Online Payment -->
                    <label for="online"
                        class="payment-card border p-3 rounded {{ $generaleSetting?->online_payment ? 'selected' : '' }}">
                        <div class="d-flex align-items-center">
                            <div class="me-3 fs-3">💳</div>
                            <span class="fw-semibold">
                                {{ __('Online Payment') }}
                            </span>
                        </div>
                        <div class="mt-2 d-flex align-items-center gap-1">
                            <span class="fw-semibold text-muted">
                                {{ $generaleSetting?->online_payment ? __('Enable') : __('Disable') }}
                            </span>
                            <label class="switch mb-0">
                                <input id="online" name="online_payment" type="checkbox"
                                    {{ $generaleSetting?->online_payment ? 'checked' : '' }} />
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="check-icon">✅</div>
                    </label>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>

            </div>
        </div>

<<<<<<< HEAD
        <div class="d-flex justify-content-end mt-4 mb-3">
            <button type="submit" class="btn btn-primary py-2 px-3">
                {{__('Save And Update')}}
            </button>
        </div>

    </form>
@endsection
=======
        @hasPermission('admin.business-setting.update')
            <div class="d-flex justify-content-end mt-4 mb-3">
                <button type="submit" class="btn btn-primary py-2.5 px-3">
                    {{ __('Save And Update') }}
                </button>
            </div>
        @endhasPermission
    </form>
@endsection
@push('css')
    <style>
        .payment-card {
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            position: relative;
            min-width: 280px;
        }

        .payment-card.selected {
            border-color: #28a745 !important;
            box-shadow: 0 0 4px rgba(40, 167, 69, 0.3);
        }

        .check-icon {
            position: absolute;
            top: 6px;
            right: 10px;
            font-size: 1rem;
            color: #28a745;
            display: none;
        }

        .payment-card.selected .check-icon {
            display: block;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $('#cash, #online').on('change', function() {
            if ($(this).is(':checked')) {
                $(this).closest('.payment-card').addClass('selected');
            } else {
                $(this).closest('.payment-card').removeClass('selected');
                if (!$('#cash').is(':checked') && !$('#online').is(':checked')) {
                    $('#cash').closest('.payment-card').addClass('selected');
                    $('#cash').prop('checked', true);
                }
            }
        });

        $('#online').on('change', function() {
            if (!$(this).is(':checked')) {
                $('#cash').prop('checked', true);
                $('#cash').closest('.payment-card').addClass('selected');
            }
        });

    </script>
@endpush
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
