<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-2">
    <div class="container">

        <a class="navbar-brand text-primary font-weight-bold text-uppercase" href="{{ url('/') }}">
            admedika-erp
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    @can('Master Data')
                        <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Master Data<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('company-hosts.index') }}">Master Perusahaan Host</a>
                            <a class="dropdown-item" href="{{ route('company-homes.index') }}">Master Perusahaan Home</a>
                            <a class="dropdown-item" href="{{ route('job-titles.index') }}">Master Nama Jabatan</a>
                            <a class="dropdown-item" href="{{ route('edus.index') }}">Master Pendidikan</a>
                            <a class="dropdown-item" href="{{ route('band-positions.index') }}">Master Band Posisi</a>
                            <a class="dropdown-item" href="{{ route('divisions.index') }}">Master Divisi</a>
                            <a class="dropdown-item" href="{{ route('units.index') }}">Master Unit</a>
                            <a class="dropdown-item" href="{{ route('job-grades.index') }}">Master Job Grades</a>
                            <a class="dropdown-item" href="{{ route('job-families.index') }}">Master Job Families</a>
                            <a class="dropdown-item" href="{{ route('job-functions.index') }}">Master Job Fungsi</a>
                            <a class="dropdown-item" href="{{ route('status-employees.index') }}">Master Status Karyawan</a>
                            <a class="dropdown-item" href="{{ route('sub-statuses.index') }}">Master Sub Status</a>
                            <a class="dropdown-item" href="{{ route('city-recuites.index') }}">Master Kota Rekrutasi</a>
                            <a class="dropdown-item" href="{{ route('work-locations.index') }}">Master Lokasi Kerja</a>
                            <a class="dropdown-item" href="{{ route('competence-core-values.index') }}">Master Kopetensi Core Value</a>
                            <a class="dropdown-item" href="{{ route('competence-leaderships.index') }}">Master Kopetensi Leadership</a>
                            <a class="dropdown-item" href="{{ route('competence-fanctionals.index') }}">Master Kopetensi Functional</a>
                            <a class="dropdown-item" href="{{ route('all-other-competencies.index') }}">Master Kopetensi Lainnya</a>

                        </div>
                    </li>
                    @endcan
                    @can('HRIS')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                HRIS <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users.index') }}">Data Karyawan</a>
                                <a class="dropdown-item" href="{{ route('service-histories.index') }}">Riwayat Kedinasan</a>
                                <a class="dropdown-item" href="{{ route('assignment-histories.index') }}">Riwayat Penugasan Khusus</a>
                                <a class="dropdown-item" href="{{ route('performance-appraisal-histories.index') }}">Riwayat Penilaian Kinerja</a>
                                <a class="dropdown-item" href="{{ route('achievement-histories.index') }}">Riwayat Prestasi</a>
                                <a class="dropdown-item" href="{{ route('educational-backgrounds.index') }}">Riwayat Pendidikan</a>
                                <a class="dropdown-item" href="{{ route('training-histories.index') }}">Riwayat Pelatihan</a>
                                <a class="dropdown-item" href="{{ route('skills-and-professions.index') }}">Keahlihan & Profesi</a>
                                <a class="dropdown-item" href="{{ route('data-thps.index') }}">Data THP</a>
                                <a class="dropdown-item" href="{{ route('all-office-facilities.index') }}">Fasilitas Jabatan</a>
                                <a class="dropdown-item" href="{{ route('insurance-facilities.index') }}">Fasilitas Asuransi</a>
                                <a class="dropdown-item" href="{{ route('cash-benefits.index') }}">Benefit Tunai</a>
                                <a class="dropdown-item" href="{{ route('families.index') }}">Data Keluarga</a>
                            </div>
                        </li>
                    @endcan
                    @if (Auth::user()->can('view-any', Spatie\Permission\Models\Role::class) ||
                        Auth::user()->can('view-any', Spatie\Permission\Models\Permission::class))
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Access Management <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('view-any', Spatie\Permission\Models\Role::class)
                            <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                            @endcan

                            @can('view-any', Spatie\Permission\Models\Permission::class)
                            <a class="dropdown-item" href="{{ route('permissions.index') }}">Permissions</a>
                            @endcan
                        </div>
                    </li>
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
