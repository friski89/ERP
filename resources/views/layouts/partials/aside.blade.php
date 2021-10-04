<aside class="main-sidebar sidebar-dark-danger elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('home') }}" class="brand-link">
    <img src="{{ asset('assets/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ auth()->user()->avatar_url }}" id="profileImage" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block" x-ref="username">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview
        {{ request()->routeIs('company-hosts*') || request()->routeIs('company-homes*') || request()->routeIs('job-titles*') || request()->routeIs('edus*') || request()->routeIs('band-positions*') || request()->routeIs('educational-backgrounds*') || request()->routeIs('divisions*') || request()->routeIs('units*') || request()->routeIs('job-grades*') || request()->routeIs('job-families*') || request()->routeIs('job-functions*') || request()->routeIs('status-employees*') || request()->routeIs('sub-statuses*') || request()->routeIs('city-recuites*') || request()->routeIs('work-locations*') || request()->routeIs('competence-core-values*') || request()->routeIs('competence-leaderships*') || request()->routeIs('competence-fanctionals*') || request()->routeIs('all-other-competencies*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link
            {{ request()->routeIs('company-hosts*') || request()->routeIs('company-homes*') || request()->routeIs('job-titles*') || request()->routeIs('edus*') || request()->routeIs('band-positions*') || request()->routeIs('educational-backgrounds*') || request()->routeIs('divisions*') || request()->routeIs('units*') || request()->routeIs('job-grades*') || request()->routeIs('job-families*') || request()->routeIs('job-functions*') || request()->routeIs('status-employees*') || request()->routeIs('sub-statuses*') || request()->routeIs('city-recuites*') || request()->routeIs('work-locations*') || request()->routeIs('competence-core-values*') || request()->routeIs('competence-leaderships*') || request()->routeIs('competence-fanctionals*') ||  request()->routeIs('all-other-competencies*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('company-hosts*') ? 'active' : '' }}" href="{{ route('company-hosts.index') }}">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Master Perusahaan Host</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('company-homes*') ? 'active' : '' }}" href="{{ route('company-homes.index') }}">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Master Perusahaan Home</p></a>
              </li>
              <li class="nav-item">
                <a href="{{ route('job-titles.index') }}" class="nav-link {{ request()->routeIs('job-titles*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Nama Jabatan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('edus.index') }}" class="nav-link {{ request()->routeIs('edus*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('band-positions.index') }}" class="nav-link {{ request()->routeIs('band-positions*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Band Posisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('divisions.index') }}" class="nav-link {{ request()->routeIs('divisions*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Divisi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('units.index') }}" class="nav-link {{ request()->routeIs('units*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('job-grades.index') }}" class="nav-link {{ request()->routeIs('job-grades*') ? 'active' : '' }}">
                  <i class="nav-icon  far fa-circle"></i>
                  <p>Master Job Grades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('job-families.index') }}" class="nav-link {{ request()->routeIs('job-families*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Job Family</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('job-functions.index') }}" class="nav-link {{ request()->routeIs('job-functions*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Job Fungsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('status-employees.index') }}" class="nav-link {{ request()->routeIs('status-employees*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Status Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sub-statuses.index') }}" class="nav-link {{ request()->routeIs('sub-statuses*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Sub Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('city-recuites.index') }}" class="nav-link {{ request()->routeIs('city-recuites*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Kota Rekrutasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('work-locations.index') }}" class="nav-link {{ request()->routeIs('work-locations*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Master Lokasi Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('competence-core-values.index') }}" class="nav-link {{ request()->routeIs('competence-core-values*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Kopetensi Core Value</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('competence-leaderships.index') }}" class="nav-link {{ request()->routeIs('competence-leaderships*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Kopetensi Leadership</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('competence-fanctionals.index') }}" class="nav-link {{ request()->routeIs('competence-fanctionals*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Kopetensi Functional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all-other-competencies.index') }}" class="nav-link {{ request()->routeIs('all-other-competencies*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-circle"></i>
                  <p>Kopetensi Lainya</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview
        {{ request()->routeIs('users*') || request()->routeIs('service-histories*') || request()->routeIs('assignment-histories*') || request()->routeIs('performance-appraisal-histories*') || request()->routeIs('achievement-histories*') || request()->routeIs('educational-backgrounds*') || request()->routeIs('training-histories*') || request()->routeIs('skills-and-professions*') || request()->routeIs('data-thps.index*') || request()->routeIs('all-office-facilities*') || request()->routeIs('insurance-facilities*') || request()->routeIs('cash-benefits*') || request()->routeIs('families*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link
            {{ request()->routeIs('users*') || request()->routeIs('service-histories*') || request()->routeIs('assignment-histories*') || request()->routeIs('performance-appraisal-histories*') || request()->routeIs('achievement-histories*') || request()->routeIs('educational-backgrounds*') || request()->routeIs('training-histories*') || request()->routeIs('skills-and-professions*') || request()->routeIs('data-thps.index*') || request()->routeIs('all-office-facilities*') || request()->routeIs('insurance-facilities*') || request()->routeIs('cash-benefits*') || request()->routeIs('families*') ? 'active' : '' }}">
              <i class="nav-icon fab fa-windows"></i>
              <p>
                HRIS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Data Employee</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('service-histories*') ? 'active' : '' }}" href="{{ route('service-histories.index') }}">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>Riwayat Kedinasan</p></a>
              </li>
              <li class="nav-item">
                <a href="{{ route('assignment-histories.index') }}" class="nav-link {{ request()->routeIs('assignment-histories*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-business-time"></i>
                  <p>Penugasaan Khusus</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('performance-appraisal-histories.index') }}" class="nav-link {{ request()->routeIs('performance-appraisal-histories*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-history"></i>
                  <p>Penilaian Kinerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('achievement-histories.index') }}" class="nav-link {{ request()->routeIs('achievement-histories*') ? 'active' : '' }}">
                  <i class="nav-icon far fa-calendar-check"></i>
                  <p>Riwayat Prestasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('educational-backgrounds.index') }}" class="nav-link {{ request()->routeIs('educational-backgrounds*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Riwayat Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('training-histories.index') }}" class="nav-link {{ request()->routeIs('training-histories*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-laptop-house"></i>
                  <p>Riwayat Pelatihan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('skills-and-professions.index') }}" class="nav-link {{ request()->routeIs('skills-and-professions*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i>
                  <p>Keahlihan & Profesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('data-thps.index') }}" class="nav-link {{ request()->routeIs('data-thps*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-coins"></i>
                  <p>THP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('all-office-facilities.index') }}" class="nav-link {{ request()->routeIs('all-office-facilities*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>Fasilitas Jabatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('insurance-facilities.index') }}" class="nav-link {{ request()->routeIs('insurance-facilities*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-hospital-alt"></i>
                  <p>Fasilitas Asuransi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cash-benefits.index') }}" class="nav-link {{ request()->routeIs('cash-benefits*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-hospital-user"></i>
                  <p>Benefit Tunai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('families.index') }}" class="nav-link {{ request()->routeIs('families*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-hospital-user"></i>
                  <p>Data Keluarga</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item">
            @csrf
            <a href="{{ route('logout') }}" data-turbolinks-eval="false" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
