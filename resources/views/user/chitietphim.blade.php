@extends('user.layout')
@section('body')
    <!-- Search bar -->
   
        <!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                
            </div>
        </div>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-8 col-md-9">
                <div class="movie">
                    <h2 class="page-heading" style=" font-family: 'Roboto', sans-serif;
                    font-weight: bold;">{{$chitiet->tenphim}}</h2>
                    <input type="hidden"id="id_phim" value="{{$chitiet->id}}">
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating">5.0</span>
                                <img alt="" src="{{asset('public/uploads/phim/'.$chitiet->image)}}">
                            </div>
                            <div class="movie__rate">Đánh giá: <img src="{{asset('public/frontend/images/rate/star-on.svg')}}" alt="1" title="bad">&nbsp;<img src="{{asset('public/frontend/images/rate/star-on.svg')}}" alt="2" title="poor">&nbsp;<img src="{{asset('public/frontend/images/rate/star-on.svg')}}" alt="3" title="regular">&nbsp;<img src="{{asset('public/frontend/images/rate/star-on.svg')}}" alt="4" title="good">&nbsp;<img src="{{asset('public/frontend/images/rate/star-on.svg')}}" alt="5" title="gorgeous"><input type="hidden" name="score" value="5"></div>
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time">{{$chitiet->thoiluong}} phút</p>

                            <p class="movie__option"><strong>Quốc gia: </strong><a href="#">{{$chitiet->quocgia}}</a> </p>
                            <p class="movie__option"><strong>Năm: </strong><a href="#">2012</a></p>
                            <p class="movie__option"><strong>Thể loại: </strong><a href="#">{{$chitiet->theloai}}</a></p>
                            <p class="movie__option"><strong>Ngày phát hành: </strong>{{$chitiet->ngaykhoichieu}}</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#">{{$chitiet->daodien}}</a></p>
                            <p class="movie__option"><strong>Actors: </strong><a href="#">{{$chitiet->dienvien}}</a> </p>
                            <p class="movie__option"><strong>Giới hạn độ tuổi: </strong><a href="#">18</a></p>
                           

                            <a href="#" class="comment-link">Bình luận:  {{$count_cmt}}</a>

                            <div class="movie__btns">
                                <a href="#" class="btn btn-md btn--warning">book a ticket for this movie</a>
                                <a href="#" class="watchlist">Add to watchlist</a>
                            </div>

                            <div class="share">
                                <span class="share__marker">Share: </span>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">The plot</h2>

                <p class="movie__describe">{{$chitiet->noidung}}</p>

                    <h2 class="page-heading" style="font-family: Roboto">Ảnh &amp; video</h2>
                    
                    <iframe width="840" height="400" src="{{$chitiet->trailer}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    

                </div>

                <h2 class="page-heading" style="font-family: Roboto">Lịch chiếu</h2>
                <div class="choose-container">
            
                
                    
                    <div class="clearfix"></div>

                    @if(isset($lich))
                        @foreach ($lich as $l)
                        <span class="btn btn-md btn--danger">{{$l->rap->tenrap}}</span>
                        <input type="hidden" value="{{$l->rap->tenrap}}" id="tenrap">
                    <div class="time-select">
                       
                
                        @foreach ($l['ngay'] as $n)
                        <div class="time-select__group group--first">
                            <div class="col-sm-4" id="ngaychieu1">
                                <p class="time-select__place">{{date('d-m-Y', strtotime($n->ngay))}}</p>
                                
                            </div>
                            
                           
                            <ul class="col-sm-8 items-wrap">
                                @foreach ($n['gio'] as $t)
                                <a href="{{route('datvexemphim',$t->id)}}" class="time-select__item">{{date('G:i',strtotime($t->gio))}}</a>
                                @endforeach
                            </ul>
                            
                           
                        </div>
                       
                        @endforeach
                </div>
                   
                   
                @endforeach   
                        
                        
                @endif 
                    
                    
                    
                    <!-- hiden maps with multiple locator-->
                   

                    <h2 class="page-heading" style="font-family: Roboto">Bình luận {{$count_cmt}}</h2>
                    <div class="comment-wrapper">
                        <div id="comment-form" class="comment-form">
                            <textarea class="comment-form__text" id="content_cmt"  placeholder="Add you comment here"></textarea>
                            <label  class="comment-form__info text-success"   id="your_cmt" >Bình Luận Của Bạn Đã Được Đăng !</label>
                            <button id="comment_user" class="btn btn-md btn--danger comment-form__btn" style="font-family: Roboto">Bình luận</button>
                        </div>

                        <div class="comment-sets" id="list_cmt">
                        @foreach($list_cmt as $cmt)
                        <div class="comment comment--last">
                            <div class="comment__images">
                                <img alt="" src="http://placehold.it/50x50">
                            </div>

                            <a href="#" class="comment__author"><span class="social-used fa fa-facebook"></span>{{$cmt->name}}</a>
                            <p class="comment__date"> {{$cmt->ngay}} | {{$cmt->gio}} </p>
                            <p class="comment__message">{{$cmt->noidung}}</p>
                            <a href="#" class="comment__reply">Reply</a>
                        </div>
                        @endforeach
                       

                        <div id="hide-comments" class="hide-comments" style="display: none;">
                        
                        </div>

                        <div class="comment-more">
                            <a href="#" class="watchlist">Show more comments</a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>

            <aside class="col-sm-4 col-md-3">
                <div class="sitebar">
                    @foreach ($phimdangchieu as $item)
                    <div class="banner-wrap">
                        <a href="{{route('chitietphim',$item->id)}}">
                        <img  alt="banner" src="{{asset('public/uploads/phim/'.$item->image)}}"></a>
                    </div>
                     @endforeach
                   
                    
                    <div class="promo marginb-sm">
                        <div class="promo__head">A.Movie app</div>
                        <div class="promo__describe">for all smartphones<br> and tablets</div>
                        <div class="promo__content">
                            <ul>
                                <li class="store-variant"><a href="#"><img alt="" src="images/apple-store.svg"></a></li>
                                <li class="store-variant"><a href="#"><img alt="" src="images/google-play.svg"></a></li>
                                <li class="store-variant"><a href="#"><img alt="" src="images/windows-store.svg"></a></li>
                            </ul>
                        </div>
                    
                    
                  </div>
                 
                    {{-- <div class="category category--discuss category--count marginb-sm mobile-category ls-cat">
                        <h3 class="category__title">the Most <br><span class="title-edition">discussed posts</span></h3>
                        <img alt="banner" src="{{asset('public/uploads/phim/'.$item->image)}}">
                        <ol>
                            <li><a href="#" class="category__item">Gravity</a></li>
                            <li><a href="#" class="category__item">The Counselor</a></li>
                            
                        </ol>
                    </div>
                  
                    <div class="category category--cooming category--count marginb-sm mobile-category rs-cat">
                        <h3 class="category__title">coming soon<br><span class="title-edition">movies</span></h3>
                        <ol>
                            <li><a href="#" class="category__item">Ender's Game</a></li>
                            <li><a href="#" class="category__item">About Time</a></li>
                            <li><a href="#" class="category__item">Last Vegas</a></li>
                            <li><a href="#" class="category__item">Free Birds</a></li>
                            <li><a href="#" class="category__item">The Wolf of Wall Street</a></li>
                            <li><a href="#" class="category__item">The Best Man Holiday</a></li>
                            <li><a href="#" class="category__item">The Book Thief</a></li>
                            <li><a href="#" class="category__item">The Hunger Games: Catching Fire</a></li>
                            <li><a href="#" class="category__item">Delivery Man</a></li>
                            <li><a href="#" class="category__item">Nebraska</a></li>
                        </ol>
                    </div> --}}
                    
                   

                </div>
            </aside>

        </section>
        
        <div class="clearfix"></div>



        
