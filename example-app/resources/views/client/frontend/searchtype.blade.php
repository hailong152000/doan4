@extends('layout.frontend.master')

@section('title','Index page')

@section('content')
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
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
        </div>
      
      <div class="col-md-3">
        <div class="side_bar">
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