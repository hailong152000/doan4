@extends('layout.frontend.master')

@section('title','Cart page')

@section('content')
<div class="section padding_layout_1 checkout_section">
  <div class="container">
    <div class="row">
    <?php
                        $customer_name =Session::get('customer_name');
                        ?>
    <?php
                        $customer_SDT =Session::get('customer_SDT');
                        ?>
                        <?php
                        $customer_DC =Session::get('customer_DC');
                        ?>
                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL){
                        ?>
                        <h4>Thông tin khách hàng:</h4>
      
        <table class='table table-bordered ' id="table1">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Địa Chỉ  </th>
                                        <th>Số Điện Thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                
                                    <tr>
                                        <td><?php echo $customer_name?></td>
                                        <td><?php echo $customer_DC?></td>
                                      
                                        <td><?php echo $customer_SDT?></td>
                                        <!-- <td>
                                            <i class="fas fa-check"></i>
                                        </td> -->
                                

                                    </tr>
                                  
                                   
                                </tbody>
                            </table>
      <?php
      }else{ ?>
            <div class="col-sm-12">
        <div class="full">
          <div class="tab-info login-section">
            <p>Bạn chưa đăng nhập thì không thể thanh toán <a href="#login" class="" data-toggle="collapse">Nhấn để đăng nhập</a></p>
          </div>
          <div id="login" class="collapse">
            <div class="login-form-checkout">
              <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
              <form action="#">
                <fieldset>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="username">Username or email <span class="required">*</span></label>
                    <input class="input-text" name="username" id="username" required="" type="text">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <label for="password">Password <span class="required">*</span></label>
                    <input class="input-text" name="password" id="password" required="" type="password">
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 btn-login">
                    <button class="bt_main">Login</button>
                    <span class="remeber">
                    <input type="checkbox">
                    Remember me</span> </div>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="tab-info coupon-section">
            <p>Have a coupon? <a href="#cupon" class="" data-toggle="collapse">Click here to enter your code</a></p>
          </div>
          <div id="cupon" class="collapse">
            <div class="coupen-form">
              <form action="#">
                <fieldset>
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-12">
                    <input class="input-text" name="coupon" placeholder="Coupon code" id="coupon" required="" type="text">
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <button class="bt_main">Login</button>
                  </div>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
                            <?php
                        }
                        ?>
    </div>
    <div class="row">
      <div class="col-md-8">
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
            <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img style="height: 110px;weight:110px;" class="media-object" src="{{asset('images')}}/{{$cart->image}}" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">{{$cart->TenSP}}</a></h4>
                      <!-- <span>Status: </span><span class="text-success">In Stock</span> </div> -->
                  </div></td>
               
                <td class="col-sm-1 col-md-1"><p class="quantity"  value="" ></p>{{$cart->quantity}}</td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">{{$cart->price}}Đ</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">{{ number_format($cart->quantity*$cart->price) }}Đ</p></td>
              @endforeach
    
            </tbody>
          </table>
      </div>
      <div class="col-md-4">
        <div class="shopping-cart-cart">
        <?php
                      $customer_id = Session::get('customer_id');
                      ?>
        <form action="{{ route('updatecart',$customer_id)}}" method="POST">
                            @csrf
                            
          <table>
          @foreach($detail as $detail)
            <tbody>
              <tr class="head-table">
                <td><h5>Tổng quan Giỏ hàng</h5></td>
                <td class="text-right"></td>
              </tr>
              <tr>
                <td><h3>Tổng Giá</h3></td>
                
                <td class="text-right"><h4>{{number_format($detail->total_price)}}Đ</h4></td>
                
               
              </tr>
              <tr>
              <input style="display: none;" type="number" name="details_id" value="{{$detail->id}}">
                <td><button style="cursor: pointer;" type="submit" class="button">Thanh Toán</button></td>
              </tr>
            </tbody>
            @endforeach
          </table>
       
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop