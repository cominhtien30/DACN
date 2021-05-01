@extends('user.layout')
@section('body')

        <!-- Slider -->
        <div class="bannercontainer">
                    <div class="banner">
                        <ul>

                            

                            <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide='Travel worldwide.
Create trip film.'>
                                <img alt='' src="{{asset('public/frontend/images/banners/02.jpg')}}">
                                 <div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                                   <video class="media-element"  autoplay="autoplay" preload='none' loop="loop" muted="" src="video/53170154.mp4" >
                                        <source type="video/webm" src="video/53170154.webm">
                                        <source type="video/mp4" src="video/53170154.mp4">
                                        <source type="video/ogg" src="video/53170154.ogv">
                                    </video>
                                </div>

                                 <div class="caption slide__name slide__name--smaller" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-splitin="chars"
                                     data-elementdelay="0.1"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"

                                     data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                                    data-frames="{ typ :lines;
                                                 elementdelay :0.1;
                                                 start:1650;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 },
                                                 { typ :lines;
                                                 elementdelay :0.1;
                                                 start:2150;
                                                 speed:500;
                                                 ease:Power3.easeOut;
                                                 animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                                 }
                                                 "


                                    data-splitout="lines"
                                    data-endelementdelay="0.1"
                                    data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                                    data-endspeed="500"
                                   
                                    data-endeasing="Back.easeIn"
                                     >
                                    Travel, Admire, Remember.
                                </div>

                                <div class="caption slide__time position-center postion-place--one sfr stl" 
                                     data-x="left" 
                                      
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     
                                     data-endeasing="Back.easeIn">
                                     From
                                 </div>
                                <div class="caption slide__date position-center postion-place--two lfb ltb" 
                                     data-x="left"                                       
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2400" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="400"
                                     
                                     data-endeasing="Back.easeIn">
                                     April 18 
                                 </div>
                                <div class="caption slide__time position-center postion-place--three sfr stl" 
                                     data-x="left" 
                                     data-y="242" 
                                     data-speed="300" 
                                     data-start="2100" 
                                     data-easing="easeOutBack"
                                     data-endspeed="300"
                                     
                                     data-endeasing="Back.easeIn">
                                     - till
                                 </div>
                                <div class="caption slide__date position-center postion-place--four lfb ltb" 
                                     data-x="left"
                                     data-y="242" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut" 
                                     data-endspeed="400"
                                     
                                     data-endeasing="Back.easeIn">
                                     May 01
                                 </div>

                                 <div class="caption lfb slider-wrap-btn ltb" 
                                     data-x="left"
                                     data-y="310" 
                                     data-speed="400" 
                                     data-start="3300" 
                                     data-easing="Power4.easeOut"
                                     data-endspeed="500"
                                     
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger btn--wide slider--btn">learn more</a>
                                 </div>
                            </li>

                            <li data-transition="fade" data-slotamount="7" class="slide" data-slide='Stop wishing. 
