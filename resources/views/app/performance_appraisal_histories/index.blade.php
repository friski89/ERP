@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Riwayat Penilaian Kinerja</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Riwayat Penilaian Kinerja</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    Riwayat Penilaian Kinerja
                </h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create',
                        App\Models\PerformanceAppraisalHistory::class)
                        <a
                            href="{{ route('performance-appraisal-histories.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.emp_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.employee_name')
                            </th>
                            <th class="text-right">
                                @lang('crud.performance_appraisal_histories.inputs.year')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.performance_value')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.performance_score')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.competency_value')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.behavioral_value')
                            </th>
                            <th class="text-left">
                                @lang('crud.performance_appraisal_histories.inputs.user_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($performanceAppraisalHistories as
                        $performanceAppraisalHistory)
                        <tr>
                            <td>
                                {{ $performanceAppraisalHistory->emp_no ?? '-'
                                }}
                            </td>
                            <td>
                                {{ $performanceAppraisalHistory->employee_name
                                ?? '-' }}
                            </td>
                            <td>
                                {{ $performanceAppraisalHistory->year ?? '-' }}
                            </td>
                            <td>
                                {{
                                $performanceAppraisalHistory->performance_value
                                ?? '-' }}
                            </td>
                            <td>
                                {{
                                $performanceAppraisalHistory->performance_score
                                ?? '-' }}
                            </td>
                            <td>
                                {{
                                $performanceAppraisalHistory->competency_value
                                ?? '-' }}
                            </td>
                            <td>
                                {{
                                $performanceAppraisalHistory->behavioral_value
                                ?? '-' }}
                            </td>
                            <td>
                                {{
                                optional($performanceAppraisalHistory->user)->name
                                ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $performanceAppraisalHistory)
                                    <a
                                        href="{{ route('performance-appraisal-histories.edit', $performanceAppraisalHistory) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view',
                                    $performanceAppraisalHistory)
                                    <a
                                        href="{{ route('performance-appraisal-histories.show', $performanceAppraisalHistory) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete',
                                    $performanceAppraisalHistory)
                                    <form
                                        action="{{ route('performance-appraisal-histories.destroy', $performanceAppraisalHistory) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                {!! $performanceAppraisalHistories->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
