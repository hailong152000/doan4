<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>PiKaLong Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" href="{{asset('client')}}/images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('client')}}/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="{{asset('client')}}/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="{{asset('client')}}/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="{{asset('client')}}/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="{{asset('client')}}/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{asset('client')}}/css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{asset('client')}}/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="{{asset('client')}}/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="{{asset('client')}}/revolution/css/navigation.css" />

<!-- <link rel="stylesheet" href="{{asset('admin')}}/assets/css/bootstrap.css" > -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_shop_list">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{asset('client')}}/images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"> Đại học sư phạm kỹ thuật Hưng Yên</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">hailong152000@gmail.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/profile.php?id=100013770644164" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com/pk.log/" title="Instagram" target="_blank"></a></li>
                <li><a class="fa fa-youtube" href="https://www.youtube.com/channel/UC1VNlb7yiBC8j51UlpQKMiQ" title="Youtube" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div style="width:270px;display:flex;" class="dropdown float-right">
                    <?php
                        $customer_name =Session::get('customer_name');
                        ?>
                         <?php
                        $customer_image =Session::get('customer_image');
                        ?>
                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL){
                        ?>
                        <div style="margin-top:5px;" class="avatar mr-1">
                                    <img style="width:40px;height:40px;" src="{{asset('user_images')}}/{{$customer_image}}" alt="" srcset="">
                                </div>
                         <a  href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div style="padding-top:5px" class="d-none d-md-block d-lg-inline-block"><?php echo $customer_name?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left">
                                <a class="dropdown-item" href="{{ route('user',$customer_id )}}"><i data-feather="user"></i>Tài khoản</a>
                                <a class="dropdown-item" href="{{ route('Cart1',$customer_id )}}"><i data-feather="truck"></i>Đơn hàng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::to('home/logoutcus')}}"><i data-feather="log-out"></i> Đăng xuất</a>
                            </div>
                            <!-- <li<i class="fa fa-user"></i><?php echo $customer_name ?></li>
                            <li><a href="{{URL::to('home/logoutcus')}}">Đăng xuất</a></li> -->
                        <?php
                        }else {
                            ?>
                            <li><a href="{{URL::to('home/logincus')}}">Đăng nhập</a></li>
                            <li><a href="{{URL::to('home/registercus')}}">Đăng kí</a></li>
                            <?php
                        }
                        ?>
      
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="{{ route('home')}}"><img src="{{asset('client')}}/images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="{{ route('home')}}">Trang Chủ</a>
                  <!-- <ul>
                    <li><a href="it_home.html">It Home Page</a></li>
                    <li><a href="it_home_dark.html">It Dark Home Page</a></li>
                  </ul> -->
                </li>
                <li><a href="{{ route('aboutUs')}}">Giới Thiệu</a></li>
                <!-- <li> <a href="{{ route('service')}}">Dịch vụ</a> -->
                  <!-- <ul>
                    <li><a href="it_service_list.html">Services list</a></li>
                    <li><a href="it_service_detail.html">Services Detail</a></li>
                  </ul> -->
                <!-- </li> -->
                <!-- <li> <a href="it_blog.html">Blog</a> -->
                  <!-- <ul>
                    <li><a href="it_blog.html">Blog List</a></li>
                    <li><a href="it_blog_grid.html">Blog Grid</a></li>
                    <li><a href="it_blog_detail.html">Blog Detail</a></li>
                  </ul> -->
                <!-- </li> -->
                <li> <a href="#">Loại Sản Phẩm</a>
                  <ul>
                  @foreach($producttype as $type)                        
                    <li><a href="{{url(route('getdatabyLoaiSp',$type->producttype_id))}}">{{$type->product_type}}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li> <a href="#">Nhà Cung Cấp</a>
                  <ul>
                  @foreach($ncc as $types)                        
                    <li><a href="{{url(route('getdatabyNCC',$types->NCC_id))}}">{{$types->NCC}}</a></li>
                    @endforeach
                  </ul>
                </li>

                <!-- <li> <a  href="{{ route('products')}}">Cửa Hàng</a>
                  <!-- <ul>
                    <li><a href="it_shop.html">Shop List</a></li>
                    <li><a href="it_shop_detail.html">Shop Detail</a></li>
                    <li><a href="it_cart.html">Shopping Cart</a></li>
                    <li><a href="it_checkout.html">Checkout</a></li>
                  </ul> -->
                </li> 
                <li> <a href="{{ route('Contact')}}">Liên Hệ</a>
                  <!-- <ul>
                    <li><a href="it_contact.html">Contact Page 1</a></li>
                    <li><a href="it_contact_2.html">Contact Page 2</a></li>
                  </ul> -->
                </li>
                    <?php
                      $customer_id = Session::get('customer_id');
                      if($customer_id != NULL){
                      ?>
                <li><a href="{{ route('cart',$customer_id )}}">Giỏ hàng</a></li>
                <?php
              }?>
              </ul>
              @if(session('alert'))
          <section class='alert alert-success'>{{session('alert')}}</section>
          @endif  
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Cửa Hàng Chúng tôi hân hạnh phục vụ quý khách</h1>
              <!-- <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
              </ol> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    @yield('content')
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">Người dùng đã nói gì về chúng tôi?</h2>
            <p class="large">Một vài lời nhận xét từ khách hàng..</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content">Chuột của cửa hàng dùng rất tốt,nhân viên rất thân thiện. </div>
                  <div class="testimonial-photo"> <img src="https://photo-cms-plo.zadn.vn/Uploaded/2021/vrwqlqdwp/2021_03_02/ninh-duong-lan-ngoc-clip-nong_mcan.jpg" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Ninh Dương Lan Ngọc</h4>
                    <span class="testimonial-position">Nữ diễn viên nổi tiếng</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Nhân viên cửa hàng rất thân thiện,hiếu khách. </div>
                  <div class="testimonial-photo"> <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t1.15752-9/72256655_2338434412872955_5204173114778320896_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=ae9488&_nc_ohc=LQgb-LQ_GesAX9e_xb_&_nc_ht=scontent.fhan14-2.fna&oh=09cf6c2a09b7595f7a8da440d61424a6&oe=60C582D1" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Đỗ Văn Huynh</h4>
                    <span class="testimonial-position">Idol giới trẻ,Hacker toàn miền Bắc</span> </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content"> Nhân viên cửa hàng rất thân thiện,hiếu khách. </div>
                  <div class="testimonial-photo"> <img src="https://scontent.fhan14-2.fna.fbcdn.net/v/t1.15752-9/72256655_2338434412872955_5204173114778320896_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=ae9488&_nc_ohc=LQgb-LQ_GesAX9e_xb_&_nc_ht=scontent.fhan14-2.fna&oh=09cf6c2a09b7595f7a8da440d61424a6&oe=60C582D1" class="img-responsive" alt="#" width="150" height="150"> </div>
                  <div class="testimonial-meta">
                    <h4>Đỗ Văn Huynh</h4>
                    <span class="testimonial-position">Idol giới trẻ,Hacker toàn miền Bắc</span> </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>

