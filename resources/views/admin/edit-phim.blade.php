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
          <div>Cập Nhật Phim
            <div class="page-title-subheading">Hãy Thêm Và Kiểm Tra Thông Tin Thật Chính Xác.
            </div>
          </div>
        </div>
        <div class="page-title-actions">


        </div>    </div>
      </div>

      <div class="main-card mb-3 card">
        <div class="card-body">

          <form class="needs-validation" novalidate action="{{route('admin-update-phim',$detail->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-8 mb-3">
                <label for="validationCustom01">Tên Phim</label>
              <input type="text" name="tenphim" class="form-control" id="validationCustom01" placeholder="Tên Phim" value="{{$detail->tenphim}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 select-outline">

                <label for="inputState">Thể Loại</label>
                
                <select class="form-control" name="theloai">
                    @if($detail->theloai=="Hành Động")
                    <option value="Hành Động" selected>Hành Động</option>
                  <option value="Kinh Dị">Kinh Dị</option>
                  <option value="Tình Cảm">Tình Cảm</option>
                  <option value="Hoạt Hình">Hoạt Hình</option>
                  <option value="Hài">Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                    @elseif($detail->theloai=="Kinh Dị")
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị" selected>Kinh Dị</option>
                  <option value="Tình Cảm">Tình Cảm</option>
                  <option value="Hoạt Hình">Hoạt Hình</option>
                  <option value="Hài">Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                  @elseif($detail->theloai=="Tình Cảm")
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị" >Kinh Dị</option>
                  <option value="Tình Cảm" selected>Tình Cảm</option>
                  <option value="Hoạt Hình">Hoạt Hình</option>
                  <option value="Hài">Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                  @elseif($detail->theloai=="Hoạt Hình")
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị" >Kinh Dị</option>
                  <option value="Tình Cảm" >Tình Cảm</option>
                  <option value="Hoạt Hình" selected>Hoạt Hình</option>
                  <option value="Hài">Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                  @elseif($detail->theloai=="Hài")
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị" >Kinh Dị</option>
                  <option value="Tình Cảm" >Tình Cảm</option>
                  <option value="Hoạt Hình" >Hoạt Hình</option>
                  <option value="Hài" selected>Hài</option>
                  <option value="Gia Đình">Gia Đình</option>
                  @elseif($detail->theloai=="Gia Đình")
                  <option value="Hành Động">Hành Động</option>
                  <option value="Kinh Dị" >Kinh Dị</option>
                  <option value="Tình Cảm" >Tình Cảm</option>
                  <option value="Hoạt Hình" >Hoạt Hình</option>
                  <option value="Hài" >Hài</option>
                  <option value="Gia Đình" selected>Gia Đình</option>
                  @endif
                </select>
                <br />
              </div>
              <div class="col-md-8 mb-3">

                <label for="inputState">Tên Tiếng Anh</label>
                <input type="text" name="tentienganh" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="{{$detail->tentienganh}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-4 select-outline">

                <label for="inputState">Quốc Gia</label>
                <select class="form-control" name="quocgia">
                    @if($detail->quocgia=="Việt Nam")
                  <option value="Việt Nam" selected>Việt Nam</option>
                  <option value="Hàn Quốc">Hàn Quốc</option>
                  <option value="Mỹ">Mỹ</option>
                  <option value="Nhật Bản">Nhật Bản</option>
                  <option value="Anh">Anh</option>
                  @elseif($detail->quocgia=="Hàn Quốc")
                  <option value="Việt Nam" >Việt Nam</option>
                  <option value="Hàn Quốc" selected>Hàn Quốc</option>
                  <option value="Mỹ">Mỹ</option>
                  <option value="Nhật Bản">Nhật Bản</option>
                  <option value="Anh">Anh</option>
                  @elseif($detail->quocgia=="Mỹ")
                  <option value="Việt Nam" >Việt Nam</option>
                  <option value="Hàn Quốc" >Hàn Quốc</option>
                  <option value="Mỹ" selected>Mỹ</option>
                  <option value="Nhật Bản">Nhật Bản</option>
                  <option value="Anh">Anh</option>
                  @elseif($detail->quocgia=="Nhật Bản")
                  <option value="Việt Nam" >Việt Nam</option>
                  <option value="Hàn Quốc" >Hàn Quốc</option>
                  <option value="Mỹ" >Mỹ</option>
                  <option value="Nhật Bản" selected>Nhật Bản</option>
                  <option value="Anh">Anh</option>
                  @elseif($detail->quocgia=="Anh")
                  <option value="Việt Nam" >Việt Nam</option>
                  <option value="Hàn Quốc" >Hàn Quốc</option>
                  <option value="Mỹ" >Mỹ</option>
                  <option value="Nhật Bản" >Nhật Bản</option>
                  <option value="Anh" selected>Anh</option>
                  @endif
                </select>
                <br />
              </div>
              <div class="col-md-9 mb-3">
                <i class="metismenu-icon pe-7s-cloud-upload"></i>
                <label for="inputState">Chọn File</label>
                <input type="file" name="image" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="Chọn Ảnh">
                
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
                <label for="inputState">Nhà Sản Xuất</label>
                <input type="text" name="nsx" class="form-control" id="validationCustom01" placeholder="Tên Tiếng Anh" value="{{$detail->nsx}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
                <label for="inputState">Đạo Diễn</label>
                <input type="text" name="daodien" class="form-control" id="validationCustom01" placeholder="Tên Đạo Diễn" value="{{$detail->daodien}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />

                <label for="inputState">Nhập Danh Sách Diễn Chính</label>
                <input type="text" name="dienvien" class="form-control" id="validationCustom01" placeholder="Tên Diễn Viên" value="{{$detail->dienvien}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-3 mb-3">

              
               
                <img width="250" height="250" class="img-fluid img-thumbnail" src="{{asset('public/uploads/phim/'.$detail->image)}}" alt="">
                
                <br />
              </div>
             
              <div class="col-md-12 mb-3">

                <label for="inputState">Nội Dung </label>
                <textarea name="noidung"  class="form-control"  rows="6" cols="80" required placeholder="Mỗ Tả Phim">{{$detail->noidung}}</textarea>

                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-6 mb-3">
                <label for="inputState">Ngày Chiếu</label>
                <input type="date" name="ngaykhoichieu" class="form-control" id="validationCustom01" placeholder="" value="{{$detail->ngaykhoichieu}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <br />
              </div>
              <div class="col-md-6 mb-3">

                <label for="inputState">Trạng Thái</label>
                <select class="form-control" name="trangthai">
                    @if($detail->trangthai==1)
                  <option value="1" selected>Đang Chiếu</option>
                  <option value="0">Sắp Chiếu</option>
                  @else
                  <option value="1" >Đang Chiếu</option>
                  <option value="0" selected>Sắp Chiếu</option>
                    @endif

                </select>
                <br />
            </div>
            <div class="col-md-5 mb-3">

              <label for="inputState">Thời Lượng</label>
                <input type="number" minlength="2" maxlength="3" name="thoiluong" class="form-control" id="validationCustom01" placeholder="" value="{{$detail->thoiluong}}" required>
              <br />
          </div>
        <div class="col-md-12 mb-3">

          <label for="inputState">Trailer</label>
          <input type="url" name="trailer" class="form-control" id="validationCustom01" placeholder="Nhập Link Trailer" value="{{$detail->trailer}}" required>
          <br />
      </div>
      @php
       $error=Session::get('error');   
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
