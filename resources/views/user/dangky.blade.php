<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


<body>
 <div class="container">
  <div class="row">
 <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
  <div class="card card-signin my-5">
  <div class="card-body">
   <h5 class="card-title text-center">Sign In</h5>

   <div class="form-signin">
  <div class="form-label-group">
   <input type="email" class="form-control" placeholder="Email address" id="user_email" autofocus>
   <label for="inputEmail">Email address</label>
  </div>
  <div class="form-label-group">
   <input type="email" class="form-control" placeholder="name display" id="user_name" required autofocus>
   <label for="inputEmail">name display</label>
   </div>
  <div class="form-label-group">
   <input type="password" class="form-control" id="user_pass" placeholder="Password" required>
   <label for="inputPassword">Password</label>
  </div>
  <div class="form-label-group">
   <input type="password" id="user_repass" class="form-control" placeholder="Password" required>
   <label for="inputPassword">RePassword</label>
   </div>

  <div class="custom-control custom-checkbox mb-3" id="loi">

  </div>
  <button class="btn btn-lg btn-primary btn-block text-uppercase" id="dangky">Sign in</button>
  <hr class="my-4">
  <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{url('/login/google')}}"><i class="fab fa-google mr-2"></i> Sign in with Google</a>
  <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{url('/login/facebook')}}"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</a>

  </div>
  </div>
  </div>
 </div>
  </div>
 </div>
 </body>


 <script>
  $(document).ready(function(){


    $('#dangky').click(function(){
    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();
    var user_pass = $("#user_pass").val();
    var user_repass = $("#user_repass").val();
 var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

 if(!user_repass || !user_email || !user_name || !user_pass){
  var er='<div class="alert alert-danger"<strong>Lỗi ! </strong>Không được bỏ trống</div>';
      $('#loi').html(er);
 }else{
  if(user_pass!=user_repass){
  var er='<div class="alert alert-danger"<strong>Lỗi ! </strong>Mật khẩu không khớp</div>';
       $('#loi').html(er);
  }else if(mailformat.test(user_email)){
  var url="{{route('ajax_dangky')}}";
   $.get({
   type:'get',
   url:url,
   data:{
   user_name: user_name,
   user_email:user_email,
   user_pass: user_pass,
   user_repass: user_repass
   },

   success:function(response){

   $(''+response+'').modal('show');


   }
   });

  }else{
  var er='<div class="alert alert-danger"<strong>Lỗi ! </strong>Đây Không Phải Là Email</div>';
       $('#loi').html(er);

  }

    }


    });

  });
</script>
<style>
 body {
  font-family: "Varela Round", sans-serif;
 }
 .modal{
  margin-top:110px;

 }
 .modal-confirm1 {
  color: #636363;
  width: 325px;
  font-size: 14px;
 }
 .modal-confirm1 .modal-content {
  padding: 60px;
  padding-top:90px;
  border: none;
  text-align: center;
  font-size: 14px;
 }
 .modal-confirm1 .modal-header {
  border-bottom: none;
  position: relative;
 }
 .modal-confirm1 h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
 }
 .modal-confirm1 .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px;
 }
 .modal-confirm1 .close {
  position: absolute;
  top: -5px;
  right: -5px;
 }
 .modal-confirm1 .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
 }
 .modal-confirm1 .icon-box {
  color: #fff;
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: #82ce34;
  padding: 15px;
  text-align: center;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
 }
 .modal-confirm1 .icon-box i {
  font-size: 58px;
  position: relative;
  top: 3px;
 }
 .modal-confirm1 .modal-dialog {
  margin-top: 80px;
 }
 .modal-confirm1 .btn {
  color: #fff;
  border-radius: 4px;
  background: #82ce34;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
 }
 .modal-confirm1 .btn:hover, .modal-confirm1 .btn:focus {
  background: #6fb32b;
  outline: none;
 }
 .trigger-btn {
  display: inline-block;
  margin: 100px auto;
 }
 </style>


<div id="myModal" class="modal fade">
 <div class="modal-dialog modal-confirm">
 <div class="modal-content">
 <div class="modal-header flex-column">
  <div class="icon-box">
  <i class="material-icons">&#xE5CD;</i>
  </div>
  <h4 class="modal-title w-100">Email Tồn Tại</h4>

 </div>
 <div class="modal-body">
  <p>Vui lòng kiểm tra lại thông tin.</p>
 </div>
 <div class="modal-footer justify-content-center">

  <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>

 </div>
 </div>
