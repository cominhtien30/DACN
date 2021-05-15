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
        
        <div>Danh Sách Phim
          <div class="page-title-subheading">Tables are the backbone of almost all web applications.
          </div>
        </div>
      </div>
      
      <div class="page-title-actions">
        <form action="{{url('admin-add-phim')}}" method="get">
         
        <button type="submit" title="Example Tooltip"  class="btn-shadow mr-3 btn btn-primary">
          <i class="fas fa-plus"></i>
          Thêm Phim        
        {{-- <a class="text-info" href="{{url('admin-add-phim')}}">Thêm Phim  <i class="fas fa-plus"></i></a> --}}
        </button>
      </form>
      

</div>

</div>

</div>
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            
                             
  <form action="{{url('admin-list-phim')}}" method="get" >              
  <li class="nav-item">
  
    <div class="search-wrapper">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          
          <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-search"></i></span>
        </div>
        <input id="search-phim" type="text" class="form-control" placeholder="Nhập Tên Phim" aria-describedby="inputGroup-sizing-sm" style="width: 250px">
        &nbsp;
        &nbsp;
        
        <button style="width: 100px" type="submit" title="Example Tooltip"  class="btn-shadow mr-3 btn btn-primary form-control">
          <i class="fas fa-sync"></i>
          Làm Mới    
        {{-- <a class="text-info" href="{{url('admin-add-phim')}}">Thêm Phim  <i class="fas fa-plus"></i></a> --}}
        </button>
      </div>
     
    </div>
    
    
    
  </li>
  
</form> 
    &nbsp;
    &nbsp;
    &nbsp;
    
     {{-- @endforeach --}}
   
</ul>
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

    <div class="card-body">
      <table class="mb-0 table table-hover " id="dsphim">
        <thead class="thead-light">
          <tr>
            <th>Stt</th>
            <th>Tên Phim</th>
            <th>Đạo Diễn</th>
            <th>Diễn Viên</th>
            <th>Thời Lượng</th>
            <th>Ngày Khởi Chiếu</th>
            <th>Trạng Thái</th>
            <th>Nội Dung</th>
            <th>Ảnh</th>
            <th style="width:80px">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $item)

          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->tenphim}}</td>
            <td>{{$item->daodien}}</td>
            <td>{{ substr($item->dienvien, 0, 20)."..." }}</td>
            <td>{{$item->thoiluong}}</td>
            <td>{{$item->ngaykhoichieu}}</td>
            @if($item->trangthai==0)
            <td>Sắp Khởi Chiếu</td>
            @else
            <td>Đang Khởi Chiếu</td>
            @endif
          <td>{{ substr($item->noidung, 0, 25 )."..."}} </td>
          @if($item->type=="Off")
          <td><img width="42" src="{{asset('public/uploads/phim/'.$item->image)}}" alt=""></td>
          @else
          <td><img width="42" src="{{asset('https://image.tmdb.org/t/p/original'.$item->image)}}" alt=""></td>
          @endif
            <td><a onclick="xacnhan()" href="{{route('admin-delete-phim',$item->id)}}"><i class="fas fa-trash" ></i></a>  ||  <a href="{{route('admin-detail-phim',$item->id)}}"><i class="fas fa-edit"></i></a> </td>
           
          </tr>
          @endforeach
        </tbody>
        
      </table>
      
      <script>
        function xacnhan(){


          window.confirm("Bạn có chắc xóa");
        }
        </script>
       
         <script type="text/javascript">
          $(document).ready(function(){
          $('#search-phim').on('keyup',function(){
              var key = $(this).val();
              var url="{{route('admin-find-phim')}}";
              if($(this).val()==null){
                key='';
              }
              // $.ajax({url: "http://localhost:81/DACN/ajax/admin-find-phim/"+key, success: function(result){
              //                 $('#dsphim').html(result);
              //               // alert (result);
              //               }
              //               });

                            $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    key:key,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                      $('#dsphim').html(response);

                                    }
                                        });              
                      
          });
          });
         
      </script>
      
     
    </div>
  </div>
</div>
{{ $list->links() }}
</div>
</div>

@endsection
