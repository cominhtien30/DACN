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
          <div>Thêm Phim
            <div class="page-title-subheading">Hãy Thêm Và Kiểm Tra Thông Tin Thật Chính Xác.
            </div>
          </div>
        </div>
        <div class="page-title-actions">


        </div>    </div>
      </div>

      <div class="main-card mb-3 card">
        <div class="card-body">

          <form class="needs-validation" novalidate action="{{route('admin-add-phim')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-8 mb-3">
                <label for="validationCustom01">Tên Phim</label>
                <input type="text" name="tenphim" class="form-control" id="validationCustom01" placeholder="Tên Phim" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 select-outline">

                <label for="inputState">Thể Loại</label>
                <select class="form-control" name="theloai">
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị">Kinh Dị</option>
                  <option value="Tình Cảm">Tình Cảm</option>
                  <option value="Hoạt Hình">Hoạt Hình</option>
                  <option value="Hài">Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                </select>
                <br />
              </div>
              <div class="col-md-8 mb-3">

                <label for="inputState">Tên Tiếng Anh</label>
                <input type="text" name="tentienganh" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-4 select-outline">

                <label for="inputState">Quốc Gia</label>
                <select class="form-control" name="quocgia">
                  <option value="Việt Nam">Việt Nam</option>
                  <option value="Hàn Quốc">Hàn Quốc</option>
                  <option value="Mỹ">Mỹ</option>
                  <option value="Nhật Bản">Nhật Bản</option>
                  <option value="Anh">Anh</option>

                </select>
                <br />
              </div>
              <div class="col-md-4 mb-3">

                <label for="inputState">Hình Ảnh</label>
                <i class="metismenu-icon pe-7s-cloud-upload"></i>
                <input type="file" name="image" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="Chọn Ảnh" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-4 mb-3">

                <label for="inputState">Nhà Sản Xuất</label>
                <input type="text" name="nsx" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-4 mb-3">

                <label for="inputState">Đạo Diễn</label>
                <input type="text" name="daodien" class="form-control" id="validationCustom01" placeholder="Tên Đạo Diễn" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-12 mb-3">

                <label for="inputState">Nhập Danh Sách Diễn Chính</label>
                <input type="text" name="dienvien" class="form-control" id="validationCustom01" placeholder="Tên Diễn Viên" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-12 mb-3">

                <label for="inputState">Nội Dung </label>
                <textarea name="noidung"  class="form-control"  rows="6" cols="80" required placeholder="Mỗ Tả Phim"></textarea>

                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-6 mb-3">
                <label for="inputState">Ngày Chiếu</label>
                <input type="date" name="ngaykhoichieu" class="form-control" id="validationCustom01" placeholder="" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-6 mb-3">

                <label for="inputState">Trạng Thái</label>
                <select class="form-control" name="trangthai">
                  <option value="1">Đang Chiếu</option>
                  <option value="0">Sắp Chiếu</option>


                </select>
                <br />
            </div>
            <div class="col-md-5 mb-3">

              <label for="inputState">Thời Lượng</label>
                <input type="number" minlength="2" maxlength="3" name="thoiluong" class="form-control" id="validationCustom01" placeholder="" value="120" required>
              <br />
          </div>
          
        <div class="col-md-7 mb-3">

          <label for="inputState">Trailer</label>
          <input type="url" name="trailer" class="form-control" id="validationCustom01" placeholder="Nhập Link Trailer" value="" required>
          <br />
      </div>
      @if(isset($error))
      <div class="col-md-12 mb-3">
       
        <label class="text-danger">{{$error}}</label>
      
        <br />
    </div>
    @endif
            <button class="btn btn-primary" type="submit">Lưu</button>
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
