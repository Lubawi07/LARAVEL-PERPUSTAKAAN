<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpusanku</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->


    @role('user')
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Perpus Buku
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/perpus/buku">
            <i class="fas fa-book"></i>
            <span>Buku</span></a>
    </li>
    @endrole


    @role('admin')
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Buku
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- yang dibawah ini itu icon setting yang diganti menjadi icon buku --}}
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <i class="fas fa-solid fa-book"></i>
            <span>Buku</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master</h6>
                <a class="collapse-item" href="/kategori">Kategori</a>
                <a class="collapse-item" href="/buku">Buku</a>
            </div>
        </div>
    </li>
    @endrole


    @role('admin')
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>
    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-solid fa-user"></i>
            <span>Data User</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Semua data :</h6>
                <a class="collapse-item" href="{{ route('/data/admin') }}">Admin</a>
                <a class="collapse-item" href="/data/petugas">Petugas</a>
                <a class="collapse-item" href="/data/user">User</a>
            </div>
        </div>
    </li>
    @endrole

        <!-- Divider -->
        <hr class="sidebar-divider">

    @hasrole('petugas')
    
    <div class="sidebar-heading">
            Data request
        </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('peminjaman') }}">
            <i class="fas fa-handshake"></i>
            <span>Peminjaman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengembalian') }}">
            <i class="fas fa-hand-holding-heart"></i>
            <span>Pengembalian</span></a>
    </li>
    @endhasrole



    @hasrole('user')
    <div class="sidebar-heading">
        Histori buku
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/histori">
            <i class="fas fa-history"></i>
            <span>Histori</span></a>
    </li>
    <hr class="sidebar-divider">
    @endhasrole



    <div class="sidebar-heading">
        Info Website Kami
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/infowebsite">
            <i class="fas fa-solid fa-info"></i>
            <span>Info Website</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}


</ul>
<!-- End of Sidebar -->
