@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Pendidikan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Pendidikan</li>
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
                    href="{{ route('educational-backgrounds.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Riwayat Pendidikan
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.educational_backgrounds.inputs.emp_no')</h5>
                    <span>{{ $educationalBackground->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.employee_name')
                    </h5>
                    <span
                        >{{ $educationalBackground->employee_name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.institution_name')
                    </h5>
                    <span
                        >{{ $educationalBackground->institution_name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.faculty')
                    </h5>
                    <span>{{ $educationalBackground->faculty ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.educational_backgrounds.inputs.major')</h5>
                    <span>{{ $educationalBackground->major ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.level_of_edu')
                    </h5>
                    <span
                        >{{ $educationalBackground->level_of_edu ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.graduate_date')
                    </h5>
                    <span
                        >{{ $educationalBackground->graduate_date ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.cost_category')
                    </h5>
                    <span
                        >{{ $educationalBackground->cost_category ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.scholarship_institution')
                    </h5>
                    <span
                        >{{ $educationalBackground->scholarship_institution ??
                        '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.educational_backgrounds.inputs.gpa')</h5>
                    <span>{{ $educationalBackground->gpa ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.gpa_scale')
                    </h5>
                    <span>{{ $educationalBackground->gpa_scale ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.default')
                    </h5>
                    <span>{{ $educationalBackground->default ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.start_year')
                    </h5>
                    <span>{{ $educationalBackground->start_year ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.educational_backgrounds.inputs.city')</h5>
                    <span>{{ $educationalBackground->city ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.educational_backgrounds.inputs.state')</h5>
                    <span>{{ $educationalBackground->state ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.country')
                    </h5>
                    <span>{{ $educationalBackground->country ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.educational_backgrounds.inputs.user_id')
                    </h5>
                    <span
                        >{{ optional($educationalBackground->user)->name ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('educational-backgrounds.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\EducationalBackground::class)
                <a
                    href="{{ route('educational-backgrounds.create') }}"
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
