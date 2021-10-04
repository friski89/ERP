@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Penugasan Khusus</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Penugasan Khusus</li>
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
                <a href="{{ route('assignment-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Riwayat Penugasan Khusus
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.assignment_histories.inputs.emp_no')</h5>
                    <span>{{ $assignmentHistory->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.assignment_histories.inputs.employee_name')
                    </h5>
                    <span>{{ $assignmentHistory->employee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.assignment_histories.inputs.date')</h5>
                    <span>{{ $assignmentHistory->date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.assignment_histories.inputs.company_home_id')
                    </h5>
                    <span
                        >{{ optional($assignmentHistory->companyHome)->name ??
                        '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.assignment_histories.inputs.job_title_id')
                    </h5>
                    <span
                        >{{ optional($assignmentHistory->jobTitle)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.assignment_histories.inputs.user_id')</h5>
                    <span
                        >{{ optional($assignmentHistory->user)->name ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('assignment-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\AssignmentHistory::class)
                <a
                    href="{{ route('assignment-histories.create') }}"
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
