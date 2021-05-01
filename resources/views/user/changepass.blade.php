<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bug Cinema</title>
  <meta name="description" content="A Template by Gozha.net">
 <meta name="keywords" content="HTML, CSS, JavaScript">

 <link rel="shortcut icon" type="image/png" href="{{('public/frontend/images/favicon.ico')}}" />


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

      <div class="login100-form validate-form" >
   <span class="login100-form-title">
   Member Login
   </span>

   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
   <input class="input100" type="text" name="user_email" placeholder="Email" id="email">
   <span class="focus-input100"></span>
   <span class="symbol-input100">
    <i class="fa fa-envelope" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
   <input class="input100" type="button" style="background-color: darkgrey" value="Click Here Send Code" readonly id="sendcode">
   <span class="focus-input100"></span>
   <span class="symbol-input100">
    <i class="fa fa-envelope" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden id="thanhcong">
   <input class="input100" type="button" style="color: rgb(122, 202, 3)" value="Đã gửi mail..." readonly>
   <span class="focus-input100"></span>

   <span class="symbol-input100">
    <i class="fa fa-paper-plane" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden id="loi">
   <input class="input100" type="button" style="color: red" value="Vui Lòng Kiểm Tra Email" readonly >
   <span class="focus-input100"></span>
   <span class="symbol-input100">

    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden id="loi1">
   <input class="input100" type="button" style="color: red" value="Email chưa đăng ký " readonly >
   <span class="focus-input100"></span>
   <span class="symbol-input100">

    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   </span>
   </div>

   <div class="wrap-input100 validate-input" >
   <input class="input100" type="text" id="code" placeholder="Code">
   <span class="focus-input100"></span>
   <span class="symbol-input100">

    <i class="fa fa-key" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Password is required">
   <input class="input100" type="password" id="pass" placeholder="New Password">
   <span class="focus-input100"></span>
   <span class="symbol-input100">
    <i class="fa fa-lock" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Password is required">
   <input class="input100" type="password" id="repass" placeholder="New RePassword">
   <span class="focus-input100"></span>
   <span class="symbol-input100">
    <i class="fa fa-lock" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden id="codesai">
   <input class="input100" type="button" style="color: red" value="Vui Lòng Kiểm Tra Lại Code" readonly >
   <span class="focus-input100"></span>
   <span class="symbol-input100">

    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   </span>
   </div>
   <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" hidden id="passsai">
   <input class="input100" type="button" style="color: red" value="Vui Lòng Kiểm Tra lại Mật Khẩu" readonly >
   <span class="focus-input100"></span>
   <span class="symbol-input100">

    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
   </span>
   </div>
   <div class="container-login100-form-btn">
   <button class="login100-form-btn" id="change">
    Change
   </button>
   </div>

   <div class="text-center p-t-12">

   <div class="" style="color: rgb(86, 163, 8)" hidden id="successchange">
    Đổi Mật Khẩu Thành Công
    <strong><button id="clicklogin" class="" style="color: darkturquoise">Đăng Nhập Ngay!<button></strong>
   </div>

   </div>

   <div class="text-center p-t-136">
   <a class="txt2" href="#">
    Create your Account
    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
   </a>
   </div>
  </div>
  </div>
 </div>
 </div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<script>
 $(document).ready(function(){

 $('#sendcode').click(function(){
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  var email=$('#email').val();

  var url="{{route('sendcode')}}";
  if(!emailReg.test(email) || email==""){
  $('#loi').show();
  $('#thanhcong').hide();
  }else{
  $.get({
   type:'GET',
   url:url,
   data:{
   email:email,
   },
      //dataType: 'JSON',
   success:function(response){
   //alert(response);
   $('#loi').hide();
   $('#loi1').hide();
   $('#sendcode').val("Gửi Lại");
    $(''+response+'').show();

   }
      });



  }


 });
 });


</script>
<script>
 $(document).ready(function(){

 $('#change').click(function(){
  var code=$('#code').val();
  var pass=$('#pass').val();
  var email=$('#email').val();
  var repass=$('#repass').val();
  if(pass!=repass){
  $('#passsai').show();
  $('#codesai').hide();
  }else if(code==""){
  $('#passsai').hide();
  $('#codesai').show();
  }else{
  var url="{{route('changepass')}}";
  $.get({
   type:'GET',
   url:url,
   data:{
   code:code,
   pass:pass,
   email:email
   },
      //dataType: 'JSON',
   success:function(response){
   //alert(response);
   $('#passsai').hide();
   $('#codesai').hide();
   $('#loi').hide();
    $(''+response+'').show();
   }
      });

  }





 });
 });


</script>
<script>
 $(document).ready(function(){

 $('#clicklogin').click(function(){

  window.location.href = 'http://localhost:8080/DACN2/dangnhap';



 });
 });


</script>