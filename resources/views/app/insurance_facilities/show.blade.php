@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Fasilitas Asuransi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Fasilitas Asuransi</li>
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
                <a href="{{ route('insurance-facilities.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Fasilitas Asuransi
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.insurance_facilities.inputs.user_id')</h5>
                    <span
                        >{{ optional($insuranceFacility->user)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.insurance_facilities.inputs.emp_no')</h5>
                    <span>{{ $insuranceFacility->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.employee_name')
                    </h5>
                    <span>{{ $insuranceFacility->employee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.jenis_asuransi')
                    </h5>
                    <span>{{ $insuranceFacility->jenis_asuransi ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.provider_asuransi')
                    </h5>
                    <span
                        >{{ $insuranceFacility->provider_asuransi ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.nama_peserta')
                    </h5>
                    <span>{{ $insuranceFacility->nama_peserta ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.status_peserta')
                    </h5>
                    <span>{{ $insuranceFacility->status_peserta ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.insurance_facilities.inputs.date')</h5>
                    <span>{{ $insuranceFacility->date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.insurance_facilities.inputs.peserta_manfaat')
                    </h5>
                    <span
                        >{{ $insuranceFacility->peserta_manfaat ?? '-' }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('insurance-facilities.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\InsuranceFacility::class)
                <a
                    href="{{ route('insurance-facilities.create') }}"
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
