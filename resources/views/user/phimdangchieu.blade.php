@extends('user.layout')
@section('body')
<

<!-- Main content -->
<section class="container">
    <div class="col-sm-12">
        <h2 class="page-heading">PHIM ĐANG CHIẾU</h2>
        
        <div class="select-area">
            

            <div class="datepicker">
              <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
              <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
            </div>

            <form class="select select--cinema" method='get'>
                  <select name="select_item" class="select__sort" tabindex="0">
                    <option value="1" selected='selected'>Cineworld</option>
                    <option value="2">Empire</option>
                    <option value="3">Everyman</option>
                    <option value="4">Odeon</option>
                    <option value="5">Picturehouse</option>
                </select>
            </form>

            <form class="select select--film-category" method='get'>
                  <select name="select_item" class="select__sort" tabindex="0">
                    <option value="2" selected='selected'>Children's</option>
                    <option value="3">Comedy</option>
                    <option value="4">Drama</option>
                    <option value="5">Fantasy</option>
                    <option value="6">Horror</option>
                    <option value="7">Thriller</option>
                </select>
            </form>

        </div>

         <div class="tags-area">
            <div class="tags tags--unmarked">
                <span class="tags__label">Sorted by:</span>
                    <ul>
                        <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>all</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item" data-filter='release'>release date</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item" data-filter='popularity'>popularity</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item" data-filter='comments'>comments</a></li>
                        <li class="item-wrap"><a href="#" class="tags__item" data-filter='ending'>ending soon</a></li>
                    </ul>
            </div>
        </div>
        @foreach ($list_dangchieu as $item)
            
        
        <!-- Movie preview item -->
        <div class="movie movie--preview movie--full release">
             <div class="col-sm-3 col-md-2 col-lg-2">
                    <div class="movie__images">
                        @if($item->type=="Off")
                        <img alt='' src="{{asset('public/uploads/phim/'.$item->image)}}">
                        @else
                        <img alt='' src="{{asset('https://image.tmdb.org/t/p/original'.$item->image)}}">
                        @endif
                    </div>
                    <div class="movie__feature">
                        <a href="#" class="movie__feature-item movie__feature--comment">123</a>
                        <a href="#" class="movie__feature-item movie__feature--video">7</a>
                        <a href="#" class="movie__feature-item movie__feature--photo">352</a>
                    </div>
            </div>

            <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                    <a href='{{route('chitietphim',$item->id)}}' class="movie__title link--huge">{{$item->tenphim}} </a>

                    <p class="movie__time">{{$item->thoiluong}} phút</p>
                    <p class="movie__option"><strong>Quốc gia: </strong><a href="#"> {{$item->quocgia}}</a></p>
                    <p class="movie__option"><strong>Thể loại: </strong><a href="#"> {{$item->theloai}}</a></p>
                    <p class="movie__option"><strong>Category: </strong><a href="#">Comady</a></p>
                    <p class="movie__option"><strong>Ngày khởi chiếu: </strong> {{$item->ngaykhoichieu}}</p>
                    <p class="movie__option"><strong>Actors: </strong><a href="#">{{$item->dienvien}}</a> </p>
                    <p class="movie__option"><strong>Giới hạn độ tuổi: </strong><a href="#">18</a></p>

                    <div class="movie__btns">
                        <a href="{{route('chitietphim',$item->id)}}" class="btn btn-md btn--warning">book a ticket <span class="hidden-sm">for this movie</span></a>
                        <a href="#" class="watchlist">Add to watchlist</a>
                    </div>

                    <div class="preview-footer">
                        

                        <a href="#" class="movie__show-btn">Showtime</a>
                    </div>
            </div>

            <div class="clearfix"></div>
            
            <!-- Time table (choose film start time)-->
            @if(isset($lich_details))
                        @foreach ($lich_details as $l)
                        
                        
                    <div class="time-select">
                       
                        <span class="btn btn-md btn--danger">{{$l->rap->tenrap}}</span>
                        <input type="hidden" value="{{$l->rap->tenrap}}" id="tenrap">
                        @foreach ($l['ngay'] as $n)
                        <div class="time-select__group group--first">
                            <div class="col-sm-4" id="ngaychieu1">
                                <p class="time-select__place">{{date('d-m-Y', strtotime($n->ngay))}}</p>
                                
                            </div>
                            {{-- @foreach ($n['id_phong'] as $p) --}}
                           
                            <ul class="col-sm-8 items-wrap">
                                @foreach ($n['gio'] as $t)
                                <a href="" class="time-select__item">{{date('G:i',strtotime($t->gio))}}</a>
                                @endforeach
                            </ul>
                            {{-- @endforeach --}}
                           
                        </div>
                       
                        @endforeach
                </div>
                   
                   
                @endforeach   
                        
                        
                @endif 
            <!-- end time table-->

        </div>
        @endforeach
        <!-- end movie preview item -->
        <form action="" method="POST">
        <!-- end movie preview item -->
        <div class="coloum-wrapper">
            <div class="pagination paginatioon--full">
                    <a href='#' class="pagination__prev">prev</a>
                    <a href='#' class="pagination__next">next</a>
            </div>
        </div>
    </form>
    </div>

</section>

<div class="clearfix"></div>
    
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        init_MovieList();
    });
    $('.movie__show-btn').click(function (ev) {
                    ev.preventDefault();

                    $(this).parents('.movie--preview').find('.time-select').slideToggle(500);
                });

                $('.time-select__item').click(function (){
                    $('.time-select__item').removeClass('active');
                    $(this).addClass('active');
                });
</script>
@endsection