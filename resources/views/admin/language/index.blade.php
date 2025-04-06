@extends('layouts.app')
<<<<<<< HEAD
=======
@section('header-title', __('Languages'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-xl-8 col-lg-9 mt-2 mx-auto ">
                <div class="card border-0 rounded shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="m-0">{{ __('Languages') }}</h3>
<<<<<<< HEAD
                        <a class="btn btn-primary" href="{{ route('admin.language.create') }}">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            {{ __('Create New') }}
                        </a>
                    </div>
                </div>

                @foreach ($languages as $language)
=======

                        @hasPermission('admin.language.create')
                            <a class="btn btn-primary" href="{{ route('admin.language.create') }}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                {{ __('Create New') }}
                            </a>
                        @endhasPermission
                    </div>
                </div>

                @foreach ($allLanguages as $language)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    <div class="language-item shadow-sm">
                        <div class="d-flex gap-2 flex-wrap">
                            <div style="min-width: 160px">
                                <small class="text-black-50 d-block fst-italic" style="line-height: 0.7;">
                                    {{ __('Title') }}
                                </small>
                                <strong class="fs-6">{{ $language->title }}</strong>
                            </div>

                            <div>
                                <small class="text-black-50 d-block fst-italic" style="line-height: 0.7;">
                                    {{ __('Name') }}
                                </small>
                                <strong>{{ $language->name }}</strong>
                            </div>
                        </div>
                        <div>
<<<<<<< HEAD
                            <a href="{{ route('admin.language.edit', $language->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            @if ($language->name != 'en')
                                <a class="delete-confirm btn btn-danger btn-sm"
                                    href="{{ route('admin.language.delete', $language->id) }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            @endif
=======
                            @if ($language->name == config('app.locale'))
                                <span class="badge bg-light text-black">{{ __('Default') }}</span>
                            @else
                                <a href="{{ route('admin.language.setDefault', $language->id) }}" class="circleIcon btn btn-outline-warning btn-sm" title="{{ __('Set Default') }}">
                                    <img src="{{ asset('assets/icons-admin/language-2.svg') }}" alt="default" loading="lazy" />
                                </a>
                            @endif
                            @hasPermission('admin.language.edit')
                                <a href="{{ route('admin.language.edit', $language->id) }}" class="circleIcon btn btn-outline-info btn-sm">
                                    <img src="{{ asset('assets/icons-admin/edit.svg') }}" alt="edit" loading="lazy" />
                                </a>
                            @endhasPermission
                            @if ($language->name != 'en')
                                @hasPermission('admin.language.destroy')
                                    <a class="delete-confirm btn circleIcon btn-outline-danger btn-sm"
                                        href="{{ route('admin.language.delete', $language->id) }}">
                                        <img src="{{ asset('assets/icons-admin/trash.svg') }}" alt="trash" loading="lazy">
                                    </a>
                                @endhasPermission
                            @endif
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.delete-confirm').on('click', function(e) {
            e.preventDefault();
            const url = $(this).attr('href');
            Swal.fire({
<<<<<<< HEAD
                title: "{{__('Are you sure?')}}",
                text: "{{__('You will not be able to revert this!')}}",
=======
                title: "{{ __('Are you sure?') }}",
                text: "{{ __('You will not be able to revert this!') }}",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00B894',
                cancelButtonColor: '#d33',
<<<<<<< HEAD
                confirmButtonText: "{{__('Yes, delete it!')}}",
=======
                confirmButtonText: "{{ __('Yes, delete it!') }}",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        });
    </script>
@endpush
