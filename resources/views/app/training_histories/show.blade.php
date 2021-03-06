@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Pelatihan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Pelatihan</li>
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
                <a href="{{ route('training-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                Show Riwayat Pelatihan
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.emp_no')</h5>
                    <span>{{ $trainingHistory->emp_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.employee_name')
                    </h5>
                    <span>{{ $trainingHistory->employee_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.training_name')
                    </h5>
                    <span>{{ $trainingHistory->training_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.institution')</h5>
                    <span>{{ $trainingHistory->institution ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.start_date')</h5>
                    <span>{{ $trainingHistory->start_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.years_of_training')
                    </h5>
                    <span
                        >{{ $trainingHistory->years_of_training ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.training_duration')
                    </h5>
                    <span
                        >{{ $trainingHistory->training_duration ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.end_date')</h5>
                    <span>{{ $trainingHistory->end_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.training_force')
                    </h5>
                    <span>{{ $trainingHistory->training_force ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.rating')</h5>
                    <span>{{ $trainingHistory->rating ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.competence_core_value_id')
                    </h5>
                    <span
                        >{{
                        optional($trainingHistory->competenceCoreValue)->name ??
                        '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.competence_leadership_id')
                    </h5>
                    <span
                        >{{
                        optional($trainingHistory->competenceLeadership)->name
                        ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.competence_fanctional_id')
                    </h5>
                    <span
                        >{{
                        optional($trainingHistory->competenceFanctional)->name
                        ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.other_competencies_id')
                    </h5>
                    <span
                        >{{ optional($trainingHistory->otherCompetencies)->name
                        ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.trnevent_topic')
                    </h5>
                    <span>{{ $trainingHistory->trnevent_topic ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.trncourse_cost')
                    </h5>
                    <span>{{ $trainingHistory->trncourse_cost ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.training_histories.inputs.trnevent_type')
                    </h5>
                    <span>{{ $trainingHistory->trnevent_type ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.trn_flag')</h5>
                    <span>{{ $trainingHistory->trn_flag ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.training_histories.inputs.user_id')</h5>
                    <span
                        >{{ optional($trainingHistory->user)->name ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('training-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\TrainingHistory::class)
                <a
                    href="{{ route('training-histories.create') }}"
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
