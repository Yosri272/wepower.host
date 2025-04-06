@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Edit Banner'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="fa-solid fa-image"></i> {{__('Edit Banner')}}
        </div>
    </div>
    <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-md-6">
                <div class="card mt-3 h-100">
                    <div class="card-body">
                        <div class="">
                            <x-input label="Title" name="title" type="text" placeholder="Enter Short Title" :value="$banner->title" />
                        </div>

                        <div class="mt-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <div class="ratio4x1">
<<<<<<< HEAD
                                    <img src="{{ $banner->thumbnail ?? asset('defualt/defualt.jpg') }}" id="banner" alt="" width="100%">
=======
                                    <img src="{{ $banner->thumbnail ?? asset('default/default.jpg') }}" id="banner" alt="" width="100%">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                            <x-file name="banner" label="Banner Ratio 4:1 (2000 x 500 px)" preview="banner" />
                        </div>

<<<<<<< HEAD
=======
                        @if ($businessModel != 'single')
                            <div class="mt-4 border d-inline-flex align-items-center justify-content-center gap-2 p-2 rounded">
                                <label for="forShop" class="form-label mb-0 fw-bold">
                                    {{__('This Banner For Own Shop')}}
                                </label>
                                <input type="checkbox" name="for_shop" id="forShop" style="width: 20px; height: 20px" {{ $banner->shop_id ? 'checked' : '' }} class="form-check-input m-0" />
                            </div>
                        @endif

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <div class="col-12 d-flex justify-content-end mt-4">
                            <button class="btn btn-primary py-2 px-5">
                                {{__('Submit')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </form>
@endsection
