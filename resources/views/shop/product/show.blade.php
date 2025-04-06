@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div>
        <h4>
            {{__('Product Details')}}
=======
@section('header-title', __('Product Details'))

@section('content')
    <div>
        <h4>
            {{ __('Product Details') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </h4>
    </div>

    <div class="card mt-3 shadow-sm">
        <div class="card-body">
            <div class="d-flex gap-3">
                <div class="text-center">
                    <div class="rounded overflow-hidden ratio1x1">
                        <img src="{{ $product->thumbnail }}" alt="" width="140">
                    </div>
                    <a href="/products/{{ $product->id }}/details" target="_blank" class="btn btn-outline-primary mt-3">
<<<<<<< HEAD
                        <i class="fa-solid fa-globe"></i> {{__('View Live')}}
=======
                        <i class="fa-solid fa-globe"></i> {{ __('View Live') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </a>
                </div>

                <div class="flex-grow-1">
                    <div class="d-flex flex-wrap gap-3 justify-content-between">
                        <div class="d-flex gap-3 productThumbnail">
                            @foreach ($product->thumbnails() as $photo)
                                <img src="{{ $photo->thumbnail }}" alt="product" />
                            @endforeach
                        </div>

                        <div>
                            <div class="d-flex gap-3 border p-2 rounded fw-bold">
<<<<<<< HEAD
                                <div>{{ $product->orders->count() }} {{__('Orders')}}</div>
=======
                                <div>{{ $product->orders->count() }} {{ __('Orders') }}</div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                                <div class="border-start w-0" style="height: 20px"></div>

                                <div>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    {{ number_format($product->reviews->avg('rating'), 1) }}
                                </div>

                                <div class="border-start w-0" style="height: 20px"></div>

<<<<<<< HEAD
                                <div>{{ number_format($product->reviews->count(), 1) }} {{__('Reviews')}}</div>
=======
                                <div>{{ number_format($product->reviews->count(), 1) }} {{ __('Reviews') }}</div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </div>
                            <div class="mt-2">
                                <div>
                                    {{ __('status') }}:
                                    @if ($product->is_approve)
                                        <span class="status-approved">
                                            <i class="fa fa-check text-success"></i>
<<<<<<< HEAD
                                            {{__('Approved')}}
=======
                                            {{ __('Approved') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        </span>
                                    @else
                                        <span class="status-pending">
                                            <i class="fa-solid fa-triangle-exclamation"></i>
<<<<<<< HEAD
                                            {{__('Pending')}}
=======
                                            {{ __('Pending') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                    <h3 class="mb-2 mt-3 pb-1">{{ $product->name }}</h3>

                    <div>
                        <h6 class="mb-1 text-muted">
<<<<<<< HEAD
                            {{__('Short Description')}}
=======
                            {{ __('Short Description') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </h6>
                        <p>{{ $product->short_description }}</p>
                    </div>
                </div>
            </div>

            <div class="border-top my-3"></div>

            <!-- General Information -->
            <div class="d-flex gap-4 flex-wrap justify-content-lg-between">

                <div>
<<<<<<< HEAD
                    <h5 class="text-dark fw-bold">{{__('General Information')}}</h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">
                                {{__('Brand')}}
                            </td>
                            <td class="py-1">:{{ $product->brand?->name }}</td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">
                                {{__('Categories')}}
                            </td>
                            <td class="py-1">
                                :@foreach ($product->categories as $category)
                                    {{ $category->name }}@if (!$loop->last), @endif
                                @endforeach
=======
                    @php
                        $categories = $product->categories?->pluck('name')->join(', ');
                        $colors = $product->colors?->pluck('name')->join(', ');
                        $sizes = $product->sizes?->pluck('name')->join(', ');
                    @endphp
                    <h5 class="text-dark fw-bold">{{ __('General Information') }}</h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">
                                {{ __('Brand') }}
                            </td>
                            <td class="py-1">
                                : {{ $product->brand?->name }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">
<<<<<<< HEAD
                                {{__('Colors')}}
                            </td>
                            <td class="py-1">
                                :@foreach ($product->colors as $color)
                                    {{ $color->name }}@if (!$loop->last), @endif
                                @endforeach
=======
                                {{ __('Categories') }}
                            </td>
                            <td class="py-1">
                                : {{ $categories }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">
<<<<<<< HEAD
                                {{__('Sizes')}}
                            </td>
                            <td class="py-1">
                                :@foreach ($product->sizes as $size)
                                    {{ $size->name }}@if (!$loop->last), @endif
                                @endforeach
=======
                                {{ __('Colors') }}
                            </td>
                            <td class="py-1">
                                : {{ $colors }}
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">
                                {{ __('Sizes') }}
                            </td>
                            <td class="py-1">
                                : {{ $sizes }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h5 class="text-dark fw-bold">
<<<<<<< HEAD
                        {{__('Price Information')}}
                    </h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">Price</td>
=======
                        {{ __('Price Information') }}
                    </h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">{{ __('Price') }}</td>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            <td class="py-1">: {{ showCurrency($product->price) }}</td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">
<<<<<<< HEAD
                                {{__('Discount Price')}}
                            </td>
                            <td class="py-1">
                               : {{ showCurrency($product->discount_price) }}
=======
                                {{ __('Discount Price') }}
                            </td>
                            <td class="py-1">
                                : {{ showCurrency($product->discount_price) }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h5 class="text-dark fw-bold">
<<<<<<< HEAD
                        {{__('Tags')}}
                    </h5>
                    <p>
                        Secret Covered in Sand Comic book pdf , comic , book
=======
                        {{ __('Current Stock Quantity') }}
                    </h5>
                    <p class="mb-0 fw-bold">
                        {{ $product->quantity }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </p>
                </div>
            </div>

            <div class="border-top my-3"></div>

            <div>
<<<<<<< HEAD
                <h5 class="text-dark fw-bold">
                    {{__('Description')}}
=======
                @if ($product->video)
                    <div>
                        <h5 class="text-dark fw-bold">
                            {{ __('Product Video') }}
                        </h5>
                    </div>
                    <div id="videoContainer">
                        @if ($product->video->type == 'file')
                            <video controls style="max-width: 700px; max-height: 300px">
                                <source src="{{ asset($product->video->url) }}">
                            </video>
                        @elseif ($product->video->type != 'file')
                            <div style="max-width: 700px; overflow: hidden">
                                {!! $product->video->url !!}
                            </div>
                        @endif
                    </div>
                @endif

                <h5 class="text-dark fw-bold">
                    {{ __('Description') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </h5>
                <p>
                    {!! $product->description !!}
                </p>
            </div>

        </div>
    </div>
@endsection
<<<<<<< HEAD
=======

@push('css')
    <style>
        iframe {
            height: 380px;
        }
    </style>
@endpush
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
