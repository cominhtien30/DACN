@extends('admin.layout')
@section('content')

<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div class="page-title-icon">
            <i class="pe-7s-graph text-success">
            </i>
          </div>
          <div>Cập Nhật Thức Ăn
            <div class="page-title-subheading">Hãy Thêm Và Kiểm Tra Thông Tin Thật Chính Xác.
            </div>
          </div>
        </div>
        <div class="page-title-actions">


        </div>    </div>
      </div>

      <div class="main-card mb-3 card">
        <div class="card-body">

          <form class="needs-validation" novalidate action="{{route('admin-edit-thucan',$detail->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tên</label>
              <input type="text" name="tenthucan" class="form-control" id="validationCustom01" placeholder="Tên Phim" value="{{$detail->ten}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-9 mb-3">
                <i class="metismenu-icon pe-7s-cloud-upload"></i>
                <label for="inputState">Chọn File</label>
                <input type="file" name="image" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="Chọn Ảnh">
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
                
                    <label for="inputState">Giá</label>
                    <input type="text" name="giathucan" class="form-control" id="validationCustom01" placeholder="" value="{{$detail->gia}}" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <br />
                  
              </div>
              
              <div class="col-md-3 mb-3">
               
                <img width="250" height="250" class="img-fluid img-thumbnail" src="{{asset('public/uploads/thucan/'.$detail->image)}}" alt="">
                
                
              </div>
              @php
               $error=Session::get('error')  ; 
              @endphp
              @if(isset($error))
              <div class="col-md-12 mb-3">
               
                <label class="text-danger">{{$error}}</label>
              
                <br />
              </div>
            @endif
            <?php Session::forget('error'); ?>
              <button class="btn btn-success" type="submit">Cập Nhật</button>
              
            </form>
     
           
          
          <script></script>
          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
      </div>
    </div>

</div>

@endsection
