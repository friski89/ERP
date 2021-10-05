@extends('layouts.app')
@section('content')
<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">My Profile</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row gutters-sm">
            <div class="col-md-5 mb-3">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ Auth::user()->avatar_url }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="text-secondary mb-1">{{ optional(Auth::user()->unit)->name ?? '-'}}</p>
                        <p class="text-muted font-size-sm">{{ optional(Auth::user()->division)->name ?? '-'}}</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Perusuahaan Host</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->companyHost)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Perusuahaan Home</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->companyHome)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Nik Telkom</h6>
                        <span class="text-secondary">{{ Auth::user()->nik_telkom ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Nik Perusahaan</h6>
                        <span class="text-secondary">{{ Auth::user()->nik_company ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Tanggal Bergabung</h6>
                        <span class="text-secondary">{{ date('d F Y',strtotime(Auth::user()->date_in)) ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Status</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->statusEmployee)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Sub Status</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->subStatus)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Band Posisi</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->bandPosition)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Job Grade</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->jobGrade)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Job Family</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->jobFamily)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Job Fungsi</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->jobFunction)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Lokasi Kerja</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->workLocation)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Jabatan</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->jobTitle)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Tanggal SK</h6>
                        <span class="text-secondary">{{ date('d F Y',strtotime(Auth::user()->date_sk)) ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Divisi</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->division)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Unit Kerja</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->unit)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Pendidikan</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->edu)->name ?? '-'}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Tempat Lahir</h6>
                        <span class="text-secondary">{{ Auth::user()->place_of_birth ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Tanggal Lahir</h6>
                        <span class="text-secondary">{{ date('d F Y',strtotime(Auth::user()->date_of_birth)) ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Usia</h6>
                        <span class="text-secondary">{{ Auth::user()->age ?? '-' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Kota Rekrutasi</h6>
                        <span class="text-secondary">{{ optional(Auth::user()->cityRecuite)->name ?? '-'}}</span>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Personal Info</a></li>
                        <li class="nav-item"><a class="nav-link" href="#riwayatPendidikan" data-toggle="tab">Riwayat Pendidikan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#dataKeluarga" data-toggle="tab">Data Keluarga</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                        <div class="active tab-pane" id="personal">
                            <form action="{{ route('profile.update') }}" class="form-horizontal" method="POST">
                                @csrf
                                <x-inputs.group class="col-sm-12 col-lg-4">
                                    <div
                                        x-data="imageViewer('{{ Auth::user()->avatar_url }}')"
                                    >
                                        <x-inputs.partials.label
                                            name="avatar"
                                            label="Foto Karyawan"
                                        ></x-inputs.partials.label
                                        ><br />

                                        <!-- Show the image -->
                                        <template x-if="imageUrl">
                                            <img
                                                :src="imageUrl"
                                                class="object-cover rounded border border-gray-200"
                                                style="width: 100px; height: 100px;"
                                            />
                                        </template>

                                        <!-- Show the gray box when image is not available -->
                                        <template x-if="!imageUrl">
                                            <div
                                                class="border rounded border-gray-200 bg-gray-100"
                                                style="width: 100px; height: 100px;"
                                            ></div>
                                        </template>

                                        <div class="mt-2">
                                            <input
                                                type="file"
                                                name="avatar"
                                                id="avatar"
                                                @change="fileChosen"
                                            />
                                        </div>

                                        @error('avatar') @include('components.inputs.partials.error')
                                        @enderror
                                    </div>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.email
                                        name="email"
                                        label="Email"
                                        value="{{ Auth::user()->email }}"
                                        maxlength="255"
                                        placeholder="Email"
                                        required
                                    ></x-inputs.email>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.number
                                        name="phone_number"
                                        label="Phone Number"
                                        value="{{ optional(Auth::user()->profile)->phone_number}}"
                                        maxlength="255"
                                        placeholder="Phone Number"
                                        required
                                    ></x-inputs.number>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.number
                                        name="no_ktp"
                                        label="No KTP"
                                        value="{{ optional(Auth::user()->profile)->no_ktp}}"
                                        maxlength="255"
                                        placeholder="No KTP"
                                        required
                                    ></x-inputs.number>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.number
                                        name="no_npwp"
                                        label="No NPWP"
                                        value="{{ optional(Auth::user()->profile)->no_npwp }}"
                                        maxlength="255"
                                        placeholder="No NPWP"
                                        required
                                    ></x-inputs.number>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.select name="gender" label="Gender" required>
                                        @php $selected = old('gender', (optional(Auth::user()->profile)->gender ?? '' )) @endphp
                                        <option disabled {{ empty($selected) ? 'selected' : '' }}>Jenis Kelamin</option>
                                        <option value="male" {{ $selected == 'male' ? 'selected' : '' }} >Male</option>
                                        <option value="female" {{ $selected == 'female' ? 'selected' : '' }} >Female</option>
                                        <option value="other" {{ $selected == 'other' ? 'selected' : '' }} >Other</option>
                                    </x-inputs.select>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.select name="blood_group" label="Golongan Darah" required>
                                        @php $selected = old('blood_group', (optional(Auth::user()->profile)->blood_group ?? '' )) @endphp
                                        <option disabled {{ empty($selected) ? 'selected' : '' }}>Golongan Darah</option>
                                        <option value="tidak tahu" {{ $selected == 'tidak tahu' ? 'selected' : '' }} >tidak tahu</option>
                                        <option value="o" {{ $selected == 'o' ? 'selected' : '' }} >o</option>
                                        <option value="a" {{ $selected == 'a' ? 'selected' : '' }} >a</option>
                                        <option value="b" {{ $selected == 'b' ? 'selected' : '' }} >b</option>
                                        <option value="ab" {{ $selected == 'ab' ? 'selected' : '' }} >ab</option>
                                    </x-inputs.select>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.select name="status_domisili" label="Status Domisili" required>
                                        @php $selected = old('status_domisili', (optional(Auth::user()->profile)->status_domisili ?? '' )) @endphp
                                        <option disabled {{ empty($selected) ? 'selected' : '' }}>Status Domisili</option>
                                        <option value="rumah sendiri" {{ $selected == 'rumah sendiri' ? 'selected' : '' }} >Rumah Sendiri</option>
                                        <option value="rumah keluarga" {{ $selected == 'rumah keluarga' ? 'selected' : '' }} >Rumah Keluarga</option>
                                        <option value="rumah sewa" {{ $selected == 'rumah sewa' ? 'selected' : '' }} >Rumah Sewa</option>                                    </x-inputs.select>
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.textarea name="address_domisili" label="Alamat Domisili" maxlength="255"
                                        >{{ old('address_domisili', (optional(Auth::user()->profile)->address_domisili ?? '' ))
                                        }}</x-inputs.textarea
                                    >
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.textarea name="address_ktp" label="Alamat KTP" maxlength="255"
                                        >{{ old('address_ktp', (optional(Auth::user()->profile)->address_ktp ?? '' ))
                                        }}</x-inputs.textarea
                                    >
                                </x-inputs.group>
                                <x-inputs.hidden
                                        name="user_id"
                                        value="{{ Auth::user()->id}}"
                                    ></x-inputs.hidden>
                                <div class="form-group rows">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="riwayatPendidikan">
                            <h4>Riwayat Pendidikan</h4>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="dataKeluarga">
                            Data Keluarga
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="settings">
                            <form action="{{ route('profile.change_password') }}" class="form-horizontal" method="POST">
                                @csrf
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.password
                                        name="current_password"
                                        label="Current Password"
                                        required
                                    ></x-inputs.password>
                                    @error('current_password')
                                        @push('scripts')
                                            <script>
                                                const notyf = new Notyf({dismissible: true})
                                                notyf.error('{{ $message }}')
                                            </script>
                                        @endpush
                                    @enderror
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.password
                                        name="new_password"
                                        label="New Password"
                                        required
                                    ></x-inputs.password>
                                    @error('new_password')
                                        @push('scripts')
                                            <script>
                                                const notyf = new Notyf({dismissible: true})
                                                notyf.error('{{ $message }}')
                                            </script>
                                        @endpush
                                    @enderror
                                </x-inputs.group>
                                <x-inputs.group class="col-sm-12 col-lg-12">
                                    <x-inputs.password
                                        name="new_confirm_password"
                                        label="New Confirm Password"
                                        required
                                    ></x-inputs.password>
                                    @error('new_confirm_password')
                                        @push('scripts')
                                            <script>
                                                const notyf = new Notyf({dismissible: true})
                                                notyf.error('{{ $message }}')
                                            </script>
                                        @endpush
                                    @enderror
                                </x-inputs.group>
                                <div class="form-group rows">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Website Markup</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>One Page</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Mobile Template</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Backend API</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                        <small>Web Design</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Website Markup</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>One Page</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Mobile Template</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Backend API</small>
                        <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

