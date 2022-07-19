<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('AdminLTE/dist/img/UMBLogo.png')}}" alt="UMB Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Beban Kerja Dosen</span>
    </a>

    <!-- Sidebar -->
    <?php
    // $admin = route('biodata.index');
    if(Auth::user()->level == 'Admin'){
    echo'
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="'.route('dashboard.admin').'" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pendidikan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('penelitian.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penelitian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pengabdian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('penunjang.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penunjang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('biodata.index').'" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Dosen
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('assesor.index').'" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Assesor
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    ';
    }elseif (Auth::user()->level == 'Dosen') {
        echo'
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="'.route('dashboard.user').'" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pendidikan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pelaksanaan Pendidikan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('kinerja-penelitian.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penelitian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Pengabdian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('kinerja-penunjang.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Penunjang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Layanan BKD
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Rekap Pajak
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Hubungi Kami
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    ';
    }elseif (Auth::user()->level == 'Assesor') {
        echo'
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="'.route('dashboard.assesor').'" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('data-penelitian.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Penelitian
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="'.route('kinerja-penunjang.index').'" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Penunjang
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    ';
}
    ?>
    <!-- /.sidebar -->
</aside>
