@extends('layout.backend.product')

@section('title','Addproduct page')

@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Sửa bản ghi</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-left">
                            <li class="breadcrumb-item"><a href="#">Quản lý sản phẩm</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sửa bản ghi</li>
                        </ol>
                    </nav>
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
                        <form action="{{ route('update',$result->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <section class="panel panel-default">
                                <div style="text-align: center; padding: 20px 0" class="panel-heading">
                                    <h3 class="panel-title mg-auto font-italic"><u>Nhập thông tin</u></h3>
                                </div>
                                <div class="panel-body">

                                    <form action="add.html" method="GET" class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Nhập tên:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Nhập tên..." required value="{{$result->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Chọn tệp:</label>
                                            <div class="col-sm-3">
                                                <label class="control-label small" for="file_img">Chọn ảnh:
                                                    (jpg/png):</label> <input type="file" name="image">
                                            </div>
                                        </div>


                                        <!-- <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Chọn tệp:</label>
                                            <div class="col-sm-3">
                                                <label class="control-label small" for="file_img">Chọn ảnh:
                                                    (jpg/png):</label> <input type="file" name="image" required value="{{$result->image}}">
                                            </div>
                                        </div>  -->
                                        <div class="form-group">
                                            <label for="tech" class="col-sm-3 control-label">Loại sản phẩm</label>
                                            <div class="col-sm-3">
                                                <select name="producttype_id" class="form-control" >
                                                    <option value="">--Chọn giá trị--</option>
                                                    @foreach($producttype as $type)
                                                    <option  value="{{$type->producttype_id}}">{{$type->product_type}}</option>
                                                    <!-- <option value="texnolog3">Option 2</option> -->
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="tech" class="col-sm-3 control-label">Nhà Cung Cấp</label>
                                            <div class="col-sm-3">
                                                <select name="ncc_id" class="form-control" >
                                                    <option value="">--Chọn giá trị--</option>
                                                    @foreach($ncc as $types)
                                                    <option  value="{{$types->NCC_id}}">{{$types->NCC}}</option>
                                                    <!-- <option value="texnolog3">Option 2</option> -->
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> <!-- form-group // -->
                                        <!-- <div class="form-group">
                                            <label for="tech" class="col-sm-3 control-label">Loại sản phẩm</label>
                                            <div class="col-sm-3">
                                                <select name="LoaiSP" class="form-control" >
                                                    <option value="">--Chọn giá trị--</option>
                                                    <option value="texnolog2">Option 1</option>
                                                    <option value="texnolog3">Option 2</option>
                                                </select>
                                            </div>
                                        </div> form-group // -->
                                        <!-- <div class="form-group">
                                            <label for="tech" class="col-sm-3 control-label">Nhà Cung Cấp</label>
                                            <div class="col-lg-3">
                                                <select  name="NCC" class="form-control">
                                                    <option value="">--Chọn giá trị--</option>
                                                    <option value="texnolog2">Option 1</option>
                                                    <option value="texnolog3">Option 2</option>
                                                </select>
                                            </div>
                                        </div> form-group // -->
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Số Lượng:</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="quantity" id="name"
                                                    placeholder="Nhập số lượng..." required value="{{$result->quantity}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Giá bán:</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="price" id="name"
                                                    placeholder="Nhập giá bán..." required value="{{$result->price}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="about" class="col-sm-3 control-label">Mô tả:</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="description" id="full"
                                                    placeholder="Nhập mô tả..." required value="{{$result->description}}">
                                            </div>
                                        </div> <!-- form-group // -->
                                        <hr>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">

                                                <button type="submit" class="mr-4 btn btn-info ">Lưu thông tin</button>

                                                <a href="./showAll.html">
                                                    <button type="button" class="btn btn-danger">Thoát</button>
                                                </a>
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