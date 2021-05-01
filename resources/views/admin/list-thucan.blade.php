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
        
        <div>Danh thức ăn và combo
          <div class="page-title-subheading">Tables are the backbone of almost all web applications.
          </div>
        </div>
      </div>
      
      <div class="page-title-actions">
        <form action="{{url('admin-add-thucan')}}" method="get">
         
        <button type="submit" title="Example Tooltip"  class="btn-shadow mr-3 btn btn-primary">
          <i class="fas fa-plus"></i>
          Thêm Thức Ăn     
        {{-- <a class="text-info" href="{{url('admin-add-phim')}}">Thêm Phim  <i class="fas fa-plus"></i></a> --}}
        </button>
      </form>
      

</div>

</div>

</div>

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
            <th>Tên </th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          
        @foreach($list as $item)
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->ten}}</td>
            <td><img width="42" src="{{asset('public/uploads/thucan/'.$item->image)}}" alt=""></td>
            <td>{{$item->gia}}.000 K</td>
             <td><a onclick="xacnhan()" href="{{route('admin-delete-thucan',$item->id)}}"><i class="fas fa-trash" ></i></a>  ||  <a href="{{route('admin-detail-thucan',$item->id)}}"><i class="fas fa-edit"></i></a> </td>
           
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
              if($(this).val()==null){
                key='';
              }
              $.ajax({url: "http://localhost:81/dacn_cinema/ajax/admin-search-phim/"+key, success: function(result){
                              $('#dsphim').html(result);
                            // alert (result);
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
