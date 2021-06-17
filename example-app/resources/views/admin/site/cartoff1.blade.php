
@extends('layout.backend.allproduct')

@section('title','product page')

@section('style')
<style>
       
            th {
                border-bottom: none !important;
                color: #333 !important;
                font-weight: 600 !important;
    
            }
    
            .message {
                z-index: 99;
                opacity: 0;
                visibility: hidden;
            }
            .message1 {
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                
            }
    
            .btn-trash:hover + .message {
                opacity: 1;
                visibility: visible;
                transition: linear .3s;
            }
            .btn-delete:hover + .message1 {
                opacity: 1;
                visibility: visible;
                transition: linear .3s;
            }
    
    
    
            .message::before {
                position: absolute;
                content: "";
                left: 10%;
                transform: translateX(-50%) rotate(45deg);
                top: -6px;
                transform: rotate(45deg);
                width: 10px;
                height: 10px;
                border-top: 1px solid #e5e5e5;
                border-left: 1px solid #e5e5e5;
                background-color: #fff;
            }
            .message1::before {
                position: absolute;
                content: "";
                left: 10%;
                transform: translateX(-50%) rotate(45deg);
                top: -6px;
                transform: rotate(45deg);
                width: 10px;
                height: 10px;
                border-top: 1px solid #e5e5e5;
                border-left: 1px solid #e5e5e5;
                background-color: #fff;
            }
        </style>
@stop

@section('content')

<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Danh sách Đơn hàng</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-left">
                            <li class="breadcrumb-item"><a href="#">Quản lý đơn hàng</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dánh sách đơn hàng chưa phê duyệt</li>
                        </ol>
                    </nav>
                </div>
              
                <section class="section">
                @foreach($result as $user)
                    <div class="table">
                        <div class=" card-header bg-white">
                          <u style="color: #999999;" class="font-italic"> Đơn hàng của {{$user->Ten}}</u>  
                        </div>
                        <p style="margin-left:50px;">Số điện thoại:{{$user->SĐT}}</p>
                        <p style="margin-left:50px;">Địa chỉ:{{$user->Dia_chi}}</p>
                        <p style="margin-left:50px;">Tổng giá đơn hàng:{{number_format($user->total_price)}}Đ</p>
                        <a href="{{url(route('getdetailbyID',$user->id))}}">
                       <p>Xem chi tiết đơn hàng </p>
                       </a>
                    </div>
                    @endforeach
                </section>
              
            </div>
            @stop