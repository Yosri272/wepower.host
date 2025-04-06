@extends('layouts.app')
<<<<<<< HEAD
=======
@section('header-title', __('Delivery Charges'))

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
@section('content')
    <div class="d-flex align-items-center flex-wrap gap-3 justify-content-between px-3">
        <h4>{{ __('Manage Delivery Charge') }}</h4>

<<<<<<< HEAD
=======
        @hasPermission('admin.deliveryCharge.create')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        <a href="{{ route('admin.deliveryCharge.create') }}" class="btn py-2 btn-primary">
            <i class="fa fa-plus-circle"></i>
            {{ __('Create New') }}
        </a>
<<<<<<< HEAD
=======
        @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    </div>

    <div class="container-fluid mt-3">

        <div class="my-3 card">
            <div class="card-body">
                <div class="table-responsive">
<<<<<<< HEAD
                    <table class="table border table-responsive-lg">
=======
                    <table class="table border-left-right table-responsive-lg">
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th class="text-center">{{ __('Min. Order QTY') }}</th>
                                <th class="text-center">{{ __('Max. Order QTY') }}</th>
                                <th class="text-center">{{ __('Charge') }}</th>
                                <th class="text-center">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        @forelse($deliveryCharges as $deliveryCharge)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}.
                                </td>

                                <td class="text-center">{{ $deliveryCharge->min_qty }}</td>
                                <td class="text-center">{{ $deliveryCharge->max_qty }}</td>
                                <td class="text-center">{{ showCurrency($deliveryCharge->charge) }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
<<<<<<< HEAD

                                        <a href="{{ route('admin.deliveryCharge.edit', $deliveryCharge->id) }}" class="btn btn-outline-info btn-sm circleIcon">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                        <a href="{{ route('admin.deliveryCharge.destroy', $deliveryCharge->id) }}" class="btn btn-outline-danger btn-sm deleteConfirm circleIcon">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>

=======
                                        @hasPermission('admin.deliveryCharge.edit')
                                            <a href="{{ route('admin.deliveryCharge.edit', $deliveryCharge->id) }}" class="btn btn-outline-info btn-sm circleIcon">
                                                <img src="{{ asset('assets/icons-admin/edit.svg') }}" alt="edit" loading="lazy" />
                                            </a>
                                        @endhasPermission
                                        @hasPermission('admin.deliveryCharge.destroy')
                                            <a href="{{ route('admin.deliveryCharge.destroy', $deliveryCharge->id) }}" class="btn btn-outline-danger btn-sm deleteConfirm circleIcon">
                                                <img src="{{ asset('assets/icons-admin/trash.svg') }}" alt="delete" loading="lazy" />
                                            </a>
                                        @endhasPermission
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                                    </div>
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
            {{ $deliveryCharges->links() }}
        </div>

    </div>
@endsection

