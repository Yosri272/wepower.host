@extends('layouts.app')

@section('header-title', __('New currency'))

@section('content')
    <div class="page-title">
        <div class="d-flex gap-2 align-items-center text-muted">
            {{ __('New currency') }}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-8 col-md-10 m-auto">
            <form action="{{ route('admin.currency.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between gap-2 py-3">
                        <h4 class="card-title m-0">
                            {{ __('Add New currency') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <x-input name="name" type="text" placeholder="Currency name exm:(USD,BDT,INR)"
                                    label="Currency Name" required="true" />
                            </div>

                            <div class="col-12 col-md-6">
                               <label for="symbol" class="form-label">{{ __('Currency Symbol') }}</label>
                                  <div class="d-flex align-items-center gap-2">
                                      <input name="symbol" id="symbol" class="form-control" type="text" 
                                            placeholder="Currency Symbol exm:($,৳,₹)" required value="﷼">
                                       <img src="{{ asset('assets/images/riyals.png') }}" alt="Riyal" width="30" height="30">
                                    </div>
                            </div>


                            <div class="col-12 col-md-6 mb-3">
                                <x-input name="rate" type="text" placeholder="Currency Rate" required="true"
                                    label="Currency Rate ({{ $defaultCurrency?->name ?? 'USD' }}=1)" onlyNumber="true" />
                                <small>{{ __('Enter the amount in ') . ($defaultCurrency?->name ?? 'USD') . ' (1 ' . ($defaultCurrency?->name ?? 'USD') . ' = your current rate)' }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer py-3 d-flex justify-content-between flex-wrap gap-2">
                        <a href="{{ route('admin.currency.index') }}" class="btn btn-light px-4 py-2.5">
                            {{ __('Cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary px-5 py-2.5">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
