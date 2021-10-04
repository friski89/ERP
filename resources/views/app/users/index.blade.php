@extends('layouts.app')

@section('content')
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
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">Data Karyawan</h4>
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
                        @can('create', App\Models\User::class)
                        <a
                            href="{{ route('users.create') }}"
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
                                @lang('crud.users.inputs.avatar')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.name')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.email')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.nik_telkom')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.nik_company')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.date_in')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.company_host_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.company_home_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.band_position_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.job_grade_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.job_family_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.job_function_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.division_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.unit_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.job_title_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.date_sk')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.status_employee_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.sub_status_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.edu_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.place_of_birth')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.date_of_birth')
                            </th>
                            <th class="text-right">
                                @lang('crud.users.inputs.age')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.work_location_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.users.inputs.city_recuite_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $user->avatar_url }}"
                                />
                            </td>
                            <td>{{ $user->name ?? '-' }}</td>
                            <td>{{ $user->email ?? '-' }}</td>
                            <td>{{ $user->nik_telkom ?? '-' }}</td>
                            <td>{{ $user->nik_company ?? '-' }}</td>
                            <td>{{ $user->date_in ?? '-' }}</td>
                            <td>
                                {{ optional($user->companyHost)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->companyHome)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->bandPosition)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->jobGrade)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->jobFamily)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->jobFunction)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->division)->name ?? '-' }}
                            </td>
                            <td>{{ optional($user->unit)->name ?? '-' }}</td>
                            <td>
                                {{ optional($user->jobTitle)->name ?? '-' }}
                            </td>
                            <td>{{ $user->date_sk ?? '-' }}</td>
                            <td>
                                {{ optional($user->statusEmployee)->name ?? '-'
                                }}
                            </td>
                            <td>
                                {{ optional($user->subStatus)->name ?? '-' }}
                            </td>
                            <td>{{ optional($user->edu)->name ?? '-' }}</td>
                            <td>{{ $user->place_of_birth ?? '-' }}</td>
                            <td>{{ $user->date_of_birth ?? '-' }}</td>
                            <td>{{ $user->age ?? '-' }}</td>
                            <td>
                                {{ optional($user->workLocation)->name ?? '-' }}
                            </td>
                            <td>
                                {{ optional($user->cityRecuite)->name ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $user)
                                    <a href="{{ route('users.edit', $user) }}">
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $user)
                                    <a href="{{ route('users.show', $user) }}">
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $user)
                                    <form
                                        action="{{ route('users.destroy', $user) }}"
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
                            <td colspan="25">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="25">{!! $users->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
