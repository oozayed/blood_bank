<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <div class="text-center">
        <a href="{{route('admin.index')}}" class="brand-link">
            <span class="brand-text font-weight-bold text-uppercase text-center">{{settings()->get('site_name')}}</span>
        </a>
    </div>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                @if(Auth::check())
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                @endif
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{active_route_by_name('admin.index',true)}}">
                    <a href="#" class="nav-link {{active_route_by_name('admin.index')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link {{active_route_by_name('admin.index')}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Statistics</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item {{active_route_by_url('admin/general*',true)}} ">
                    <a href="#" class="nav-link {{active_route_by_url('admin/general*')}} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            General
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.general.settings.index')}}"
                               class="nav-link  {{active_route_by_name('admin.general.settings.index')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.general.governorates.index')}}"
                               class="nav-link {{active_route_by_url('admin/general/governorates*')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Governorates</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.general.cities.index')}}"
                               class="nav-link {{active_route_by_url('admin/general/cities*')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cities</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.general.blood-types.index')}}"
                               class="nav-link {{active_route_by_url('admin/general/blood-types*')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Types</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item {{active_route_by_url('admin/content*',true)}} ">
                    <a href="#" class="nav-link {{active_route_by_url('admin/content*')}} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.content.categories.index')}}"
                               class="nav-link  {{active_route_by_url('admin/content/categories*')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.content.posts.index')}}"
                               class="nav-link {{active_route_by_url('admin/content/posts*')}} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Posts</p>
                            </a>
                        </li>
                    </ul>

                </li>
                    <li class="nav-item">
                        <a href="{{route('admin.clients.index')}}"
                           class="nav-link {{active_route_by_url('admin/clients*')}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Clients</p>
                        </a>
                    </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
