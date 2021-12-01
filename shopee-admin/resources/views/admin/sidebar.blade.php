<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/template/admin/dist/img/shopee.jpg" alt="Shopee Logo" class="" style="opacity:.8; width: 100%; border-radius: 5px; ">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
{{--        <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">

                    {{--Menu--}}
                    <a href="#" class="nav-link">
                        <i class="fas fa-bars"></i>
                        <p>
                            Danh mục sp
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href= {{ route("admin/menus/list") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Danh sách danh mục</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= {{ route("admin/menus/add") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Thêm danh mục sp</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    {{--Product--}}
                    <a href="{{ route("admin/products") }}" class="nav-link">
                        <i class="fab fa-stackpath"></i>
                        <p>
                            Sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href= {{ route("admin/products/list") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Danh sách sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= {{ route("admin/products/add") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Thêm sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    {{--Cart--}}
                    <a href="{{ route("admin/products") }}" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Giỏ hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href= {{ route("admin/products/list") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Danh sách giỏ hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href= {{ route("admin/products/add") }} class="nav-link">
                                <i class="fas fa-meteor"></i>
                                <p>Danh sách hóa đơn</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php
