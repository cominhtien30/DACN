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

                    {{-- <div class="page-title-actions">
                        <form action="{{ url('admin-add-phim') }}" method="get">

                            <button type="submit" title="Example Tooltip" class="btn-shadow mr-3 btn btn-primary">
                                <i class="fas fa-plus"></i>
                                Thêm Phim
                            </button>
                        </form>


                    </div> --}}

                </div>

            </div>
            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">


                <form action="{{ url('admin-list-phim') }}" method="get">
                    <li class="nav-item">

                        {{-- <div class="search-wrapper">
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
        </button>
      </div>
     
    </div> --}}



                    </li>

                </form>


                {{-- @endforeach --}}

            </ul>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table class="mb-0 table table-hover " id="dsphim">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên Phim</th>

                                        <th style="width: 100px">Khởi Chiếu</th>
                                        <th>Nội Dung</th>
                                        <th>Ảnh</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                 
                                    @for ($i; $i < $countpage; $i++)
                                        <tr>
                                            <th scope="row">{{ $stt++ }}</th>
                                            <td>{{ substr($list_populars[$i]->title, 0, 22) }}...</td>
                                            <td>{{ $list_populars[$i]->release_date }}</td>
                                            <td><textarea disabled name="" id="" cols="50"
                                                    rows="4">{{ $list_populars[$i]->overview }}</textarea>
                                            </td>
                                            <td><img width="80px"
                                                    src="https://image.tmdb.org/t/p/original{{ $list_populars[$i]->poster_path }}"
                                                    alt="ảnh"></td>
                                                    
                                            <td>
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        var id_phim="<?php echo $list_populars[$i]->id ?>";
                                                        $('#check-'+id_phim).hide();
                                                    });
                                                     </script>
                                                @foreach ($list_bug as $check)
                                                    @if ($list_populars[$i]->title == $check->tenphim)
                                                    <script type="text/javascript">
                                                     $(document).ready(function(){
                                                        var id_phimCheck="<?php echo $list_populars[$i]->id ?>";
                                                        $('#check-'+id_phimCheck).show();
                                                        $('#insert-'+id_phimCheck).hide();
                                                     });
                                                    </script>
                                                    @endif
                                                @endforeach
                                                <button class="btn btn-success checked" 
                                                    id="check-{{ $list_populars[$i]->id }}"><i class="fas fa-check"></i>
                                                    Đã
                                                    Thêm</button>
                                                <button class="btn btn-warning" id="insert-{{ $list_populars[$i]->id }}"
                                                    onclick="insert({{ $list_populars[$i]->id }})">Thêm</button>

                                            </td>

                                        </tr>
                                    @endfor
                                </tbody>

                            </table>

                            <script>
                                // function xacnhan(){


                                //   window.confirm("Bạn có chắc xóa");
                                // }
                                // 

                            </script>
   <script type="text/javascript">
    // $('.checked').hide();
        function insert(id) {
            var url = '{{ route('admin-add-phim-online') }}';
            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    id: id,
                },
                //dataType: 'JSON',
                success: function(response) {
                    // alert(response)
                    $('#check-' + response).show();
                    $('#insert-' + response).hide();
                }
            });
        }

    </script>
                         


                        </div>
                    </div>
                    <ul class="pagination">
                        <li class="">
                            @if (isset($_GET['page']))
                                <a href="./admin-list-phimonline?page={{ $_GET['page'] - 1 }}">Previous</a>
                            @else
                                <a href="./admin-list-phimonline">Previous</a>
                            @endif
                        </li>
                        <li class="">
                            @if (isset($_GET['page']))
                                <a href="./admin-list-phimonline?page={{ $_GET['page'] + 1 }}">Next</a>
                            @else
                                <a href="./admin-list-phimonline?page=2">Next</a>
                            @endif
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    @endsection
