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
                    <div>Thêm Lịch Phim
                        <div class="page-title-subheading">Vui lòng chọn rạp và sau đó nhập thông tin.
                        </div>
                        
                    </div>
                    
                    
                </div>
                
                    </div>
                    

                    
        </div>        
       
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header"><i class="header-icon lnr-gift icon-gradient bg-grow-early"> </i>
                                <div class="btn-actions-pane-left">
                                    <div class="nav" id="rap">
                                        @foreach($list_rap as $item)
                                        <button style="border: none; width:250px;" value="{{$item->id}}" class="btn btn-outline-primary">
                                       
                                        <a data-toggle="tab" role="tab" href="#tab-eg4-0" class="border-0 btn-pill btn-wide btn-transition  btn btn-outline-primary "><i class="fas fa-person-booth"></i> &nbsp&nbsp   &nbsp <strong>Lịch Rạp Bug {{$item->tenrap}}</strong><span></span></a>
                                          </button>
                                          &nbsp&nbsp&nbsp&nbsp
                                        @endforeach
                                        
                                    
                                   
                                   
                                </div>
                                
                                </div>
                                
                                
                            </div>
                            @php
                                    $error=Session::get('error');
                                @endphp
                                @if(isset($error))
                                <div class="alert alert-danger">
                                <strong>Error!</strong> {{$error }}
                              </div>
                                @endif
                                <?php Session::forget('error'); ?>
                            
                           
                                
                                 
                            <div class="card-body">
                                
                              
                               
                                    
                            </div>
                              
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title">
                                    <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                                    Header Alternate Tabs
                                </div>
                                <ul class="nav">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-2" class="nav-link">Tab 3</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg5-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg5-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg5-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                            <div class="d-block text-right card-footer">
                                <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-header"><i class="header-icon lnr-gift icon-gradient bg-grow-early"> </i>Header Tabs Standard Buttons
                                <div class="btn-actions-pane-right">
                                    <div class="nav">
                                        <a data-toggle="tab" href="#tab-eg6-0" class="border-0 btn-transition active btn btn-outline-primary">Tab 1</a>
                                        <a data-toggle="tab" href="#tab-eg6-1" class="mr-1 ml-1 border-0 btn-transition  btn btn-outline-primary">Tab 2</a>
                                        <a data-toggle="tab" href="#tab-eg6-2" class="border-0 btn-transition  btn btn-outline-primary">Tab 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg6-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg6-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg6-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                            <div class="d-block text-right card-footer">
                                <a href="javascript:void(0);" class="btn-wide btn btn-success">Save</a>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="card-header">
                                <ul class="nav nav-justified">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Tab 3</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg7-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg7-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg7-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
           
        </div>
    </div>
    <script>
        $(document).ready(function(){
          
            $('#rap button').click(function(){
              
               var idrap=$(this).val();
                $('#rap button a').removeClass('active');
                var url="{{route('admin-get-form-bugsg')}}";
                //$(this).addClass('active');
                //    $.ajax({url: "http://localhost:81/DACN/ajax/admin-get-form-bugsg/"+idrap, success: function(result){
                //      $('.card-body').html(result);
                //     // alert(result);
                //     }
                //     });
                    $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                        $('.card-body').html(response);

                                    }
                                        }); 
          
            });
        });
       

    </script>
        <script>
            $(document).ready(function(){
                   var idrap=$('#rap button ').first().val();
                    $('#rap button a').first().addClass('active');
                    var url="{{route('admin-get-form-bugsg')}}";
                    //$(this).addClass('active');
                    $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                        $('.card-body').html(response);

                                    }
                                        }); 
              
                
            });
           
    
        </script>

@endsection