<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dosen')}}">
        <div class="sidebar-brand-icon">
            <img style="width: 60px; height: auto;" src="{{asset('foto')}}/its.png">
        </div>
        <div class="sidebar-brand-text mx-3">SIM TESIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dosen')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dosen.bimbinganlist')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Bimbingan</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dosen.daftarsidang')}}">
            <i class="fas fa-check"></i>
            <span>Pendaftaran Sidang</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('dosen.sidang')}}">
            <i class="fas fa-fw fa-user-check"></i>
            <span>Sidang</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dosen.verifikasi')}}">
            <i class="fas fa-fw fa-check-circle"></i>
            <span>Verifikasi Revisi</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dosen.nilai')}}">
            <i class="fas fa-fw fa-edit"></i>
            <span>Input Nilai Tesis</span></a>
    </li>




</ul>