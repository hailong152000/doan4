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
                        <form action="{{ route('post_password',$user->customer_id)}}" method="POST">
                            @csrf
                            <section class="panel panel-default">
                                <div style="text-align: center; padding: 20px 0" class="panel-heading">
                                    <h3 class="panel-title mg-auto font-italic"><u>Quản lý thông tin cá nhân của bạn</u></h3>
                                </div>
                                <div class="panel-body">
                                    <form action="add.html" method="GET" class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Mật khẩu mới:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="Password" id="name"
                                                    placeholder="Nhập mật khẩu mới..." >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Xác nhận mật khẩu mới:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="confirm-password" id="name"
                                                    placeholder="Xác nhận mật khẩu mới..." >
                                            </div>
                                        </div>
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
@stop