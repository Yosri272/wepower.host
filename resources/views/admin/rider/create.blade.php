@extends('layouts.app')

<<<<<<< HEAD
=======
@section('header-title', __('Create New Rider'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center">
            <i class="fa-solid fa-user"></i>{{__('Create New Rider')}}
        </div>
    </div>

    <form action="{{ route('admin.rider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
<<<<<<< HEAD
            <div class="col-lg-9 mx-auto">
=======
            <div class="col-12 mx-auto">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                <div class="card mt-3">
                    <div class="card-body">

                        <div class="d-flex gap-2 border-bottom pb-2">
                            <i class="fa-solid fa-user"></i>
                            <h5>
                                {{__('User Information')}}
                            </h5>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <x-input label="First Name" name="first_name" type="text"
<<<<<<< HEAD
                                            placeholder="Enter first name" />
=======
                                            placeholder="Enter first name" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>

                                    <div class="col-lg-6 mt-3">
                                        <x-input label="Last Name" name="last_name" type="text"
<<<<<<< HEAD
                                            placeholder="Enter first name" />
=======
                                            placeholder="Enter last name" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <x-input label="Phone Number" name="phone" type="number"
<<<<<<< HEAD
                                        placeholder="Enter phone number" />
=======
                                        placeholder="Enter phone number" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>

                                <div class="mt-3">
                                    <x-input type="email" name="email" label="Email"
                                        placeholder="Enter Email Address" />
                                </div>

                                <div class="mt-3">
                                    <x-select label="Gender" name="gender">
                                        <option value="male">{{ __('Male') }}</option>
                                        <option value="female">{{ __('Female') }}</option>
                                        <option value="other">{{ __('Other') }}</option>
                                    </x-select>
                                </div>

                                <div class="mt-3">
<<<<<<< HEAD
                                    <x-input type="text" name="driving_lience" label="Driving Lience"
                                        placeholder="Enter Lience" />
=======
                                    <x-input type="text" name="driving_lience" label="Driving License"
                                        placeholder="Enter License" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <x-input type="text" name="password" label="Password"
<<<<<<< HEAD
                                            placeholder="Enter Password" />
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <x-input type="text" name="password_confirmation" label="Confirm Password"
=======
                                            placeholder="Enter Password" required="true"/>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <x-input type="text" name="password_confirmation" label="Confirm Password" required="true"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            placeholder="Enter Confirm Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mt-3 d-flex align-items-center justify-content-center">
                                    <div class="ratio1x1">
<<<<<<< HEAD
                                        <img id="previewProfile" src="{{ asset('defualt/defualt.jpg') }}" alt=""
=======
                                        <img id="previewProfile" src="{{ asset('default/default.jpg') }}" alt=""
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                            width="100%">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <x-file name="profile_photo" label="User profile (Ratio 1:1)"
                                        preview="previewProfile" />
                                </div>

                                <div class="mt-3">
                                    <x-input type="date" name="date_of_birth" label="Date of Birth" />
                                </div>

                                <div class="mt-3">
                                    <x-input type="text" name="vehicle_type" label="Vehicle Type"
<<<<<<< HEAD
                                        placeholder="Enter Vehicle Type" />
=======
                                        placeholder="Enter Vehicle Type" required="true"/>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 d-flex justify-content-end">
<<<<<<< HEAD
                            <button type="submit" class="btn btn-primary py-2">
                                {{__('Save And Update')}}
=======
                            <button type="submit" class="btn btn-primary py-2.5 px-5">
                                {{__('Submit')}}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
