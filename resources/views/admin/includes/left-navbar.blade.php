<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center" onclick="return false">
        <span class="brand-text  font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-map-marker-alt nav-icon"></i>
                        <p>
	                        {{"Location"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("add-location")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>{{"Add Location"}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("manage-location")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Location"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-hotel nav-icon"></i>
                        <p>
                            {{"Hotel"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("add-hotel")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>{{"Add Hotel"}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("manage-hotel")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Hotel"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-images nav-icon"></i>
                        <p>
                            {{"Hotel Image"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("add-hotel-image")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>{{"Add Image"}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("manage-hotel-image")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Image"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-border-all nav-icon"></i>
                        <p>
                            {{"Room"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("add-room")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>{{"Add Room"}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("manage-room")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Room"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fab fa-blogger-b nav-icon"></i>
                        <p>
                            {{"Blog"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("add-blog")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>{{"Add Blog"}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("manage-blog")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Blog"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-handshake nav-icon"></i>
                        <p>
                            {{"Booking"}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("manage-booking")}}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>{{"Manage Booking"}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