<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="{{asset('client')}}/images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>Liên hệ ngay với chúng tôi nếu có khúc mắc?</h2>
              <p>Chúng tôi sẽ hỗ trợ bạn hết sức có thể</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="{{ route('Contact')}}">Liên Hệ</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="{{asset('client')}}/images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="{{asset('client')}}/images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="{{asset('client')}}/images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="{{asset('client')}}/images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="{{asset('client')}}/images/it_service/brand_icon5.png" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div id="map"></div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>PiKaLongStore</h2>
            </div>
            <p>Sự tiện ích và đa dụng mà cửa hàng chúng tôi mang lại sẽ giúp bạn hài lòng.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Bạn muốn?</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> Giới Thiệu</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Các điều khoản và điều kiện</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Pháp lý</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i>Tin mới</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Liên Hệ</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Dịch Vụ</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Lấy lại dữ liệu</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Sửa chữa máy tính</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Một số dịch vụ điện thoại khác</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Vấn đề mạng</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Hỗ trợ kĩ thuật</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Liên hệ chúng tôi</h2>
            </div>
            <p>Đại học sư phạm kĩ thuật Hưng Yên cơ sở 2,<br>
              Mỹ Hào Hưng Yên<br>
              <span style="font-size:18px;"><a href="tel:+9876543210">037875883</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="cprt">
        <p>HiiM PiKaLong</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="{{asset('client')}}/js/jquery.min.js"></script>
<script src="{{asset('client')}}/js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="{{asset('client')}}/js/menumaker.js"></script>
<!-- wow animation -->
<script src="{{asset('client')}}/js/wow.js"></script>
<!-- custom js -->
<script src="{{asset('client')}}/js/custom.js"></script>
<script src="{{asset('admin')}}/assets/js/feather-icons/feather.min.js"></script>
<script src="{{asset('admin')}}/assets/js/app.js"></script>
<script src="{{asset('admin')}}/assets/js/pages/dashboard.js"></script>
<script src="{{asset('admin')}}/assets/js/main.js"></script>
<script src="{{asset('client')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('client')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('client')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 9.779349, lng: 105.6189045},
		  styles: [
               {
                 elementType: 'geometry',
                 stylers: [{color: '#fefefe'}]
               },
               {
                 elementType: 'labels.icon',
                 stylers: [{visibility: 'off'}]
               },
               {
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 elementType: 'labels.text.stroke',
                 stylers: [{color: '#f5f5f5'}]
               },
               {
                 featureType: 'administrative.land_parcel',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#bdbdbd'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'geometry',
                 stylers: [{color: '#eeeeee'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#757575'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'road',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.arterial',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#3d3523'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 featureType: 'road.local',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'transit.line',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'transit.station',
                 elementType: 'geometry',
                 stylers: [{color: '#000'}]
               },
               {
                 featureType: 'water',
                 elementType: 'geometry',
                 stylers: [{color: '#c8d7d4'}]
               },
               {
                 featureType: 'water',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#b1a481'}]
               }
             ]
		});

        var image = 'images/it_service/location_icon_map_cont.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 9.779349, lng: 105.6189045},
          map: map,
          icon: image
        });
      }
    </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script>
function Addtocart(id){
  $.ajax({
    url:'Addtocart/'+id,
    type:'POST',
  }).done(function(response){
    console.log(response)
    alertify.success('Đã thêm sản phẩm vào giỏ hàng');
  });
  // event.preventDefault();
  //  alertify.success('Đã thêm sản phẩm vào giỏ hàng');
}
</script>
<!-- end google map js -->
</body>
</html>