@endsection
@section('script')



<script>
    
    document.getElementById('datetime').valueAsDate = new Date();
    
</script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
   
$(document).ready(function(){
    // Get value on button click and show alert
    var ten_rap[];
    ten_rap.push($("#ten_rap").val());
    var id_phim = $("#id_phim").val();
    var url="http://localhost:81/DACN/ajax/get-lich-chieu/";
                

                $.get({
                    type:'GET',
                    url:url,
                    data:{
                        id_phim:id_phim,
                        ten_rap:ten_rap,
                        //date:date
                        
                    },
                    success:function(result){
                        $('#ngaychieu').html(result);
                    }
                });
            }

});
</script>
{{-- xử lý cmt --}}
<script>
    $(document).ready(function(){
    $('#your_cmt').hide();
        // Get value on button click and show alert
        $( "#comment_user" ).click(function() {
           
           var content= $("#content_cmt").val();
           if(content==""){
            alert('Bạn Chưa Nhập Nội Dung Bình Luận !!');
           }else{
                var url="{{route('cmt_user')}}";
                var fulllink   = window.location.href;
                var item_link=fulllink.split("/");
                var id = item_link[item_link.length-1];
                $.get({
                            type:'GET',
                            url:url,
                            data:{
                                content:content,
                                id:id
                            },
                            success:function(result){
                                //$('#ngaychieu').html(result);
                                //alert(result);
                              if(result=="not login"){
                                window.location.href = "{{route('user_login')}}";
                              }else{
                                $('#list_cmt').html(result);
                                $('#content_cmt').val("");
                                $('#your_cmt').show();
                              }
                               
                              
                            }
                        });
                       
            }
         
           
        });
    });
    </script>



@endsection