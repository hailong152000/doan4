@extends('layout.frontend.master')

@section('title','Cart page')

@section('content')
<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
          
              <tr>
                <th>Sản Phẩm</th>
                <th>Số lượng</th>
                <th class="text-center">Đơn giá</th>
                <th class="text-center">Tổng Giá</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($cart as $cart)
            <?php 
                    $total+= $cart->quantity*$cart->price;
                ?>
            <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img style="height: 110px;weight:110px;" class="media-object" src="{{asset('images')}}/{{$cart->image}}" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">{{$cart->TenSP}}</a></h4>
                      <!-- <span>Status: </span><span class="text-success">In Stock</span> </div> -->
                  </div></td>
                  <form action="{{ route('updatequantitycart',$cart->id)}}" method="POST">
                            @csrf
                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" name="quantity" value="{{$cart->quantity}}" >
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">{{number_format($cart->price)}}Đ</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">{{ number_format($cart->quantity*$cart->price) }}Đ</p></td>
                <td class="col-sm-1 col-md-1"><button type="submit" class="bt_main"> Lưu</button></td>
                  </form> 
                <td class="col-sm-1 col-md-1"><a href="{{url(route('deletecart',$cart->id))}}"><button type="button" class="bt_main"> Xóa</button></a></td> 
              </tr>
              @endforeach
    
            </tbody>
          </table>
          <table class="table">
            <!-- <tbody>
              <tr class="cart-form">
                <td class="actions"><div class="coupon">
                    <input name="coupon_code" class="input-text" id="coupon_code" placeholder="Coupon code" type="text">
                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                  </div>
                  <input class="button" name="update_cart" value="Update cart" disabled="" type="submit">
                </td>
              </tr>
            </tbody> -->
          </table>
        </div>
        <div class="shopping-cart-cart">
        <?php
                      $customer_id = Session::get('customer_id');
                      ?>
        <form action="{{ route('adddetail',$customer_id)}}" method="POST">
                            @csrf
          <table>
            <tbody>
              <tr class="head-table">
                <td><h5>Tổng quan giỏ hàng</h5></td>
                <td class="text-right"></td>
              </tr>
              <tr>
              <input style="display: none;" type="text" name="customer_id" value="<?php echo $customer_id?>">
              <input style="display: none;" type="text" name="total_price" value="<?php echo $total?>">
                <td><h3>Tổng Tiền</h3></td>
                <td class="text-right"><h4><?php echo number_format($total)?>Đ</h4></td>
              </tr>
              <tr>
                <td><a href="{{ route('home')}}"><button type="button" style="cursor: pointer;" class="button">Tiếp tục mua hàng</button></a></td>
                <?php
                     
                      if($total != 0){
                      ?>
                <td><button style="cursor: pointer;" type="submit" class="button">Thanh Toán</button></td>
                <?php
              }?>
              </tr>
            </tbody>
          </table>
        </form>
        </div>
        <!-- <div class="shopping-cart-cart">
          <table>
            <tbody>
                <td class="text-right"><h4></h4></td>
               
              </tr>
                <td><button type="submit" class="button">Đặt hàng</button></td>
              </tr>
              
            </tbody>
        
          </table>
        </div> -->
      </div>
    </div>
  </div>
</div>
@stop