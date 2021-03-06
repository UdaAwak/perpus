<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">PERPUS</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('assets/dist/img/user3-128x128.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        
        <li class="nav-item">
        <a href="{{ route('admin.author.index') }}" class="nav-link">
            <i class="nav-icon fas fa-pen"></i>
            <p>Penulis</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('admin.book.index') }}" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>Buku</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('admin.borrow.index') }}" class="nav-link">
            <i class="nav-icon fas fa-book-reader"></i>
            <p>Buku Sedang Dipinjam</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>User</p>
        </a>
        </li>

    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->