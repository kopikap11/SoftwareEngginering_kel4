<style>
    .earthy-gradient {
        background: linear-gradient(180deg, #A47551 0%, #5C3A21 100%) !important;
    }

    .sidebar .nav-link {
        transition: background-color 0.3s, color 0.3s;
    }

    .sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #F0E6DD;
    }

    .sidebar .nav-item.active > .nav-link {
        background-color: #7B4F32;
        color: #fff;
        font-weight: bold;
    }

    .sidebar .sidebar-heading {
        color: #F3E9E1;
        font-weight: 600;
    }

    .sidebar .sidebar-brand-icon {
        color: #E9D4C3;
    }

    .sidebar-brand-text {
        color: #FBEEDC;
        font-weight: bold;
    }
</style>

<ul class="navbar-nav sidebar sidebar-dark earthy-gradient accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clipboard"></i>
        </div>
        <div class="sidebar-brand-text mx-3">M-Tugas</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $menuDashboard ?? '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (auth()->user()->jabatan == 'admin')
        <!-- Heading -->
        <div class="sidebar-heading">Menu Admin</div>

        <!-- Nav Item - Data User -->
        <li class="nav-item {{ $menuAdminUser ?? '' }}">
            <a class="nav-link" href="{{ route('user') }}">
                <i class="fas fa-user"></i>
                <span>Data User</span></a>
        </li>

        <!-- Nav Item - Data Tugas -->
        <li class="nav-item {{ $menuAdminTugas ?? '' }}">
            <a class="nav-link" href="{{ route('tugas') }}">
                <i class="fas fa-tasks"></i>
                <span>Data Tugas</span></a>
        </li>

        @elseif (auth()->user()->jabatan == 'manajer')
        <!-- Heading -->
        <div class="sidebar-heading">Menu Manajer</div>


        <!-- Nav Item - Data Tugas -->
        <li class="nav-item {{ $menuAdminTugas ?? '' }}">
            <a class="nav-link" href="{{ route('tugas') }}">
                <i class="fas fa-tasks"></i>
                <span>Data Tugas</span></a>
        </li>

    @else
        <!-- Heading -->
        <div class="sidebar-heading">Menu Karyawan</div>

        <!-- Nav Item - Data Tugas -->
        <li class="nav-item {{ $menuKaryawanTugas ?? '' }}">
            <a class="nav-link" href="{{ route('tugas') }}">
                <i class="fas fa-tasks"></i>
                <span>Data Tugas</span></a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
