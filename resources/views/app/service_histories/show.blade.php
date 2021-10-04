@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Kedinasan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Kedinasan</li>
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
                <a href="{{ route('service-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Riwayat Kedinasan
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.service_histories.inputs.emp_no')</h5>
                    <span>{{ $serviceHistory->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.service_histories.inputs.emoloyee_name')
                    </h5>
                    <span>{{ $serviceHistory->emoloyee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.service_histories.inputs.band_position_id')
                    </h5>
                    <span
                        >{{ optional($serviceHistory->bandPosition)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.service_histories.inputs.start_date')</h5>
                    <span>{{ $serviceHistory->start_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.service_histories.inputs.company_home_id')
                    </h5>
                    <span
                        >{{ optional($serviceHistory->companyHome)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.service_histories.inputs.company_host_id')
                    </h5>
                    <span
                        >{{ optional($serviceHistory->companyHost)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.service_histories.inputs.type')</h5>
                    <span>{{ $serviceHistory->type ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.service_histories.inputs.job_title_id')</h5>
                    <span
                        >{{ optional($serviceHistory->jobTitle)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.service_histories.inputs.user_id')</h5>
                    <span
                        >{{ optional($serviceHistory->user)->name ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('service-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\ServiceHistory::class)
                <a
                    href="{{ route('service-histories.create') }}"
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
