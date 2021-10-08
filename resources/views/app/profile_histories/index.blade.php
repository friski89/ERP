@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.profile_histories.index_title')
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
                                <input
                                    id="indexSearch"
                                    type="hidden"
                                    name="id_user"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $profile_id ?? '' }}"
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
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            {{-- <th class="text-left">
                                @lang('crud.profile_histories.inputs.id')
                            </th> --}}
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.user_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.gender')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.phone_number')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.blood_group')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.no_ktp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.no_npwp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.address_ktp')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.address_domisili')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.status_domisili')
                            </th>
                            <th class="text-left">
                                @lang('crud.profile_histories.inputs.created_at')
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($profile->profileHistories)}} --}}

                        @forelse($profile->profileHistories as $profileHistory)
                        {{-- {{dd(Auth::user()->profileHistories)}} --}}
                        {{-- @forelse(Auth::user()->profileHistories as $profileHistory) --}}
                        {{-- Auth()::user()->profile->profileHistory --}}
                        <tr>
                            {{-- <td>{{ $profileHistory->id ?? '-' }}</td> --}}
                            <td>{{ $profileHistory->user->name ?? '-' }}</td>
                            <td>{{ $profileHistory->gender ?? '-' }}</td>
                            <td>{{ $profileHistory->phone_number ?? '-' }}</td>
                            <td>{{ $profileHistory->blood_group ?? '-' }}</td>
                            <td>{{ $profileHistory->no_ktp ?? '-' }}</td>
                            <td>{{ $profileHistory->no_npwp ?? '-' }}</td>
                            <td>{{ $profileHistory->address_ktp ?? '-' }}</td>
                            <td>
                                {{ $profileHistory->address_domisili ?? '-' }}
                            </td>
                            <td>
                                {{ $profileHistory->status_domisili ?? '-' }}
                            </td>
                            <td>
                                {{ $profileHistory->updated_at ?? '-'}}
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

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
