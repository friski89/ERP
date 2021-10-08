@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('profile-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.profile_histories.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.id')</h5>
                    <span>{{ $profileHistory->id ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.gender')</h5>
                    <span>{{ $profileHistory->gender ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.phone_number')</h5>
                    <span>{{ $profileHistory->phone_number ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.blood_group')</h5>
                    <span>{{ $profileHistory->blood_group ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.no_ktp')</h5>
                    <span>{{ $profileHistory->no_ktp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.no_npwp')</h5>
                    <span>{{ $profileHistory->no_npwp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.address_ktp')</h5>
                    <span>{{ $profileHistory->address_ktp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.profile_histories.inputs.address_domisili')
                    </h5>
                    <span>{{ $profileHistory->address_domisili ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.profile_histories.inputs.status_domisili')
                    </h5>
                    <span>{{ $profileHistory->status_domisili ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profile_histories.inputs.user_id')</h5>
                    <span>{{ $profileHistory->user_id ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('profile-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\ProfileHistory::class)
                <a
                    href="{{ route('profile-histories.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
