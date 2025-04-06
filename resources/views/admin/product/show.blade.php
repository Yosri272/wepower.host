@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Product Details'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div>
        <h4>
            {{ __('Product Details') }}
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
<<<<<<< HEAD
                                    {{ __('status') }}:
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    @if ($product->is_approve)
                                        <span class="status-approved">
                                            <i class="fa fa-check text-success"></i> {{ __('Approved') }}
                                        </span>
                                    @else
                                        <span class="status-pending">
                                            <i class="fa-solid fa-triangle-exclamation"></i>
                                            {{ __('Pending') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                    <h3 class="mb-2 mt-3 pb-1">{{ $product->name }}</h3>

                    <div>
                        <h6 class="mb-1 text-muted">
                            {{ __('Short Description') }}
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
=======
                    @php
                        $categories = $product->categories?->pluck('name')->join(', ');
                        $colors = $product->colors?->pluck('name')->join(', ');
                        $sizes = $product->sizes?->pluck('name')->join(', ');
                    @endphp
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    <h5 class="text-dark fw-bold">
                        {{ __('General Information') }}
                    </h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">{{ __('Brand') }}</td>
<<<<<<< HEAD
                            <td class="py-1">:{{ __($product->brand?->name) }}</td>
=======
                            <td class="py-1">
                                : {{ __($product->brand?->name) }}
                            </td>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">{{ __('Categories') }}</td>
                            <td class="py-1">
<<<<<<< HEAD
                                :@foreach ($product->categories as $category)
                                    {{ __($category->name) }}@if (!$loop->last), @endif
                                @endforeach
=======
                                : {{ $categories }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">{{ __('Colors') }}</td>
                            <td class="py-1">
<<<<<<< HEAD
                                :@foreach ($product->colors as $color)
                                    {{ __($color->name) }}@if (!$loop->last), @endif
                                @endforeach
=======
                                : {{ $colors }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">{{ __('Sizes') }}</td>
                            <td class="py-1">
<<<<<<< HEAD
                                :@foreach ($product->sizes as $size)
                                    {{ __($size->name) }}@if (!$loop->last), @endif
                                @endforeach
=======
                                : {{ $sizes }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h5 class="text-dark fw-bold">{{ __('Price Information') }}</h5>
                    <table class="table table-borderless mb-0 border-0">
                        <tr>
                            <td class="ps-0 py-1">{{ __('Price') }}</td>
                            <td class="py-1">: {{ showCurrency($product->price) }}</td>
                        </tr>
                        <tr>
                            <td class="ps-0 py-1">{{ __('Discount Price') }}</td>
                            <td class="py-1">
<<<<<<< HEAD
                               : {{ showCurrency($product->discount_price) }}
=======
                                : {{ showCurrency($product->discount_price) }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </td>
                        </tr>
                    </table>
                </div>

                <div>
<<<<<<< HEAD
                    <h5 class="text-dark fw-bold"> {{__('Tags')}}</h5>
                    <p>
                        Secret Covered in Sand Comic book pdf , comic , book
=======
                    <h5 class="text-dark fw-bold">
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

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <h5 class="text-dark fw-bold">
                    {{ __('Description') }}
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
