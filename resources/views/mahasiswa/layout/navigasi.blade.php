<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('mahasiswa')}}">
        <div class="sidebar-brand-icon">
            <img style="width: 60px; height: auto;" src="{{asset('foto')}}/its.png">
        </div>
        <div class="sidebar-brand-text mx-3">SIM TESIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('mahasiswa')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('mahasiswa.bimbingan')}}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Bimbingan</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('mahasiswa.sidang')}}">
            <i class="fas fa-fw fas fa-users"></i>
            <span>Pendaftaran Sidang</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('mahasiswa.kehadiran')}}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Kehadiran Sidang</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('mahasiswa.revisi')}}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Revisi Sidang Tesis</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('mahasiswa.yudisium')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Yudisium</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('mahasiswa.wisuda')}}">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Wisuda</span></a>
    </li>


</ul>