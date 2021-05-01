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
                                    <div>Danh Sách Lịch Chiếu
                                        <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                     
                                        <form action="{{url('add-lich')}}" method="get">
                                          @csrf
                                        <button type="submit" title="Example Tooltip"  class="btn-shadow mr-3 btn btn-primary">
                                          <i class="fas fa-plus"></i>
                                          Thêm Lịch
                                        </button>
                                      </form>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                          {{-- @foreach($list_rap as $item)  --}}
                          <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            
                             
                          
                          <li class="nav-item">
                          
                            <div class="search-wrapper">
                                <div class="form-control">
                                    <i class="fas fa-search"></i>
                                    <span>Tìm Kiếm :</span>
                                </div>

                            </div>
                            
                          </li>
                            <li class="nav-item">
                                <select name="" class="form-control" id="rap">
                                    <option value="">--Chọn Rạp--</option>
                                    @foreach($list_rap as $item)
                                <option value="{{$item->id}}">{{$item->tenrap}}</option>
                                    @endforeach
                                </select>
                                
                            </li>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <li class="nav-item">
                                <select name="" class="form-control" id="dsroom">
                                    <option value="">--Chọn Phòng--</option>
                                </select>
                                
                            </li>
                             {{-- @endforeach --}}
                           
                        </ul>
                    </ul>
                        <?php $message = Session::get('success'); 
                                
                            ?>
                        @if(isset($message))
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{$message }}
                      </div>
                        @endif
                        <?php Session::forget('success'); ?>
                        
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="card-body">
                                    <table class="mb-0 table table-hover" id="dslichchieu">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Stt</th>
                                          <th>Ngày</th>
                                          <th>Giờ</th>
                                          <th>Tên Phim</th>
                                          <th>Rạp</th>
                                          <th>Phòng</th>
                                          <th>Thao Tác</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                                        @foreach($list_lich as $item)
                                        <tr>
                                         
                                          <th scope="row">{{$i++}}</th>
                                        <td>{{$item->ngay}}</td>
                                          <td>@php echo substr($item->gio, 0, 5) @endphp</td>
                                          <td>{{$item->tenphim}}</td>
                                          <td>{{$item->tenrap}}</td>
                                          <td>{{$item->tenphong}}</td>
                                        <td><a onclick="xacnhan()" href="{{url('delete-lich/'.$item->id.'')}}"><i class="fas fa-trash" ></i></a>  ||  <a href="{{url('detail-lich/'.$item->id.'')}}"><i class="fas fa-edit"></i></a> </td>
                                         
                                        </tr>
                                        @endforeach
                                      </tbody>

                                    </table>
                                    
                                  </div>
                            </div>
                            {{ $list_lich->links() }}
                        </div>
                    </div>
                    <script>
                      function xacnhan(){
          
          
                        window.confirm("Bạn có chắc chắn");
                      }
                      </script>
                      
                      <script>
                          $(document).ready(function(){
                          
                          $("#rap").change(function(){
                            
                             var idrap=$(this).val();
                             var url="{{route('admin-find-lich-by-rap')}}";
                            //  $.ajax({url: "http://localhost:81/DACN/ajax/admin-find-lich-by-rap/"+idrap, success: function(result){
                            //     $('#dslichchieu').html(result);
                            //    //alert (result);
                            //   }
                            //   });
                              $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                        $('#dslichchieu').html(response);

                                    }
                                        });  
                        
                          });
                      });
                      </script>
                      <script>
                        $(document).ready(function(){
                        
                        $("#dsroom").change(function(){
                          
                           var idroom=$(this).val();
                           var url="{{route('admin-find-lich-by-room')}}";
                        //    $.ajax({url: "http://localhost:81/DACN/ajax/admin-find-lich-by-room/"+idroom, success: function(result){
                        //       $('#dslichchieu').html(result);
                        //      //alert (result);
                        //     }
                        //     });
                        $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idroom,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                        $('#dslichchieu').html(response);

                                    }
                                        });  
                        });
                    });
                    </script>
                      <script>
                        $(document).ready(function(){
                          
                            $("#rap").change(function(){
                              
                               var idroom=$(this).val();
                               var url="{{route('admin-list-room-ghe')}}";
                            //    $.ajax({url: "http://localhost:81/DACN/ajax/admin-list-room-ghe/"+idroom, success: function(result){
                            //       $('#dsroom').html(result);
                            //      //alert (result);
                            //     }
                            //     });
                                $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idroom,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                        $('#dsroom').html(response);

                                    }
                                        });  
                          
                            });
                        });
                       

                    </script>
                      

@endsection