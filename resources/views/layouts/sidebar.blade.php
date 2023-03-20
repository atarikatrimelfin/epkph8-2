<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="{{ url('/dashboard') }}" class="nav-link {{($key=='dashboard') ? 'active': ''}}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/evdata') }}" class="nav-link {{($key=='evdata') ? 'active': ''}}">
        <i class="far fa-edit nav-icon"></i>
        <p>Data Eviden Poin</p>
      </a>
    </li>
    <li class="nav-item {{($key=='harian')||($key=='rekapbidang')||($key=='rekapbidang1')||($key=='rekap') ? 'menu-is-opening menu-open': ''}}">
      <a href="{{ url('#') }}" class="nav-link {{($key=='harian')||($key=='rekapbidang')||($key=='rekapbidang1')||($key=='rekap') ? 'active': ''}}">
        <i class="nav-icon fas fa-table"></i>
        <p>
          Rekap Data
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ url('/rekapdata/harian') }}" class="nav-link {{($key=='harian') ? 'active': ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Rekap Harian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/rekapdata/rekapbidang') }}" class="nav-link {{($key=='rekapbidang') ? 'active': ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Rekap Bidang</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/rekapdata/rekapbidang1') }}" class="nav-link {{($key=='rekapbidang1') ? 'active': ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Rekap Bidang 1</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/rekapdata/rekap') }}" class="nav-link {{($key=='rekap') ? 'active': ''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Rekap Eviden Poin</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{ route('user.index') }}" class="nav-link {{($key=='user') ? 'active': ''}}">
        <i class="nav-icon fas fa-users"></i>
        <p>
          User
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('/rekapdata/grafik') }}" class="nav-link {{($key=='grafik') ? 'active': ''}}">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
          Grafik
        </p>
      </a>
    </li>
  </ul>
</nav>