@extends('layouts.app')

@section('content')
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
                    Fasilitas Jabatan
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
                        @can('create', App\Models\OfficeFacilities::class)
                        <a
                            href="{{ route('all-office-facilities.create') }}"
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
                                @lang('crud.all_office_facilities.inputs.user_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.emp_no')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.employee_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.jenis_fasilitas')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.jenis_pemberian')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.nilai_perolehan')
                            </th>
                            <th class="text-left">
                                @lang('crud.all_office_facilities.inputs.date')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($allOfficeFacilities as $officeFacilities)
                        <tr>
                            <td>
                                {{ optional($officeFacilities->user)->name ??
                                '-' }}
                            </td>
                            <td>{{ $officeFacilities->emp_no ?? '-' }}</td>
                            <td>
                                {{ $officeFacilities->employee_name ?? '-' }}
                            </td>
                            <td>
                                {{ $officeFacilities->jenis_fasilitas ?? '-' }}
                            </td>
                            <td>
                                {{ $officeFacilities->jenis_pemberian ?? '-' }}
                            </td>
                            <td>
                                {{ $officeFacilities->nilai_perolehan ?? '-' }}
                            </td>
                            <td>{{ $officeFacilities->date ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $officeFacilities)
                                    <a
                                        href="{{ route('all-office-facilities.edit', $officeFacilities) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $officeFacilities)
                                    <a
                                        href="{{ route('all-office-facilities.show', $officeFacilities) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $officeFacilities)
                                    <form
                                        action="{{ route('all-office-facilities.destroy', $officeFacilities) }}"
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
                            <td colspan="8">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">
                                {!! $allOfficeFacilities->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
