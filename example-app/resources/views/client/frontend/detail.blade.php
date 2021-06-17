@extends('layout.frontend.master')

@section('title','Detail page')

@section('content')
<div class="section padding_layout_1 product_detail">
  <div class="container">
 
      
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-xl-6 col-lg-12 col-md-12">
            <div class="product_detail_feature_img hizoom hi2">
              <div class='hizoom hi2'> <img src="{{asset('images')}}/{{$result->image}}" style="width: 400px; height: 400px;"alt="#" /> </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>{{$result->name}}</h2>
            </div>
            <div class="product-detail-side"><span class="new-price">{{number_format($result->price)}}Đ</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
            <div class="detail-contant">
              <p>{{$result->description}}<br>
                <span class="stock">-Số lượng hiện có:{{$result->quantity}}</span> </p>
              <!-- <form class="cart" method="post" action="it_cart.html"> -->
                <!-- <div class="quantity">
                  <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                </div> -->
                <form action="{{ route('Addtocart',$result->id)}}" method="POST">
                  @csrf
                <input style="display: none;" type="text" name="product_id" value="{{$result->id}}">
                <?php
                      $customer_id = Session::get('customer_id');
                      ?>
              <input style="display: none;" type="text" name="customer_id" value="<?php echo $customer_id?>">
                <input style="display: none;" type="text" name="TenSP" value="{{$result->name}}">
                <input style="display: none;" type="text" name="image" value="{{$result->image}}">
                <input style="display: none;" type="text" name="price" value="{{$result->price}}">
                <button  style="left:50px;" type="submit" class="btn sqaure_bt">Add to cart</button>
                <!-- <a href="{{url(route('Addcart',$result->id))}}"><button  style="left:50px;" type="submit" class="btn sqaure_bt">Add to cart</button></a> -->
                </form>
            </div>
            <div class="share-post"> <a href="#" class="share-text">Share</a>
              <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="tab_bar_section">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item nav-link active">Mô tả </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">
                      <p>{{$result->description}}
                    </div>
                  </div>
                  <div id="reviews" class="tab-pane fade">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-bottom: 35px;">
              <h3>Sản phẩm cùng loại</h3>
              </div>
            </div>
          </div>
        </div>
        
       
        <div class="row">
        @foreach($type as $type)
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="{{asset('images')}}/{{$type->image}}" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="{{url(route('getdatabyID',$type->id))}}">{{$type->name}}</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="new_price">{{$type->price}}</span></p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        
      </div>
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Nhận báo giá</h4>
            <p>Chúng tôi có rất nhiều dịch vụ hợp lí cho bạn tham khảo</p>
            <a class="btn sqaure_bt" href="{{ route('service')}}">Dịch Vụ</a> </div>
          <div class="side_bar_blog">
            <h4>Những dịch vụ của chúng tôi</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Lấy lại dữ liệu</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Sửa chữa máy tính</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Một số dịch vụ điện thoại kèm thêm</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Vấn đề kết nối mạng</a></li>
                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Hỗ trợ kĩ thuật</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>Những mặt hàng cùng nhà cung cấp</h4>
            <div class="categary">
              <ul>
                @foreach($NhaCC as $NhaCC)
                <li><a name="TenSP" href="{{url(route('getdatabyID',$NhaCC->id))}}"><i class="fa fa-angle-right"></i> {{$NhaCC->name}}</a></li>
               @endforeach
              </ul>
            </div>
          </div>
          <!-- <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
 
</div>
</div>
@stop