@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Profile Details'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div>
        <h4>
            {{ __('Profile Details') }}
        </h4>
    </div>

<<<<<<< HEAD
    <div class="card mt-3 shadow-sm">
        <div class="card-body">
            <div class="d-flex gap-3">
                <div class="rounded overflow-hidden">
                    <img src="{{ $shop->logo }}" alt="" width="140">
                </div>

                <div class="flex-grow-1">
                    <div class="d-flex gap-2 justify-content-between ">
                        <h3 class="mb-2 pb-1">{{ $shop->name }}</h3>

                        <div>
                            <a href="{{ route('shop.profile.edit') }}" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-pen me-1"></i> {{ __('Edit') }}
                            </a>
                        </div>
                    </div>

                    <div class="d-flex gap-3 align-items-center">
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            {{ $shop->averageRating }}
                        </div>

                        <div class="border" style="width: 0; height: 16px;"></div>

                        <div>
                            {{ $shop->reviews->count() }}
                            {{ __('Reviews') }}
                        </div>
                    </div>

                    <a href="/shops/{{ $shop->id }}" target="_blank" class="btn btn-outline-primary mt-3">
                        {{ __('View Live') }}
                    </a>
                </div>
            </div>

            <div class="border-top my-3"></div>

            <div class="d-flex gap-4 flex-wrap">
                <div class="d-flex flex-column border gap-2 p-3">
                    <div>
                        <span> {{ __('Total products') }}:</span> {{ $shop->products->count() }}
                    </div>
                    <div>
                        <span>{{ __('Total Orders') }}:</span> {{ $shop->orders->count() }}
                    </div>
                </div>

                <div>
                    <h5> {{ __('Shop Information') }}</h5>
                    <table class="table mb-0">
                        <tr>
                            <td class="border-top">{{ __('Name') }}</td>
                            <td class="border-top">{{ $shop->name }}</td>
                        </tr>

                        <tr>
                            <td>{{ __('Estimated Delivery Time') }}</td>
                            <td>{{ $shop->estimated_delivery_time }}</td>
                        </tr>
                    </table>
                </div>

                <div class="ms-lg-4">
                    <h5> {{ __('User Information') }}</h5>
                    <table class="table mb-0">
                        <tr>
                            <td class="border-top">{{ __('Name') }}</td>
                            <td class="border-top">{{ $shop->user?->name }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Phone number') }}</td>
                            <td>{{ $shop->user?->phone }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Email') }}</td>
=======
    <div class="row mb-3">
        <div class="col-lg-8 mt-3">
            <div class="card rounded-12 position-relative overflow-hidden">
                <div class="card-body shop details p-2 border-bottom pb-3">
                    <div class="banner position-relative">
                        <img class="img-fit" src="{{ $shop->banner }}" />
                    </div>
                    <a href="{{ route('shop.profile.edit', $shop->id) }}" class="editBtn svg-bg">
                        <img src="{{ asset('assets/icons-admin/edit.svg') }}" alt="edit" loading="lazy" />
                        <span>{{ __('Edit') }}</span>
                    </a>
                    <div class="main-content d-flex align-items-center">
                        <div class="logo">
                            <img class="img-fit" src="{{ $shop->logo }}" />
                        </div>
                        <div class="personal">
                            <span class="name h4 mb-1">{{ $shop->name }}</span>
                            <div class="d-flex gap-2 align-items-center ">
                                <div>
                                    @foreach (range(1, 5) as $rating)
                                        @if ($shop->averageRating >= $rating)
                                            <i class="fa-solid fa-star text-warning"></i>
                                        @else
                                            <i class="fa-regular fa-star text-secondary"></i>
                                        @endif
                                    @endforeach
                                </div>
                                <div>
                                    <span class="fw-bold">{{ $shop->averageRating }}</span>
                                    ({{ $shop->reviews->count() }} {{ __('Reviews') }})
                                </div>
                            </div>
                            <div class="mt-2">
                                <a href="/shops/{{ $shop->id }}" target="blank"
                                    class="btn btn-outline-primary btn-sm">
                                    {{ __('View Live') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="m-0 p-3 border-bottom">{{ __('User Information') }}</h4>
                <div class="card-body pt-0">
                    <table class="table mb-0">
                        <tr>
                            <td style="width: 180px">{{ __('Name') }}:</td>
                            <td>{{ $shop->user?->name }}</td>
                        </tr>
                        <tr>
                            <td style="width: 180px">{{ __('Phone') }}:</td>
                            <td>{{ $shop->user?->phone }}</td>
                        </tr>
                        <tr>
                            <td style="width: 180px">{{ __('Email') }}:</td>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            <td>{{ $shop->user?->email }}</td>
                        </tr>
                    </table>
                </div>
<<<<<<< HEAD

            </div>

=======
            </div>

            <div class="card mt-3">
                <h4 class="m-0 p-3 border-bottom">{{ __('Shop Information') }}</h4>
                <div class="card-body pt-0">
                    <table class="table mb-0">
                        <tr>
                            <td style="width: 180px">{{ __('Name') }}:</td>
                            <td>{{ $shop->name }}</td>
                        </tr>
                        <tr>
                            <td style="width: 180px">{{ __('Estimated Delivery') }}:</td>
                            <td>{{ $shop->estimated_delivery_time }}</td>
                        </tr>
                        <tr>
                            <td style="width: 180px">{{ __('Shop Description') }}:</td>
                            <td>{{ $shop->description }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-3">
            <div class="card h-100">
                <h4 class="m-0 p-3 border-bottom">{{ __('Product Information') }}</h4>
                <div class="card-body pt-0">
                    <table class="table mb-0">
                        <tr>
                            <td style="width: 180px">{{ __('Total Products') }}:</td>
                            <td>
                                <span class="fw-bold">{{ $shop->products->count() }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 180px">{{ __('Total Orders') }}:</td>
                            <td>
                                <span class="fw-bold">{{ $shop->orders->count() }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 180px; text-transform: capitalize">{{ __('reviews') }}</td>
                            <td>
                                <span class="fw-bold">{{ $shop->reviews->count() }}</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>
@endsection
