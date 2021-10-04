@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Fasilitas Jabatan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Fasilitas Jabatan</li>
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
                <a
                    href="{{ route('all-office-facilities.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Fasilitas JAbatan
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.all_office_facilities.inputs.user_id')</h5>
                    <span
                        >{{ optional($officeFacilities->user)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_office_facilities.inputs.emp_no')</h5>
                    <span>{{ $officeFacilities->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.all_office_facilities.inputs.employee_name')
                    </h5>
                    <span>{{ $officeFacilities->employee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.all_office_facilities.inputs.jenis_fasilitas')
                    </h5>
                    <span>{{ $officeFacilities->jenis_fasilitas ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.all_office_facilities.inputs.jenis_pemberian')
                    </h5>
                    <span>{{ $officeFacilities->jenis_pemberian ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.all_office_facilities.inputs.nilai_perolehan')
                    </h5>
                    <span>{{ $officeFacilities->nilai_perolehan ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_office_facilities.inputs.date')</h5>
                    <span>{{ $officeFacilities->date ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('all-office-facilities.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\OfficeFacilities::class)
                <a
                    href="{{ route('all-office-facilities.create') }}"
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
