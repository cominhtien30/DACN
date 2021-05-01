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
          <div>Danh Sách Rạp
            <div class="page-title-subheading">Tables are the backbone of almost all web applications.
            </div>
          </div>
        </div>
        
  </div>
  </div>
  <div class="row">

  <div class="col-lg-12">
    <?php $message = Session::get('success'); ?>
    @if(isset($message))
    <div class="alert alert-success">
    <strong>Success!</strong> {{$message }}
  </div>
    @endif
    <?php Session::forget('success'); ?>
    <div class="main-card mb-3 card">

      <div class="card-body"><h5 class="card-title"><h5>Danh Sách Rạp</h5>
        <table class="mb-0 table table-hover ">
          <thead class="thead-light">
            <tr>
              <th>Stt</th>
              <th>Tên Rạp</th>
              <th>Thông Tin</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            @foreach($list as $item)

            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$item->tenrap}}</td>
              <td>{{$item->thongtin}}</td>
              <td><a onclick="xacnhan()" href="{{route('admin-delete-rap',$item->id)}}"><i class="fas fa-trash" ></i></a>  ||  <a href="{{route('admin-detail-rap',$item->id)}}"><i class="fas fa-edit"></i></a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
      </div>
      <div class="card-body"><h5 class="card-title"><h5>Thêm rạp</h5>
        <table class="mb-0 table table-hover ">
          <thead class="thead-light">
            <tr>
              <th>Tên Rạp</th>
              <th>Thông Tin</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <form action="{{route('admin-add-rap')}}" method="POST">
                @csrf
                <td><input type="text" name="tenrap"  value="" placeholder="nhập tên rạp"></td>
                <td><input type="text" name="thongtin"  value="" placeholder="nhập thông tin"></td>
                <td><button type="submit" class="btn btn-success">Thêm Rạp</button> </td>
              </form>
            </tr>
            
          </tbody>
        </table>
        
      </div>
    </div>
  </div>

  </div>
  </div>
  <script>
    function xacnhan(){


      window.confirm("Baạn có chắc xóa");
    }
    </script>
  @endsection
