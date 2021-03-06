@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Prestasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Prestasi</li>
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
                    href="{{ route('achievement-histories.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Riwayat Prestasi
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.achievement_histories.inputs.emp_no')</h5>
                    <span>{{ $achievementHistory->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.achievement_histories.inputs.employee_name')
                    </h5>
                    <span>{{ $achievementHistory->employee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.achievement_histories.inputs.award_name')
                    </h5>
                    <span>{{ $achievementHistory->award_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.achievement_histories.inputs.no_sk')</h5>
                    <span>{{ $achievementHistory->no_sk ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.achievement_histories.inputs.office_name')
                    </h5>
                    <span>{{ $achievementHistory->office_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.achievement_histories.inputs.date')</h5>
                    <span>{{ $achievementHistory->date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.achievement_histories.inputs.institution')
                    </h5>
                    <span>{{ $achievementHistory->institution ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.achievement_histories.inputs.position_name')
                    </h5>
                    <span>{{ $achievementHistory->position_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.achievement_histories.inputs.remarks')</h5>
                    <span>{{ $achievementHistory->remarks ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.achievement_histories.inputs.user_id')</h5>
                    <span
                        >{{ optional($achievementHistory->user)->name ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('achievement-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\AchievementHistory::class)
                <a
                    href="{{ route('achievement-histories.create') }}"
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
