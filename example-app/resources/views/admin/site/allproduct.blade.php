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
@section('script')
<script>
        $(document).ready(function () {
            $('#table1').DataTable({
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "language": {
                    "search": "Tìm kiếm: ",
                    "searchPlaceholder": "Nhập từ khóa...",
                    "lengthMenu": "Hiển thị _MENU_ bản ghi",
                    "info": "Trang hiện tại _PAGE_ / _PAGES_",
                    "infoEmpty": "Không có bản ghi trả về!",
                    "zeroRecords": "Không tìm thấy bản ghi",
                    "infoFiltered": "(tìm kiếm trong _MAX_ bản ghi)",
                    "paginate": {
                        "first": "Đầu trang",
                        "last": "Cuối trang",
                        "previous": "<i class='fas fa-angle-left'  color: orangered;'></i>",
                        "next": "<i class='fas fa-angle-right'  color: orangered;'></i>"
                    }
                },
                "pagingType": "full_numbers",
                "aoColumnDefs": [
                    {
                        "bSortable": false,
                        "aTargets": [-1, -2]
                    }
                ]

            });
        });

    </script>
@stop
@section('content')

<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Danh sách sản phẩm</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-left">
                            <li class="breadcrumb-item"><a href="#">Quản lý sản phẩm</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dánh sách sản phẩm</li>
                        </ol>
                    </nav>
                </div>
                <section class="section">
                    <div class="card">
                        <div class=" card-header bg-white">
                          <u style="color: #0dcaf0; cursor: pointer;" class="font-italic"> Bảng danh sách sản phẩm</u>  
                        </div>
                        <div class="mb-3 bg-white">
                            <a href="{{ route('addproduct')}}">
                                <button type="button" class="ml-4 btn btn-success"><i class="mr-2  fas fa-plus"></i>Thêm bản ghi</button>
                            </a>
                            
                          </div>
                        <div class="mt-2 card-body">
                            <table class='table table-bordered ' id="table1">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name   </th>
                                        <th>Giá</th>
                                        <th class="text-right" style="border-right: none; text-align: right; width: 10px;">Action</th>
                                        <th class="text-right" style="border-left: none; color: #fff !important; width: 10px;">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stt=1;
                                    ?>
                                    @foreach($Product as $product)
                                    <tr>
                                        <td>{{$stt++}}</td>
                                        <td>{{$product->name}}</td>
                                      
                                        <td>{{number_format($product->price)}}Đ</td>
                                        <!-- <td>
                                            <i class="fas fa-check"></i>
                                        </td> -->
                                        <td>
                                            <a class="btn-trash" href="{{url(route('getUpdate',$product->id))}}"><i class="btn btn-primary far fa-edit"></i></a>
                                            <div class="card mt-2 message" style="position:absolute; width: 8rem;">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Chỉnh sửa</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn-delete" href="{{url(route('delete',$product->id))}}"><i class="btn btn-danger fas fa-trash-alt"></i></a>
                                            <div class="card mt-2 message1" style="position:absolute; width: 6rem;">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">Xóa </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
            @stop