</div>
</div>
 <style>
 .modal{
  margin-top:130px;

 }
.modal-confirm {
 color: #636363;
width: 400px;

}
.modal-confirm .modal-content {
padding: 60px;
padding-top:90px;
 border: none;
 text-align: center;
 font-size: 14px;
}
.modal-confirm .modal-header {
border-bottom: none;
 position: relative;
}
.modal-confirm h4 {
 text-align: center;
 font-size: 26px;
 margin: 30px 0 -10px;
}
.modal-confirm .close {
 position: absolute;
 top: -5px;
 right: -2px;
}
.modal-confirm .modal-body {
 color: #999;
}
.modal-confirm .modal-footer {
 border: none;
 text-align: center;
 border-radius: 5px;
 font-size: 13px;
 padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
 color: #999;
}
.modal-confirm .icon-box {
 width: 80px;
 height: 80px;
 margin: 0 auto;
 border-radius: 50%;
 z-index: 9;
 text-align: center;
 border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
 color: #f15e5e;
 font-size: 46px;
 display: inline-block;
 margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
 color: #fff;
 border-radius: 4px;
 background: #60c7c1;
 text-decoration: none;
 transition: all 0.4s;
 line-height: normal;
 min-width: 120px;
 border: none;
 min-height: 40px;
 border-radius: 3px;
 margin: 0 5px;
}
.modal-confirm .btn-secondary {
 background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
 background: #a8a8a8;
}
.modal-confirm .btn-danger {
 background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
 background: #ee3535;
}
.trigger-btn {
 display: inline-block;
 margin: 100px auto;
}
</style>

 <!-- Modal HTML -->
 <div id="myModal1" class="modal fade">
  <div class="modal-dialog modal-confirm1">
 <div class="modal-content">
  <div class="modal-header ">
  <div class="icon-box">
   <i class="material-icons">&#xE876;</i>
  </div>
  <h4 class="modal-title w-100">Awesome!</h4>
  </div>
  <div class="modal-body">
  <p class="text-center">Chúc mừng bạn đăng ký thành công. Bạn vui lòng kích hoạt Email.</p>
  </div>




  <form action="{{route('verify')}}">
  <div class="modal-footer">
  <button class="btn btn-success btn-block">OK</button>

  </div>
  </form>
 </div>
  </div>
 </div>

<style>
 :root {
 --input-padding-x: 1.5rem;
 --input-padding-y: .75rem;
}

body {
 background: #007bff;
 background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
 border: 0;
 border-radius: 1rem;
 box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
 margin-bottom: 2rem;
 font-weight: 300;
 font-size: 1.5rem;
}

.card-signin .card-body {
 padding: 2rem;
}

.form-signin {
 width: 100%;
}

.form-signin .btn {
 font-size: 80%;
 border-radius: 5rem;
 letter-spacing: .1rem;
 font-weight: bold;
 padding: 1rem;
 transition: all 0.2s;
}

.form-label-group {
 position: relative;
 margin-bottom: 1rem;
}

.form-label-group input {
 height: auto;
 border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
 padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
 position: absolute;
 top: 0;
 left: 0;
 display: block;
 width: 100%;
 margin-bottom: 0;
 /* Override default `<label>` margin */
 line-height: 1.5;
 color: #495057;
 border: 1px solid transparent;
 border-radius: .25rem;
 transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
 color: transparent;
}

.form-label-group input:-ms-input-placeholder {
 color: transparent;
}

.form-label-group input::-ms-input-placeholder {
 color: transparent;
}

.form-label-group input::-moz-placeholder {
 color: transparent;
}

.form-label-group input::placeholder {
 color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
 padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
 padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
 padding-top: calc(var(--input-padding-y) / 3);
 padding-bottom: calc(var(--input-padding-y) / 3);
 font-size: 12px;
 color: #777;
}

.btn-google {
 color: white;
 background-color: #ea4335;
}

.btn-facebook {
 color: white;
 background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
 .form-label-group>label {
  display: none;
 }
 .form-label-group input::-ms-input-placeholder {
  color: #777;
 }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
 .form-label-group>label {
  display: none;
 }
 .form-label-group input:-ms-input-placeholder {
  color: #777;
 }
}
</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 