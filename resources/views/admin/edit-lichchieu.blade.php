@extends('admin.layout');
@section('content');

<div class="app-main__outer">
	                    <div class="app-main__inner">
	                        <div class="app-page-title">
	                            <div class="page-title-wrapper">
	                                <div class="page-title-heading">
	                                    <div class="page-title-icon">
	                                        <i class="pe-7s-graph text-success">
	                                        </i>
	                                    </div>
	                                    <div>Chỉnh Sửa Lịch Phim
	                                        <div class="page-title-subheading">Đổi lịch phim theo rạp, bạn có thể chỉnh sửa thông tin 
                                                và thay đổi phòng
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="page-title-actions">
                                        <?php $error=Session::get('error'); ?>
                        
	                                </div>    </div>
	                        </div>

	                             <div class="main-card mb-3 card">
                                    @if(isset($error))
                                    <div class="alert alert-danger">
                                    <strong>Error!</strong> {{$error }}
                                  </div>
                                    @endif
                                    <?php Session::forget('error'); ?>
	                            <div class="card-body">
	                                <h5 class="card-title">Chỉnh Sửa Lịch</h5>
                                <form class="needs-validation" novalidate action="{{route('admin-edit-lich',$detail->id)}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                      <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Ngày</label>
                                      <input type="date" name="ngay" class="form-control" id="validationCustom01"  value="{{$detail->ngay}}"   required>
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Giờ</label>
                                        <select name="gio" id="" class="form-control">
                                            <option selected  value="{{$detail->gio}}">{{substr($detail->gio,0,5)}}</option>
                                            <option  value="8:00"> 8:00</option>
                                            <option  value="11:30"> 11:30</option>
                                            <option  value="14:30"> 14:30</option>
                                            <option  value="18:00"> 18:00</option>
                                            <option  value="21:00"> 21:00</option>
                                        </select>
                                        
                                        <div class="valid-feedback">
                                          Looks good!
                                        </div>
                                      </div>
                                      <div class="col-md-6 select-outline">
                        
                                        <label for="inputState">Chọn Phim</label>
                                        <select class="form-control" name="phim">
                                        
                                          <option selected  value="{{$detail->id_phim}}">{{$detail->tenphim}}</option>
                                         
                                            @foreach($list_phim as $item)
                                        <option value="{{$item->id}}">{{$item->tenphim}}</option>
                                            @endforeach
                                        </select>
                                        <br />
                                      </div>
                                      <div class="col-md-6 select-outline">
                        
                                        <label for="inputState">Chọn Rạp</label>
                                        <input type="text" disabled readonly name="" class="form-control" id="validationCustom01"  value="{{$detail->tenrap}}" required>
                                        
                                        <br />
                                      </div>
                                      <div class="col-md-6 select-outline">
                        
                                        <label for="inputState">Chọn Phòng</label>
                                        <select class="form-control" name="phong">
                                        
                                          <option selected  value="{{$detail->id_phong}}">{{$detail->tenphong}}</option>
                                          @foreach($list_room as $item)
                                        <option  value="{{$item->id}}">{{$item->tenphong}}</option>
                                          @endforeach
                                        </select>
                                        <br />
                                      </div>
                        
                                      <div class="col-md-12 select-outline">
                        
                                      </div>
                                    <button class="btn btn-success" type="submit">Cập Nhật</button>
                                  </form>

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

	                    </div>

@endsection
