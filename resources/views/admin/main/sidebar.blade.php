  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <img src="{{ asset('./assets/img/logo-klinik-sehat.png') }}" class="navbar-brand-img" alt="...">
          Klinik Sehat
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ URL::to('/admin/dashboard') }}">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/admin/jadwal') }}">
                <i class="ni ni-calendar-grid-58 text-orange"></i>
                <span class="nav-link-text">Jadwal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/admin/tindakan') }}">
                <i class="ni ni-bullet-list-67 text-green"></i>
                <span class="nav-link-text">Tindakan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/admin/obat') }}">
                <i class="ni ni-atom text-info"></i>
                <span class="nav-link-text">Obat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/admin/penyakit') }}">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Penyakit</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>