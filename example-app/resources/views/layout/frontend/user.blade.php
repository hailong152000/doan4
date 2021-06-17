<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiKaLongStore</title>
    
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
            <div style="margin-left:20px;margin-top:30px;" class="logo"> <a href="{{ route('home')}}"><img style="height: 80px;" src="{{asset('client')}}/images/logos/it_logo.png" alt="logo" /></a> </div>
    <div class="sidebar-menu">
    <?php
                            $customer_id = Session::get('customer_id');
                        ?>
        <ul class="menu">
                <li class="sidebar-item has-sub ">
                    <a href="" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Thông tin cá nhân</span>
                    </a>
                    <ul class="submenu"> 
                        <li>
                            <a href="{{ route('user',$customer_id)}}">Đổi thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="{{ route('password',$customer_id)}}">Đổi mật khẩu</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="truck" width="20"></i> 
                        <span>Quản lý đơn hàng</span>
                    </a>
                    <ul class="submenu">
                        
                        <li>
                            <a href="{{ route('Cart1',$customer_id)}}">Danh sách đơn hàng của bạn chưa phê duyệt</a>
                        </li>
                        <li>
                            <a href="{{ route('Cart2',$customer_id)}}">danh sách đơn hàng của bạn chưa giao</a>
                        </li>
                        <li>
                            <a href="{{ route('Cart3',$customer_id)}}">danh sách đơn hàng của bạn đang giao</a>
                        </li>
                        
                    </ul>
                    
                </li>

      
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Thông báo</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="{{asset('admin')}}/assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">HiiM PiKaLong</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Tài khoản</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Tin nhắn</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Cài đặt</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"><i data-feather="log-out"></i> Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </nav>
            
<!-- <div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">This is dashboard</p>
    </div>
    
</div> -->
        @yield('content')
            <footer>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin')}}/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/app.js"></script>
    
    <script src="{{asset('admin')}}/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/pages/dashboard.js"></script>

    <script src="{{asset('admin')}}/assets/js/main.js"></script>
</body>
</html>
