<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Key Login Form Flat Responsive Widget Template :: W3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{'public/backend/login/css/style.css'}}" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="{{'public/backend/login/css/font-awesome.min.css'}}" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">

		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="index.html"><span class="fa fa-key"></span> Key</a></h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					<li class="active">
						<a href="#" class="">Login</a>
					</li>
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Register</a>
					</li>
					<li class="">
						<a href="#" class="">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content-w3ls">
			<div class="text-center icon">
				<span class="fa fa-html5"></span>
			</div>
			<div class="content-bottom">
				<form action="{{route('admin-login')}}" method="post">
           @csrf
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="email" id="text1" type="text" value="" placeholder="Email" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>
          @if(isset($error))
          <div class="wthree-field">
						<span class="text-danger">{{$error}}</span>
					</div>
          @endif
					<div class="wthree-field">
						<button type="submit" class="btn">Đăng Nhập</button>
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
							<a href="#" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="">
							<a href="#" class="">Create Account</a>
						</li>
						<li class="">
							<a href="#" class="text-right">Need Help?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>
		<div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Privacy Policy</a>
					</li>
					<li class="">
						<a href="#" class="">Terms of Use</a>
					</li>
				</ul>
			</div>

		</div>
    </div>
</section>
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
	 <div class="modal-content">
		<!-- Modal Header -->
		<div class="modal-header">
		   <h4 class="modal-title">Modal Heading</h4>
		   <button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<!-- Modal body -->
		<div class="modal-body">
		   Modal body..
		</div>
		<!-- Modal footer -->
		<div class="modal-footer">
		   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	 </div>
  </div>
</div>
</body>
<!-- //Body -->
</html>
