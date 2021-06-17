<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/app.css">
    <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/favicon.svg" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/vendors/quill/quill.snow.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <style>
        .select2-container--default .select2-search--inline .select2-search__field {
            min-height: 30px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            border-radius: 0px;
        }

        .select2-selection__choice {
            border-radius: 0px;
            color: #fff;
            background-color: #5a8dee !important;
            font-size: 1rem;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            background-color: #5a8dee;
            color: #fff;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            background-color: #5a8dee;
            color: #e5e5e5;
            font-weight: 300;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="https://colorlib.com/polygon/adminator/assets/static/images/logo.png" alt="" srcset="">
                    <h3>Adminator</h3>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">






                        <li class="sidebar-item  ">
                            <a href="{{route('dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>




                        <li class="sidebar-item  has-sub active">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Quản lý sản phẩm</span>
                            </a>

                            <ul class="submenu">

                                <li>
                                    <a href="{{route('product')}}">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a style="margin-left: 50px;" >Thêm sản phẩm</a>
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
                            <a href="{{ route('Cartoff1')}}">Danh sách đơn hàng chưa phê duyệt</a>
                        </li>
                        <li>
                            <a href="{{ route('Carton')}}">danh sách đơn hàng chưa giao</a>
                        </li>
                        <li>
                            <a href="{{ route('CartGiao')}}">danh sách đơn hàng đang giao</a>
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
                <button class="btn navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
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
                            <a href="#" data-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
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
                </div>
            </nav>

           @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div style="display: flex; justify-content: center;" class="">
                        <p>2020 &copy;Designed by me. All rights reserved.</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>
    <script src="{{asset('admin')}}/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/app.js"></script>


    <script src="{{asset('admin')}}/assets/js/vendors.js"></script>

    <script src="{{asset('admin')}}/assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/quill/quill.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/pages/form-editor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#select2').select2({
                'placeholder': '  Chọn options',
            })
        })
    </script>

</body>

</html>