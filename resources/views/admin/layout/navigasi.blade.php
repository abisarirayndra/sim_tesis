<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin')}}">
        <div class="sidebar-brand-icon">
            <img style="width: 60px; height: auto;" src="{{asset('foto')}}/its.png">
        </div>
        <div class="sidebar-brand-text mx-3">SIM TESIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.jadwalsidang')}}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Jadwal Sidang</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.verif_yudisium')}}">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Verifikasi Yudisium</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sk_yudisium')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>SK Yudisium</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.verif_wisuda')}}">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Verifikasi Wisuda</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sk_wisuda')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>SK Wisuda</span></a>
    </li>


</ul>