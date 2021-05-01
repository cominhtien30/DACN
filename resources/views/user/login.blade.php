<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bug Cinema</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
	<link rel="shortcut icon" type="image/png" href="{{('public/frontend/images/favicon.ico')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('public/frontend/images/img-01.png')}}" alt="IMG">
				</div>

            <form action="{{URL::to('profile')}}" class="login100-form validate-form" method="post">
                {{ csrf_field() }}
					<span class="login100-form-title" style= "font-family: 'Roboto';">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user_email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="user_password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
						
					</div>
					<br>
	
					<div class="container-login100-form-btn">

						
						<a  href="{{url('/login/facebook')}}"><button type="button" style=" color:4285f4; width:110px; height:40px; "><img src="{{asset('public/frontend/images/facebook.png')}}" style="width:30px; background:white;" alt=""><b style="top: -10px; left: 5px; position: relative">Facebook</b></button></a>
						<a  href="{{url('/login/google')}}"><button type="button" style=" color:4285f4; border:none; width:110px; height:40px; "><img src="{{asset('public/frontend/images/google.png')}}" style="width:30px; background:white; " alt=""><b style="top: -10px; left: 5px; position: relative">Google</b></button></a>

					</div>
					<br>
					
					<hr>
					<div class="form-group row mb-0">
						
					<div class="col-md-8 offset-md-4">
						
					</div>
					</div>
					
					<div class="text-center p-t-12">
						<span class="txt1">
							Quên
						</span>
						<a class="txt2" href="{{URL('changepass')}}">
							Mật khẩu
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Tạo tài khoản.
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('public/frontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>
</html>
