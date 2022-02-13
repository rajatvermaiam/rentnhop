<body>
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div><img src="{{asset('adminv/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon"></div>
            <!-- <div>
               <h4 class="logo-text">Rukada</h4>
             </div>-->
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i></div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li><a href="{{ url('admin/dashboard') }}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li><a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-users'></i></div>
                    <div class="menu-title">Accounts</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.user.index') }}"><i class="bx bx-right-arrow-alt"></i>Users list</a></li>
                    <li><a href="{{ route('admin.user.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Users</a></li>
                </ul>
            </li>

            <li><a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-map-marker'></i></div>
                    <div class="menu-title">Locations</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.location.index') }}"><i class="bx bx-right-arrow-alt"></i>Location list</a></li>
                    <li><a href="{{ route('admin.location.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Location</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-bus'></i></div>
                    <div class="menu-title">Vehicle</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.vehicle.index') }}"><i class="bx bx-right-arrow-alt"></i>Vehicle list</a></li>
                    <li><a href="{{ route('admin.vehicle.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Vehicle</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-offer'></i></div>
                    <div class="menu-title">Coupon</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.coupon.index') }}"><i class="bx bx-right-arrow-alt"></i>Coupon list</a></li>
                    <li><a href="{{ route('admin.coupon.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Coupon</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='lni lni-blogger'></i></div>
                    <div class="menu-title">Blog</div>
                </a>
                <ul>
                    <li><a href="{{ route('admin.blog-posts.index') }}"><i class="bx bx-right-arrow-alt"></i>Blog list</a></li>
                    <li><a href="{{ route('admin.blog-posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Blog</a></li>
                    <li><a href="{{ route('admin.blog-category.index') }}"><i class="bx bx-right-arrow-alt"></i>Blog Category list</a></li>
                    <li><a href="{{ route('admin.blog-category.create') }}"><i class="bx bx-right-arrow-alt"></i>Create Blog Category</a></li>
                </ul>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">

                    </div>
                </div>

                <div class="user-box dropdown"><a
                        class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img
                            src="{{asset('adminv/admin/images/avatars/avatar-2.png')}}" class="user-img"
                            alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{Auth::user()->name}}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out-circle'></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--start page wrapper -->
    @if(session('success'))
        <div class="page-wrapper">
                <div class="success_popup bg-success " onclick="this.classList.add('hidden');">
                    <div class="text-white">{{ session('success') }}</div>
                </div>
        </div>
    @endif
@yield('content')

<!--end page wrapper -->

    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->