Start doing.'>
                                <img alt='' src="{{asset('public/frontend/images/banners/03.jpg')}}">
                                 <div class="caption slide__name slide__name--smaller slide__name--specific customin customout" 
                                     data-x="left" 
                                     data-y="160" 

                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                     data-speed="700" 
                                     data-start="1400" 
                                     data-easing="easeOutBack"
                                     data-endspeed="500"
                                     data-end="8600"
                                     data-endeasing="Back.easeIn"

                                     >
                                    Stop <span class="highlight">wishing.</span> Start <span class="highlight">doing.</span> 
                                </div>

                                  <div class="caption slide__descript customin customout" 
                                     data-x="left" 
                                     data-y="240"
                                     data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-speed="700" 
                                     data-start="2000"
                                     data-endspeed="500"
                                     data-end="8400"
                                     data-endeasing="Back.easeIn">
                                     find your best match movie with A.MOVIE
                                 </div>

                                 <div class="caption lfb customout slider-wrap-btn" 
                                     data-x="left" 
                                     data-y="310" 
                                     data-speed="500" 
                                     data-start="2800" 
                                     data-easing="Power4.easeOut"
                                     data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                     data-endspeed="400"
                                     data-end="8000"
                                     data-endeasing="Power4.easeOut" >
                                     <a href="#" class="btn btn-md btn--danger slider--btn">check out movies</a>
                                 </div>
                            </li>

                        </ul>
                    </div>
                </div>

        <!--end slider -->
        
        
        <!-- Main content -->
        <section class="container">
            <div class="movie-best">
                 <div id="test"  class="col-sm-10 col-sm-offset-1 movie-best__rating" style=" font-family: 'Roboto', sans-serif;
            font-weight: bold;">PHIM ĐANG CHIẾU</div>
                 <div class="col-sm-12 change--col">
                     @foreach($show_product as $item)
                     <div class="movie-beta__item ">
                        <a href="{{route('chitietphim',$item->id)}}" class="slide__link"><img alt='' src="{{asset('public/uploads/phim/'.$item->image)}}"></a>
                         <span class="best-rate">5.0</span>
                        
                         <ul class="movie-beta__info"> 
                             <li><span class="best-voted">{{$item->tenphim}}</span></li>
                             <li>
                                <p class="movie__time">169 min</p>
                                <p>Thể loại: {{$item->theloai}} </p>
                                <p>38 comments</p>
                             </li>
                             <li class="last-block">
                                 <a href="{{route('chitietphim',$item->id)}}" class="slide__link">Chi tiết</a>
                             </li>
                         </ul>
                     </div>
                    @endforeach
                 </div>
                <div class="col-sm-10 col-sm-offset-1 movie-best__check" style=" font-family: 'Roboto', sans-serif;
                font-weight: bold;">XEM TẤT CẢ PHIM</div>
            </div>

            
            
            <div class="clearfix"></div>

            <h2 id="target" class="page-heading heading--outcontainer">PHIM SẮP CHIẾU</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                       @foreach ($show_product_ as $item)
                       <div class="movie movie--test movie--test--dark movie--test--left">
                        <div class="movie__images">
                            <a href="movie-page-left.html" class="movie-beta__link">
                                <img alt='' src="{{asset('public/uploads/phim/'.$item->image)}}">
                            </a>
                        </div>

                        <div class="movie__info">
                            <a href='{{route('chitietphim',$item->id)}}' class="movie__title">{{$item->tenphim}}  </a>

                            <p class="movie__time">{{$item->thoiluong}} phút</p>

                            <p class="movie__option"> <a href="#">Thể loại: {{$item->theloai}}</a></p>
                            <p class="movie__option"> <a href="#">Ngày khởi chiếu: {{$item->ngaykhoichieu}}</a></p>
                            <p class="movie__option"> <a href="#">Quốc gia: {{$item->quocgia}}</a></p>
                            <a href="{{route('chitietphim',$item->id)}}" id="" style=" font-family: 'Roboto', sans-serif;
                            font-weight: bold;" class="btn btn-md btn--warning btn--book btn-control--home">Đặt vé ngay</a>
                                          
                        </div>
                    </div>
                       @endforeach
                            
                         <!-- Movie variant with time -->
                     


                        <div class="row">
                            <div class="social-group">
                              <div class="col-sm-6 col-md-4 col-sm-push-6 col-md-push-4">
                                    <div class="social-group__head">Join <br> bug cinema groups</div>
                                    <div class="social-group__content">A lot of fun, discussions, queezes and contests among members. <br class="hidden-xs"><br>Always be first to know about best offers from cinemas and our partners</div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-4">
                                     <div class="">

                                        <img class="fgroup" src="{{asset('public/frontend/images/banners/b4.jpg')}}" style="border:none; overflow:hidden; width:220px; height:330px;" >
                                    </div>
                                </div>
                                
                                <div class="clearfix visible-sm"></div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="">
                                        
                                            <img class="fgroup" src="{{asset('public/frontend/images/banners/b5.jpg')}}" style="border:none; overflow:hidden; width:260px; height:330px;" >
                                        
                                        
                                    </div>
                                </div>
                                <div class="clearfix visible-sm"><br></div>
                               
                            </div>
                        </div>
                    </div>

                    <aside class="col-sm-4 col-md-3">
                        <div class="sitebar first-banner--left">
                            <div class="banner-wrap first-banner--left">
                                <img alt='banner' src="{{asset('public/frontend/images/banners/b1.jpg')}}">
                            </div>

                             <div class="banner-wrap">
                                <img alt='banner' src="{{asset('public/frontend/images/banners/b2.jpg')}}">
                            </div>

                             {{-- <div class="banner-wrap banner-wrap--last">
                                <img alt='banner' src="{asset('public/frontend/images/banners/b3.jpg')}}">
                            </div> --}}

                            <div class="promo marginb-sm">
                              <div class="promo__head">A.Movie app</div>
                              <div class="promo__describe">for all smartphones<br> and tablets</div>
                              <div class="promo__content">
                                  <ul>
                                      <li class="store-variant"><a href="#"><img alt='' src="{{asset('public/frontend/images/banners/c1.png')}}"></a></li>
                                      {{-- <li class="store-variant"><a href="#"><img alt='' src="images/banners/b2.jpg"></a></li>
                                      <li class="store-variant"><a href="#"><img alt='' src="images/windows-store.svg"></a></li> --}}
                                  </ul>
                              </div>
                          </div>
    
                        </div>
                    </aside>
                </div>
            </div>

            <div class="col-sm-12">
                <h2 class="page-heading">Latest news</h2>

                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">"Thor: The Dark World" - World Premiere</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">30th Annual Night Of Stars Presented By The Fashion Group International</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
                <div class="col-sm-4 similar-wrap col--remove">
                    <div class="post post--preview post--preview--wide">
                        <div class="post__image">
                            <img alt='' src="http://placehold.it/270x330">
                            <div class="social social--position social--hide">
                                <span class="social__name">Share:</span>
                                <a href='#' class="social__variant social--first fa fa-facebook"></a>
                                <a href='#' class="social__variant social--second fa fa-twitter"></a>
                                <a href='#' class="social__variant social--third fa fa-vk"></a>
                            </div>
                        </div>
                        <p class="post__date">22 October 2013 </p>
                        <a href="single-page-left.html" class="post__title">Hollywood Film Awards 2013</a>
                        <a href="single-page-left.html" class="btn read-more post--btn">read more</a>
                    </div>
                </div>
            </div>
                
        </section>
        
        <div class="clearfix"></div>

@endsection
