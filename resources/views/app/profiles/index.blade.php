@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">My Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">My Profile</h4>
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
                        @can('create', App\Models\Profile::class)
                        <a
                            href="{{ route('profiles.create') }}"
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
                                @lang('crud.profiles.inputs.gender')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.phone_number')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.blood_group')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.no_ktp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.no_npwp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.status_domisili')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.address_ktp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.address_domisili')
                            </th>
                            <th class="text-left">
                                @lang('crud.profiles.inputs.user_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($profiles as $profile)
                        <tr>
                            <td>{{ $profile->gender ?? '-' }}</td>
                            <td>{{ $profile->phone_number ?? '-' }}</td>
                            <td>{{ $profile->blood_group ?? '-' }}</td>
                            <td>{{ $profile->no_ktp ?? '-' }}</td>
                            <td>{{ $profile->no_npwp ?? '-' }}</td>
                            <td>{{ $profile->status_domisili ?? '-' }}</td>
                            <td>{{ $profile->address_ktp ?? '-' }}</td>
                            <td>{{ $profile->address_domisili ?? '-' }}</td>
                            <td>{{ optional($profile->user)->name ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $profile)
                                    <a
                                        href="{{ route('profiles.edit', $profile) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $profile)
                                    <a
                                        href="{{ route('profiles.show', $profile) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $profile)
                                    <form
                                        action="{{ route('profiles.destroy', $profile) }}"
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
                            <td colspan="10">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10">{!! $profiles->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
