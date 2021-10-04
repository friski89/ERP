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
                    Riwayat Prestasi
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
                        @can('create', App\Models\AchievementHistory::class)
                        <a
                            href="{{ route('achievement-histories.create') }}"
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
                                @lang('crud.achievement_histories.inputs.emp_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.employee_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.award_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.no_sk')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.office_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.date')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.institution')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.position_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.remarks')
                            </th>
                            <th class="text-left">
                                @lang('crud.achievement_histories.inputs.user_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($achievementHistories as $achievementHistory)
                        <tr>
                            <td>{{ $achievementHistory->emp_no ?? '-' }}</td>
                            <td>
                                {{ $achievementHistory->employee_name ?? '-' }}
                            </td>
                            <td>
                                {{ $achievementHistory->award_name ?? '-' }}
                            </td>
                            <td>{{ $achievementHistory->no_sk ?? '-' }}</td>
                            <td>
                                {{ $achievementHistory->office_name ?? '-' }}
                            </td>
                            <td>{{ $achievementHistory->date ?? '-' }}</td>
                            <td>
                                {{ $achievementHistory->institution ?? '-' }}
                            </td>
                            <td>
                                {{ $achievementHistory->position_name ?? '-' }}
                            </td>
                            <td>{{ $achievementHistory->remarks ?? '-' }}</td>
                            <td>
                                {{ optional($achievementHistory->user)->name ??
                                '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $achievementHistory)
                                    <a
                                        href="{{ route('achievement-histories.edit', $achievementHistory) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $achievementHistory)
                                    <a
                                        href="{{ route('achievement-histories.show', $achievementHistory) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $achievementHistory)
                                    <form
                                        action="{{ route('achievement-histories.destroy', $achievementHistory) }}"
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
                            <td colspan="11">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="11">
                                {!! $achievementHistories->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
