<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{ url('Layout/dashboard') }}" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('#') }}" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Eviden Poin
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekap Harian</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Rekap Bidang</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ url('Akun/index') }}" class="nav-link">
          <i class="nav-icon fas fa-users"></i>
          <p>
            Akun
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Layout Options
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../layout/top-nav.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation + Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../layout/boxed.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Boxed</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../layout/fixed-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Charts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../charts/chartjs.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ChartJS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../charts/flot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../charts/inline.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../charts/uplot.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>uPlot</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Forms
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../forms/general.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../forms/advanced.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Advanced Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../forms/editors.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Editors</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../forms/validation.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Validation</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../tables/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Simple Tables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/data.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>DataTables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../tables/jsgrid.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>jsGrid</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-header">EXAMPLES</li>
      <li class="nav-item">
        <a href="../calendar.html" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Calendar
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Gallery
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
            Search
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../search/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Simple Search</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../search/enhanced.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Enhanced</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>