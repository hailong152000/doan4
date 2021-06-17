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
             
                    <div class="card">
                        <div class=" card-header bg-white">
                          <u style="color: #0dcaf0; cursor: pointer;" class="font-italic"> Bảng danh sách đơn hàng đang giao</u>  
                        </div>
                       
                      
                      
                        <div class="mt-2 card-body">
                            <table class='table table-bordered ' id="table1">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name   </th>
                                        <th>Đơn Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng Giá</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stt=1;
                                    ?>
                                    @foreach($result as $product)
                                    <tr>
                                        <td>{{$stt++}}</td>
                                        <td>{{$product->TenSP}}</td>
                                        <td>{{number_format($product->price)}}Đ</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{number_format($product->total_price)}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                   
                </section>
            </div>
            @stop