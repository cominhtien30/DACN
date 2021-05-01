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
                                    <div>Danh Sách Phòng
                                        <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                     
                                        <form action="{{route('admin-room-add')}}" method="get">
                                          
                                        <button type="submit" title="Example Tooltip"  class="btn-shadow mr-3 btn btn-primary">
                                          <i class="fas fa-plus"></i>
                                          Thêm Phòng
                                          
                                       
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
                        </div>            
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                          <div id="id-first" hidden>{{$list_rap[0]->id}}</div>
                          @foreach($list_rap as $item)
                            <li class="nav-item">
                            <a role="tab" class="nav-link "  id="{{$item->id}}" data-toggle="tab" >
                                    {{-- <p hidden class="idrap"></p> --}}
                                    
                                    <span >{{$item->tenrap}}</span>
                            </a>
                            </li>
                            @endforeach
                           
                        </ul>
                        <?php $message = Session::get('success'); ?>
                        @if(isset($message))
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{$message }}
                      </div>
                        @endif
                        <?php Session::forget('success'); ?>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="card-body" id="dsroom">
                                    {{-- <table class="mb-0 table table-hover ">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Stt</th>
                                          <th>Tên Phòng</th>
                                          <th>Rạp</th>
                                          <th>Thao Tác</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                              
                                        <tr>
                                          <th scope="row"></th>
                                          <td>sdasdasd</td>
                                          <td></td>
                                          <td><a onclick="xacnhan()" href=""><i class="fas fa-trash" ></i></a>  ||  <a href=""><i class="fas fa-edit"></i></a> </td>
                                          
                                        </tr>
                                       
                                      </tbody>
                                    </table> --}}
                                    
                                  </div>
                            </div>
                            
                        </div>
                    </div>
                    <script>
                      function xacnhan(){
          
          
                        window.confirm("Bạn có chắc chắn");
                      }
                      </script>
                      
                      <script>
                          $(document).ready(function(){
                            
                              $('.nav-item a ').click(function(){
                                
                                 var idrap=$(this).attr("id");
                                // alert(idrap)
                                 var url="{{route('find-admin-list-room')}}";
                                 $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                                    //alert(response);
                                    $('#dsroom').html(response);
                                  // alert(response)

                                    }
                                        });
                            
                              });
                          });
                         

                      </script>
                      <script>
                        $(document).ready(function(){
                            
                            $('#rap').first().addClass('active');
          
                                // var idrap=$('#rap').first().text();
                                var idrap=$('#id-first').text();
                                //alert(idrap)
                                var url="{{route('find-admin-list-room')}}";
                              //  $.ajax({url: "http://localhost:81/DACN/ajax/admin-list-room/"+idrap, success: function(result){
                              //     $('#dsroom').html(result);
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
                                    //alert(response);
                                    $('#dsroom').html(response);

                                    }
                                        });



                            
                        });
                      </script>
                      {{-- <script>
                         $(document).ready(function(){
                              $('.pagination a').click(function(){
                                  event.preventDefault();
                                  var page=$(this).attr('href').split('page=')[1];
                                  fetch_data(page);
                              });
                            
                        });
                        function fetch_data(page){
                          $.ajax({
                            url:"http://localhost:81/dacn_cinema/admin-list-room/"+idrap+"?page="+page
                            success:function(data){
                              $('#dsroom').html(result);
                            }
                          });
                        }
                      </script> --}}
                     
                      

@endsection