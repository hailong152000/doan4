@extends('layout.frontend.user')

@section('title','user page')

@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Thông tin cá nhân của bạn</h3>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="container">
                        @if(Session::has('create_success'))
                            {{ Session::get('create_success')}}
                            @endif
                            @if(Session::has('create_success'))
                            {{ Session::get('create_fail')}}
                            @endif
                        <form action="{{ route('post_user',$user->customer_id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <section class="panel panel-default">
                                <div style="text-align: center; padding: 20px 0" class="panel-heading">
                                    <h3 class="panel-title mg-auto font-italic"><u>Quản lý thông tin cá nhân của bạn</u></h3>
                                </div>
                                <div class="panel-body">
                                    <form action="add.html" method="GET" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Nhập họ tên mới:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="Ten" id="name"
                                                    placeholder="Nhập tên..." required value="{{$user->Ten}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Đổi ảnh đại diện:</label>
                                            <div class="col-sm-3">
                                                <label class="control-label small" for="file_img">Chọn ảnh:
                                                    (jpg/png):</label> <input type="file" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Số điện thoại:</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="SĐT" id="name"
                                                    placeholder="Nhập số lượng..." required value="{{$user->SĐT}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Địa Chỉ:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="Dia_chi" id="name"
                                                    placeholder="Nhập giá bán..." required value="{{$user->Dia_chi}}">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="mr-4 btn btn-info ">Lưu</button>
                                            </div>
                                        </div> <!-- form-group // -->
                                    </form>
                                </div><!-- panel-body // -->
                            </section><!-- panel// -->
                        </form>
                        </div> <!-- container// -->
                    </div>
                </section>
            </div>
            <script>
        $(document).ready(function () {
            $('#select2').select2({
                'placeholder': '  Chọn options',
            })
        })
    </script>
@stop