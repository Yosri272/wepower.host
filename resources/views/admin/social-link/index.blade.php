@extends('layouts.app')
<<<<<<< HEAD
=======

@section('title', __('Social Link List'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between px-3">
        <h4>
            {{ __('Social link List') }}
        </h4>
    </div>

    <div class="container-fluid mt-3">

        <div class="mb-3 card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th class="text-center">{{ __('SL') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Link') }}</th>
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        @forelse($socialLinks as $key => $socialLink)
                            @php
                                $serial = $socialLinks->firstItem() + $key;
                            @endphp
                            <tr>
                                <td class="text-center">{{ $serial }}</td>
                                <td>
<<<<<<< HEAD
                                    <img src="{{ asset($socialLink->logo) }}" alt="" width="22">
                                    {{ $socialLink->name }}
                                </td>

                                <td>
                                   {{ Str::limit($socialLink->link, 60, '...') }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex gap-3 justify-content-center">
                                        <button type="button" class="btn btn-outline-primary circleIcon btn-sm" onclick="openColorUpdateModal({{ $socialLink }})">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>

                                    </div>
=======
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div class="social-icon">
                                            <img src="{{ asset($socialLink->logo) }}" alt="" width="22">
                                        </div>
                                        {{ $socialLink->name }}
                                    </div>
                                </td>

                                <td>
                                    {{ $socialLink->link ? Str::limit($socialLink->link, 60, '...') : '--' }}
                                </td>

                                <td class="text-center">
                                    @hasPermission('admin.socialLink.update')
                                        <div class="d-flex gap-3 justify-content-center">
                                            <button type="button" class="btn btn-outline-primary circleIcon btn-sm"
                                                onclick="openColorUpdateModal({{ $socialLink }})">
                                                <img src="{{ asset('assets/icons-admin/edit.svg') }}" alt="edit" loading="lazy" />
                                            </button>
                                        </div>
                                    @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="100%">{{ __('No Data Found') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="my-3">
            {{ $socialLinks->withQueryString()->links() }}
        </div>

    </div>

<<<<<<< HEAD
    <!--=== update color Modal ===-->
=======
    <!--=== update Modal ===-->
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    <form action="" id="updateColor" method="POST">
        @csrf
        <div class="modal fade" id="updateBrand" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            {{ __('Update Social Link') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="updateName" class="form-label">
                                {{ __('Name') }}
                            </label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="updateName" name="name" required value="" readonly/>
=======
                            <input type="text" class="form-control" id="updateName" name="name" required
                                value="" readonly />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>

                        <div class="mb-3">
                            <label for="updateLink" class="form-label">
                                {{ __('Social Link') }}
                            </label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="updateLink" name="link" value=""/>
=======
                            <input type="text" class="form-control" id="updateLink" name="link" value="" />
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                            {{__('Update Link')}}
=======
                            {{ __('Update Link') }}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

<<<<<<< HEAD
@push('scripts')

<script>
    const openColorUpdateModal = (socialLink) => {

        $("#updateName").val(socialLink.name);
        $("#updateLink").val(socialLink.link);
        $("#updateColor").attr('action', `{{ route('admin.socialLink.update', ':id') }}`.replace(':id', socialLink.id));

        $("#updateBrand").modal('show');
    }
</script>

=======
@push('css')
    <style>
        .social-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #f3f4f6;
        }
        .social-icon img {
            width: 24px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        const openColorUpdateModal = (socialLink) => {

            $("#updateName").val(socialLink.name);
            $("#updateLink").val(socialLink.link);
            $("#updateColor").attr('action', `{{ route('admin.socialLink.update', ':id') }}`.replace(':id', socialLink
                .id));

            $("#updateBrand").modal('show');
        }
    </script>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@endpush
