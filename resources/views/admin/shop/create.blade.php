@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="fa-solid fa-shop"></i> {{__('Add New Shop')}}
=======
@section('header-title', __('Add New Shop'))

@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="fa-solid fa-shop"></i> {{ __('Add New Shop') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        </div>
    </div>
    <form action="{{ route('admin.shop.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!--######## User Information ##########-->
        <div class="card mt-3">
            <div class="card-body">

                <div class="d-flex gap-2 border-bottom pb-2">
                    <i class="fa-solid fa-user"></i>
                    <h5>
<<<<<<< HEAD
                        {{__('User Information')}}
=======
                        {{ __('User Information') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </h5>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
<<<<<<< HEAD
                                    <x-input label="First Name" name="first_name" type="text" placeholder="Enter Name"/>
=======
                                    <x-input label="First Name" name="first_name" type="text" placeholder="Enter Name"
                                        required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
<<<<<<< HEAD
                                    <x-input label="Last Name" name="last_name" type="text" placeholder="Enter Name"/>
=======
                                    <x-input label="Last Name" name="last_name" type="text" placeholder="Enter Name" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
<<<<<<< HEAD
                            <x-input label="Phone Number" name="phone" type="number" placeholder="Enter phone number" />
=======
                            <x-input label="Phone Number" name="phone" type="number" placeholder="Enter phone number"
                                required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>

                        <div class="mt-3">
                            <x-select label="Gender" name="gender">
<<<<<<< HEAD
                                <option value="male">{{__('Male')}}</option>
                                <option value="female">{{__('Female')}}</option>
                            </x-select>
                        </div>
                        <div class="mt-3">
                            <x-input type="email" name="email" label="Email" placeholder="Enter Email Address"/>
                        </div>
=======
                                <option value="male">{{ __('Male') }}</option>
                                <option value="female">{{ __('Female') }}</option>
                            </x-select>
                        </div>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-3 d-flex align-items-center justify-content-center">
                            <div class="ratio1x1">
                                <img id="previewProfile" src="https://placehold.co/500x500/png" alt=""
                                    width="100%">
                            </div>
                        </div>
                        <div class="mt-3">
<<<<<<< HEAD
                            <x-file name="profile_photo" label="User profile (Ratio 1:1)" preview="previewProfile" />
=======
                            <x-file name="profile_photo" label="User profile (Ratio 1:1)" preview="previewProfile"
                                required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--######## Account Information ##########-->
        <div class="card mt-4">
            <div class="card-body">

                <div class="d-flex gap-2 border-bottom pb-2">
                    <i class="fa-solid fa-user"></i>
                    <h5>
<<<<<<< HEAD
                        {{__('Account Information')}}
=======
                        {{ __('Account Information') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </h5>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
<<<<<<< HEAD
                        <x-input type="email" name="email" label="Email" placeholder="Enter Email Address" />
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <x-input type="text" name="password" label="Password" placeholder="Enter Password" />
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <x-input type="text" name="password_confirmation" label="Confirm Password"
                            placeholder="Enter Confirm Password" />
=======
                        <x-input type="email" name="email" label="Email" placeholder="Enter Email Address" required="true" />
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <x-input type="password" name="password" label="Password" placeholder="Enter Password" required="true" />
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <x-input type="password" name="password_confirmation" label="Confirm Password"
                            placeholder="Enter Confirm Password" required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>
            </div>
        </div>

        <!--######## Shop Information ##########-->
        <div class="card mt-4 mb-4">
            <div class="card-body">

                <div class="d-flex gap-2 border-bottom pb-2">
                    <i class="fa-solid fa-user"></i>
                    <h5>
<<<<<<< HEAD
                        {{__('Shop Information')}}
=======
                        {{ __('Shop Information') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </h5>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
<<<<<<< HEAD
                        <x-input type="text" name="shop_name" label="Shop Name" placeholder="Enter Shop Name" />
=======
                        <x-input type="text" name="shop_name" label="Shop Name" placeholder="Enter Shop Name"
                            required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <x-input type="text" name="address" label="Address" placeholder="Enter Address" />
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <div class="ratio1x1">
                                <img src="https://placehold.co/500x500/png" id="previewShopLogo" alt=""
                                    width="100%">
                            </div>
                        </div>
<<<<<<< HEAD
                        <x-file name="shop_logo" label="Shop logo(Ratio 1:1)" preview="previewShopLogo" />
=======
                        <x-file name="shop_logo" label="Shop logo(Ratio 1:1)" preview="previewShopLogo" required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <div class="ratio4x1">
<<<<<<< HEAD
                                <img src="https://placehold.co/2000x500/png" id="shopBanner" alt="" width="100%">
                            </div>
                        </div>
                        <x-file name="shop_banner" label="Shop banner Ratio 4:1 (2000 x 500 px)" preview="shopBanner" />
=======
                                <img src="https://placehold.co/2000x500/png" id="shopBanner" alt=""
                                    width="100%">
                            </div>
                        </div>
                        <x-file name="shop_banner" label="Shop banner Ratio 4:1 (2000 x 500 px)" preview="shopBanner"
                            required="true" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </div>
                </div>

                <div class="mt-3">
                    <label for="">
<<<<<<< HEAD
                        {{__('Description')}}
                    </label>
                    <div id="editor">
                        {!! old('description') !!}
                    </div>
                    <input type="hidden" id="description" name="description" value="{{ old('description') }}" />
                    @error('description')
                        <p class="text text-danger m-0">{{ $message }}</p>
                    @enderror
=======
                        {{ __('Description') }}
                    </label>
                    <textarea name="description" class="form-control" id="description" rows="2" placeholder="Enter Description" onkeyup="checkDescription()">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text text-danger m-0" id="errorDescription">{{ $message }}</p>
                    @enderror
                    <p class="text text-danger m-0" id="descriptionError"></p>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary py-2 px-5">
<<<<<<< HEAD
                        {{__('Submit')}}
=======
                        {{ __('Submit') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    </button>
                </div>

            </div>
        </div>
    </form>
@endsection
@push('scripts')
    <script>
<<<<<<< HEAD
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],
                    [{
                        'font': []
                    }],
                    ['bold', 'italic', 'underline', 'strike', 'blockquote'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'align': []
                    }],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    [{
                        'direction': 'rtl'
                    }],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    ['link', 'image', 'video', 'formula']
                ]
            }
        });

        quill.on('text-change', function(delta, oldDelta, source) {
            document.getElementById('description').value = quill.root.innerHTML;
        });
=======
        function checkDescription() {
            var errDescription = document.getElementById('errorDescription');
            if(errDescription){
                errDescription.remove();
            }

            if (document.getElementById('description').value.length > 200) {
                document.getElementById('descriptionError').innerHTML =
                    'Description must be less than or equal to 200 characters';
            } else {
                document.getElementById('descriptionError').innerHTML = '';
            }
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </script>
@endpush
