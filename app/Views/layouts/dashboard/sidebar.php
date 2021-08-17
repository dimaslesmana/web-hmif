<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" target="_blank" class="brand-link">
        <img src="/assets/images/placeholder.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $sidebar_title; ?></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/images/avatar-placeholder.png" class="img-circle elevation-2" alt="Avatar">
            </div>
            <div class="info">
                <a href="/dashboard" class="d-block"><?= session()->get('username'); ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">HOME</li>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">Events</li>
                <li class="nav-item">
                    <a href="/dashboard/events" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Daftar Event</p>
                    </a>
                </li>

                <li class="nav-header">MISC</li>
                <li class="nav-item">
                    <a href="/auth/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
