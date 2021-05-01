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
	                                    <div>Edit Rạp
	                                        <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="page-title-actions">

	                                </div>    </div>
	                        </div>

	                             <div class="main-card mb-3 card">
	                            <div class="card-body">
	                                <h5 class="card-title">Chỉnh Sửa Rap</h5>
	                                <form class="needs-validation" novalidate action="{{route('admin-update-rap',$detail->id)}}" method="post">
                                    @csrf
	                                    <div class="form-row">
	                                        <div class="col-md-4 mb-3">
	                                            <label for="validationCustom01">Tên Rạp</label>
	                                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Tên Rạp" value="{{$detail->tenrap}}" required>
	                                            <div class="valid-feedback">
	                                                Looks good!
	                                            </div>
	                                        </div>
	                                        <div class="col-md-4 mb-3">
	                                            <label for="validationCustom02">Last name</label>
	                                            <input type="text" name="thongtin" class="form-control" id="validationCustom02" placeholder="Thông Tin" value="{{$detail->thongtin}}" required>
	                                            <div class="valid-feedback">
	                                                Looks good!
	                                            </div>
	                                        </div>

	                                    </div>

                                      <div class="form-row">

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

@endsection
