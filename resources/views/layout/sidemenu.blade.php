<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">PWL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @can('admin')
                    <li class="nav-item">
                        <a href="{{url('/teacher')}}" class="nav-link">
                            <i class="nav-icon fas fa-graduation-cap"></i>
                            <p>
                                Teacher
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/student')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Student
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{url('/app')}}" class="nav-link">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>
                            Aplikasi Kasir
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/transaksi')}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Transaksi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
