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
          <div>Thêm Phòng
            <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
            </div>
          </div>
        </div>
        <div class="page-title-actions">


        </div>    </div>
      </div>

      <div class="main-card mb-3 card">
        <div class="card-body">

          <form class="needs-validation" novalidate action="{{route('admin-add-room')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Tên Phòng</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Tên Rạp" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 select-outline">

                <label for="inputState">Chọn Rạp</label>
                <select class="form-control" name="rap">

                  @foreach($list as $item)
                  <option value="{{$item->id}}">{{$item->tenrap}}</option>
                  @endforeach
                </select>
                <br />
              </div>

              <div class="col-md-3 mb-3">

              



              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
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
    <!-- <div class="main-card mb-3 card">
    <div class="card-body">
    <h5 class="card-title">Tooltips Validation</h5>
    <form class="needs-validation" novalidate>
    <div class="form-row">
    <div class="col-md-4 mb-3">
    <label for="validationTooltip01">First name</label>
    <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
    <div class="valid-tooltip">
    Looks good!
  </div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltip02">Last name</label>
<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
<div class="valid-tooltip">
Looks good!
</div>
</div>
<div class="col-md-4 mb-3">
<label for="validationTooltipUsername">Username</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
</div>
<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
<div class="invalid-tooltip">
Please choose a unique and valid username.
</div>
</div>
</div>
</div>
<div class="form-row">
<div class="col-md-6 mb-3">
<label for="validationTooltip03">City</label>
<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
<div class="invalid-tooltip">
Please provide a valid city.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip04">State</label>
<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
<div class="invalid-tooltip">
Please provide a valid state.
</div>
</div>
<div class="col-md-3 mb-3">
<label for="validationTooltip05">Zip</label>
<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
<div class="invalid-tooltip">
Please provide a valid zip.
</div>
</div>
</div>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div> -->
</div>

@endsection
