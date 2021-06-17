@extends('layout.backend.auth')

@section('title','Login page')

@section('content')
<div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/favicon.svg" height="48" class='mb-4'>
                                <h3>Đăng ký</h3>
                                <p>Vui lòng điền đầy đủ thông tin.</p>
                            </div>
                            @if(Session::has('create_success'))
                            {{ Session::get('create_success')}}
                            @endif
                            @if(Session::has('create_success'))
                            {{ Session::get('create_fail')}}
                            @endif
                            <form action="{{ route('post_register')}}" method="POST">
                               @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Họ Tên:</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                name="name" value="{{ old('name')}}  ">
                                        </div>
                                        @error('name')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="email" value="{{ old('email')}}" >
                                        </div>
                                        @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Mật khẩu</label>
                                            <input type="password" id="password" class="form-control"
                                                name="password" value="{{ old('password')}}">
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Nhập lại mật khẩu</label>
                                            <input type="password" id="company-column" class="form-control"
                                                name="confirm-password" value="{{ old('confirm-password')}}">
                                                
                                        </div>
                                        @error('confirm-password')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Địa Chỉ</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="Diachi" value="{{ old('Diachi')}}" required>
                                        </div>
                                        <!-- @error('DiaChi')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror -->
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">SĐT</label>
                                            <input type="number" id="company-column" class="form-control"
                                                name="SDT" value="{{ old('SDT')}}">
                                                
                                        </div>
                                        @error('SDT')
                                        <div class="alert alert-danger" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                </diV>

                                <a  href="{{ route('login')}}"><u><i>Đăng nhập <i style="transform: rotate(90deg);" class="ml-1 fas fa-arrow-up"></i></i></u></a>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right">Đăng ký</button>
                                </div>
                            </form>
                        </div>
@stop