@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Karyawan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Data Karyawan</li>
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
                <a href="{{ route('users.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Data Karyawan
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.avatar')</h5>
                    <x-partials.thumbnail
                        src="{{ $user->avatar_url }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.name')</h5>
                    <span>{{ $user->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.email')</h5>
                    <span>{{ $user->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.nik_telkom')</h5>
                    <span>{{ $user->nik_telkom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.nik_company')</h5>
                    <span>{{ $user->nik_company ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.date_in')</h5>
                    <span>{{ $user->date_in ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.company_host_id')</h5>
                    <span>{{ optional($user->companyHost)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.company_home_id')</h5>
                    <span>{{ optional($user->companyHome)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.band_position_id')</h5>
                    <span
                        >{{ optional($user->bandPosition)->name ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.job_grade_id')</h5>
                    <span>{{ optional($user->jobGrade)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.job_family_id')</h5>
                    <span>{{ optional($user->jobFamily)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.job_function_id')</h5>
                    <span>{{ optional($user->jobFunction)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.division_id')</h5>
                    <span>{{ optional($user->division)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.unit_id')</h5>
                    <span>{{ optional($user->unit)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.job_title_id')</h5>
                    <span>{{ optional($user->jobTitle)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.date_sk')</h5>
                    <span>{{ $user->date_sk ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.status_employee_id')</h5>
                    <span
                        >{{ optional($user->statusEmployee)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.sub_status_id')</h5>
                    <span>{{ optional($user->subStatus)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.edu_id')</h5>
                    <span>{{ optional($user->edu)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.place_of_birth')</h5>
                    <span>{{ $user->place_of_birth ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.date_of_birth')</h5>
                    <span>{{ $user->date_of_birth ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.age')</h5>
                    <span>{{ $user->age ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.work_location_id')</h5>
                    <span
                        >{{ optional($user->workLocation)->name ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.city_recuite_id')</h5>
                    <span>{{ optional($user->cityRecuite)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.roles.name')</h5>
                    <div>
                        @forelse ($user->roles as $role)
                        <div class="badge badge-primary">{{ $role->name }}</div>
                        <br />
                        @empty - @endforelse
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\User::class)
                <a href="{{ route('users.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
