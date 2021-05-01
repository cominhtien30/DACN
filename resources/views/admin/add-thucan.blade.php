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
          <div>Thêm thức ăn hoặc combo mới
            <div class="page-title-subheading">Hãy Thêm Và Kiểm Tra Thông Tin Thật Chính Xác.
            </div>
          </div>
        </div>
        <div class="page-title-actions">


        </div>    </div>
      </div>

      <div class="main-card mb-3 card">
        <div class="card-body">

          <form class="needs-validation" novalidate action="{{route('admin-insert-thucan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Tên đồ ăn hoặc combo</label>
                <input type="text" name="tenthucan" class="form-control" id="validationCustom01" placeholder="Nhập tên đồ ăn hoặc combo" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <br>
              <div class="col-md-6 mb-3">

                <label for="inputState">Hình Ảnh</label>
                <i class="metismenu-icon pe-7s-cloud-upload"></i>
                <input type="file" name="image" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="Chọn Ảnh" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
             
              <div class="col-md-6 mb-3">

                <label for="inputState">Giá</label>
                <input type="number" name="giathucan" class="form-control" id="validationCustom01" placeholder="Nhập Giá" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-12 mb-3">
                <button class="btn btn-primary" type="submit">Lưu Thức Ăn</button>
            </div>
        </form>
            
 
      @if(isset($error))
      <div class="col-md-12 mb-3">
       
        <label class="text-danger">{{$error}}</label>
      
        <br />
    </div>
    
    @endif
         
          
        </div>
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
