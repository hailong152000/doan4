@extends('layout.frontend.master')

@section('title','product_type page')

@section('content')

<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
      @foreach($abc as $abc)
<H3 style="left: 50px;">{{$abc->product_type}}</H3>
@endforeach
        <div class="row">
        @foreach($result as $product)
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
          <form  action="{{ route('Addtocart',$product->id)}}" method="POST"  >
          @csrf
          
            <div class="product_list">
              <!-- <div style="display: none;" name="product_id">{{$product->id}}</div> -->
              <input style="display: none;" type="text" name="product_id" value="{{$product->id}}">
              <?php
                      $customer_id = Session::get('customer_id');
                      ?>
              <input style="display: none;" type="text" name="customer_id" value="<?php echo $customer_id?>">
              <input style="display: none;" type="text" name="TenSP" value="{{$product->name}}">
              <input style="display: none;" type="text" name="image" value="{{$product->image}}">
              <input style="display: none;" type="text" name="price" value="{{$product->price}}">
              <div class="product_img"> <img name=image class="img-responsive" src="{{asset('images')}}/{{$product->image}}" alt=""> </div>
              <div class="product_detail_btm">
              <!-- <a href="{{url(route('Addcart',$product->id))}}"><button  onclick="alert('Đã thêm sản phẩm thành công')" style="left:50px;" type="submit" class="btn sqaure_bt">Add to cart</button></a> -->
              <a onclick="Addtocart({{$product->id}})" href="Addtocart/{{$product->id}}"><button  style="left:50px;" type="submit" class="btn sqaure_bt">Add to cart</button></a>
               <!-- <button onclick="Addcart({{$product->id}})" style="left:50px;" type="button" class="btn sqaure_bt">Thêm vào giỏ hàng</button> -->
                <div class="center">
                  <h4><a name="TenSP" href="{{url(route('getdatabyID',$product->id))}}">{{$product->name}}</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
             
                <div class="product_price">
                  <p><span name=price class="new_price">{{number_format($product->price)}}Đ</span><span></p>
                </div>
              </div>
            </div>
            </form>
          </div>     
          @endforeach
          </div>
          {!! $result->links() !!}
        </div>

      <div class="col-md-3">
        <div class="side_bar">
        <div class="side_bar_blog">
            <h4>Tìm Kiếm</h4>
            <div class="side_bar_search">
            <form role="search" method="GET" action="{{ route('searchtype',$abc->producttype_id)}}">
              <div class="input-group stylish-input-group">
                <input name="key" class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button style="cursor: pointer;" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></span>
                 </div>
                 </form>
            </div>
          </div>
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
            <h4>Những mặt hàng khác</h4>
            <div class="categary">
              <ul>
                @foreach($random as $random)
                <li><a name="TenSP" href="{{url(route('getdatabyID',$random->id))}}"><i class="fa fa-angle-right"></i> {{$random->name}}</a></li>
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