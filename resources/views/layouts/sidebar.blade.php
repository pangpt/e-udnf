<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="{{route('rapat-index')}}"><i data-feather="chrome"></i><span>Manajemen Rapat</span></a></li>
            <li><a class="sidebar-header" href="{{route('undangan-index')}}"><i data-feather="chrome"></i><span>Manajemen Undangan</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Laporan</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->
