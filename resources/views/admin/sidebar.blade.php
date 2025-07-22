<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Category -->
                <li class="nav-item">
                    <a href="{{ route('category-form') }}"
                        class="nav-link {{ request()->routeIs('category-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Categories</p>
                    </a>
                </li>

                <!-- Coupons -->
                <li class="nav-item">
                    <a href="{{ route('coupon-form') }}"
                        class="nav-link {{ request()->routeIs('coupon-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Coupons</p>
                    </a>
                </li>

                <!-- Items -->
                <li class="nav-item">
                    <a href="{{ route('item-form') }}"
                        class="nav-link {{ request()->routeIs('item-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>Items</p>
                    </a>
                </li>

                <!-- Team Members -->
                <li class="nav-item">
                    <a href="{{ route('teammember-form') }}"
                        class="nav-link {{ request()->routeIs('teammember-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Team Members</p>
                    </a>
                </li>

                <!-- Testimonials -->
                <li class="nav-item">
                    <a href="{{ route('testimonial-form') }}"
                        class="nav-link {{ request()->routeIs('testimonial-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>Testimonials</p>
                    </a>
                </li>

                <!-- Blogs -->
                <li class="nav-item">
                    <a href="{{ route('blog-form') }}"
                        class="nav-link {{ request()->routeIs('blog-form') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>Blogs</p>
                    </a>
                </li>

                <!-- Users -->
                <li class="nav-item">
                    <a href="{{ route('all_users') }}"
                        class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>

                <!-- Orders -->
                <li class="nav-item">
                    <a href="{{ route('admin.orders.pending') }}"
                        class="nav-link {{ request()->routeIs('admin.orders.pending') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Orders</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
