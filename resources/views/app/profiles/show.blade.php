@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">My Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('profiles.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show My Profile
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.gender')</h5>
                    <span>{{ $profile->gender ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.phone_number')</h5>
                    <span>{{ $profile->phone_number ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.blood_group')</h5>
                    <span>{{ $profile->blood_group ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.no_ktp')</h5>
                    <span>{{ $profile->no_ktp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.no_npwp')</h5>
                    <span>{{ $profile->no_npwp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.status_domisili')</h5>
                    <span>{{ $profile->status_domisili ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.address_ktp')</h5>
                    <span>{{ $profile->address_ktp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.address_domisili')</h5>
                    <span>{{ $profile->address_domisili ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.user_id')</h5>
                    <span>{{ optional($profile->user)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('profiles.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Profile::class)
                <a href="{{ route('profiles.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
