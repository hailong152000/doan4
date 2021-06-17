<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Online Login Form Responsive Widget Template :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="{{asset('login')}}/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('login')}}/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>PiKaLong Store</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Đăng Ký</h2>
			</div>
            @if(Session::has('create'))
            {{ Session::get('create')}}
            @endif
            @if(Session::has('create'))
            {{ Session::get('fail')}}
            @endif
            <form action="{{ route('post_registercus')}}" method="POST">
                @csrf
				<div class="pom-agile">
					<input placeholder="UID" name="UID" class="user" type="text" required="" value="{{ old('UID')}}">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    @error('UID')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="Password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    @error('Password')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
                <div class="pom-agile">
					<input  placeholder="confirm-password" name="confirm-password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    @error('confirm-password')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
                <div class="pom-agile">
					<input  placeholder="Họ Tên" name="Ten" class="pass" type="text" required="" value="{{ old('Ten')}}">
					<span class="icon2"><i class="fas fa-pencil" aria-hidden="true"></i></span>
                    @error('Ten')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
                <div class="pom-agile">
					<input placeholder="Địa Chỉ Cụ Thể" name="Dia_chi" class="pass" type="text" required="" value="{{ old('Dia_chi')}}">
					<span class="icon2"><i class="fas fa-map-marker" aria-hidden="true"></i></span>
                    @error('Dia_chi')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
                <div class="pom-agile">
					<input  placeholder="Số Điện Thoại" name="SĐT" class="pass" type="number" required="" value="{{old('SĐT')}}  ">
					<span class="icon2"><i class="fas fa-mobile" aria-hidden="true"></i></span>
                    @error('SĐT')
                                        <div class="alert alert-primary" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
				</div>
				<div class="sub-w3l">
					<h6><a href="{{ route('logincus')}}">Đăng Nhập?</a></h6>
					<div class="right-w3l">
						<input type="submit" value="Đăng Ký">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
	</div>
	<!--//footer-->
</div>
</body>
</html>