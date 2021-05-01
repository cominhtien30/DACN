  @extends('admin.layout')
  @section('content')
  
  <div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div class="page-title-icon">
            <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
            </i>
          </div>
          
          <div>Danh Thành Viên
            <div class="page-title-subheading">Danh Sách Thành Viên.
            </div>
          </div>
        </div>
        {{-- <div class="page-title-actions">

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
          </button>





        </div> --}}
  </div>
  </div>
  <div class="row">

  <div class="col-lg-12">
    
      
    
    <?php $message = Session::get('success'); 
          $warning = Session::get('warning');
          $error=Session::get('error');
    ?>
    @if(isset($message))
    <div class="alert alert-success">
    <strong>Success!</strong> {{$message }}
    </div>
    <?php Session::forget('success'); ?>
    @elseif(isset($warning))
    <div class="alert alert-warning">
      <strong>Warning!</strong> {!!$warning !!}
    </div>
      <?php Session::forget('warning'); ?>
    @endif

    
    
    <div class="main-card mb-3 card">

      <div class="card-body"><h5 class="card-title">Danh Sách</h5>
        <table class="mb-0 table table-hover " style="width: 100%">
          <thead class="thead-light" >
            <tr>
              <th style="width: 5%">Stt</th>
              <th style="width: 5%">Tên Thành Viên</th>
              <th style="width: 5%">email</th>
              <th style="width: 5%">Chức Vụ</th>
              <th style="width: 20%">Sửa</th>
              <th style="width: 30%">Ủy Quyền</th>
              
              <th style="width: 20%">Reset Pass</th>
              <th style="width: 15%">Xóa Account</th>
            </tr>
          </thead>
          <tbody>
            @foreach($list as $item)

            <tr>
              <th scope="row" width="5%">{{$i++}}</th>
              <form action="{{route('admin-update-name-user',$item->id)}}" method="POST">
                @csrf
                <td style="width: 5%"><input type="text" name="name"  value="{{$item->name}}"></td>
                <td style="width: 5%"><input type="text" disabled value="{{$item->email}}"></td>
                @if($item->level==0)
                <td style="width: 5%"><input type="text" disabled  value="Quản Lý"></td>
                @elseif($item->level==1)
                <td style="width: 5%"><input type="text" disabled value="Nhân Viên"></td>
                @else
                <td style="width: 5%"><input type="text" disabled  value="Khách Hàng"></td>
                @endif
               
                <td style="width: 20%">
              
                <button type="submit" class="btn btn-success">Sửa Tên</button>
              </form>
              </td>
              <td style="width: 50%">
                  
                <form action="{{route('admin-update-level-user',$item->id)}}" method="post">
                  <button type="submit" class="btn btn-warning">Ủy Quyền</button>
                  @csrf
                  
                 
                  <select class="" name="level" class="">
                  @if($item->level==0)
                  <option value="1">Nhân Viên</option>
                  <option value="2">Khách</option>
                  @elseif($item->level==1)
                  <option value="0">Quản Lý</option>
                  <option value="2">Khách</option>
                  @else
                  <option value="0">Quản Lý</option>
                  <option value="1">Nhân Viên</option>
                  @endif
                  </select>
              </form>
            </td>
            <td style="width: 30%" >
              <form action="{{route('admin-resetpass',$item->id)}}" method="get">
              @csrf
                <button type="submit" class="btn btn-info">ResetPass</button>
              </form>
            </td>
            
              <td style="width: 15%">
                <form action="{{route('admin-delete-user',$item->id)}}" method="get">
                  @csrf
                <button type="submit" onclick="xacnhan()" class="btn btn-danger">Xóa </button>
              </form>
              </td>
           
              <script>
              function xacnhan(){


                window.confirm("Bạn có chắc xóa");
              }
              </script>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
{{$list->Links()}}

  </div>
  @if(isset($error))
    <div class="alert alert-danger">
    <strong>Lỗi!</strong> {{$error }}
    </div>
  @endif
    <?php Session::forget('error'); ?>
  <div class="card-body"><h5 class="card-title"><h5>Thêm Người Dùng</h5>
    <table class="mb-0 table table-hover ">
      <thead class="thead-light">
        <tr>
          <th>Tên Nhân Viên</th>
          <th>Email</th>
          <th>Mật Khẩu</th>
          <th>Chức Vụ</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <form action="{{route('admin-add-user')}}" method="POST">
            @csrf
            <td><input class="form-control" type="text" name="name" required  value="" placeholder="nhập tên nhân viên"></td>
            <td><input class="form-control" type="email" name="email" required  value="" placeholder="nhập Email"></td>
            <td><input class="form-control" type="password" name="password"  required value="" placeholder="Nhập Mật Khẩu"></td>
            <td>
                <select name="level" class="form-control" data-style="btn-warning" >
                    <option value="0">Quản Lý</option>
                    <option value="1">Nhân Viên</option>
                </select>
            </td>
            <td><button type="submit" class="btn btn-success">Thêm Tài Khoản</button> </td>
          </form>
        </tr>
        
      </tbody>
    </table>
    
  </div>
  </div>
  
  @endsection
  