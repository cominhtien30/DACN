
@extends('user.layout')
@section('body')
@php
    use Illuminate\Support\Facades\Session;
@endphp
<section class="container">
    <div class="order-container">
        <div class="order">
            <br>
            <img class="order__images" alt='' src="{{asset('public/frontend/images/man.png')}}">
            <p class="order__title">Thông Tin Cá Nhân</p>
           
        </div>


    <div class="col-sm-12">
        <div class="checkout-wrapper">
            <h2 class="page-heading">Thông Tin Cá Nhân</h2>
    
            <form id='contact-info'  method='post' novalidate="" class="form contact-info">
                <div class="contact-info__field contact-info__field-mail" style="width: 70%">
                    <input type='text' name='user-mail' placeholder='Your email' class="form__mail"
                    value="{{$user->name}}" readonly>
                </div>
                <br>
                <div class="contact-info__field contact-info__field-mail " style="width: 70%">
                    <input type='text' name='user-tel' placeholder='Phone number' class="form__mail"
                    value="{{$user->email}}" readonly>
                </div>
            </form>
            <h2 class="page-heading">Lịch Sử Đặt Vé</h2>
            {{-- @foreach($historyve as $ve)
            <br>
            <ul class="book-result" style="width: 100%" >
                <li  class="book-result__item" >Ngày: <span class="book-result__count booking-ticket">{{$ve->ngay}}</span></li>
                <li class="book-result__item">Giờ: <span class="book-result__count booking-price">{{$ve->gio}}</span></li>
                <li class="book-result__item">Tên rạp: <span class="book-result__count">{{$ve->tenrap}}</span></li>
                <li class="book-result__item">Tên Phim: <span class="book-result__count">{{$ve->tenphim}}</span></li>
                <li class="book-result__item" style="border-style: dotted;">Total: <span class="book-result__count booking-cost">{{$ve->total*700000}}</span></li>
            </ul>
            <br>
            @endforeach --}}
        
            @foreach($historyve as $ve)
            <div class="ticket">
                <div class="ticket-position">
                    <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                    <div class="ticket__inner">

                        <div class="ticket-secondary">
                            <span class="ticket__item">Mã vé <strong class="ticket__number">#BUGCINE{{$ve->id_lichchieu}}</strong></span>
                            <span class="ticket__item ticket__date">Ngày: {{$ve->ngay}}</span>
                            <span class="ticket__item ticket__time">Giờ: {{$ve->gio}}</span>
                            <span class="ticket__item">Cinema: <span class="ticket__cinema">{{$ve->tenrap}}</span></span>
                           
                            <span class="ticket__item ticket__price">Tổng tiền: <strong class="ticket__cost">{{$ve->total*70000}} VNĐ</strong></span>
                        </div>
                        
                        <div class="ticket-primery">
                            <span class="ticket__item ticket__item--primery ticket__film">Tên phim<br><strong class="ticket__movie">{{$ve->tenphim}}</strong></span>
                            <span class="ticket__item ticket__item--primery">Ghế: <span class="ticket__place">
                            @php
                                $ghe=DB::table('ve')
                                    ->join('lichchieu', 'lichchieu.id', '=', 've.id_lichchieu')
                                    ->join('phim', 'phim.id', '=', 'lichchieu.id_phim')
                                    ->join('rap', 'rap.id', '=', 'lichchieu.id_rap')
                                    ->join('ghe','ghe.id','ve.id_ghe')
                                    ->where('ve.id_user',Session::get('id_user'))
                                    ->where('ve.id_lichchieu',$ve->id_lichchieu)
                                    ->get();
                            foreach ($ghe as $g) {
                                echo $g->hang.$g->so." ";
                            }  
                           
                            @endphp
                            
                              
                            </span>
                            <span class="ticket__item ticket__item--primery">Combo : <span class="text-info">
                                @php
                                    $combo=DB::table('dat_combo')
                                        ->join('thucan', 'thucan.id', '=', 'dat_combo.id_combo')
                                        ->where('dat_combo.id_user',Session::get('id_user'))
                                        ->where('dat_combo.id_lichchieu',$ve->id_lichchieu)
                                        ->get();
                                foreach ($combo as $c) {
                                    echo $c->ten."(".$c->soluong.") ";
                                }  
                               
                                @endphp
                                
                                  
                                </span>
                        </div>
                       


                    </div>
                    <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                </div>
            </div>
            @endforeach
           
            
            {{-- <p class="reservation-message">Fill your contact information to recieve your reservation code. Reserved tickets are removed 20 minutes befor the session is due to start</p> --}}
        
        </div>
        
        {{-- <div class="order">
            <a href="book-final.html" class="btn btn-md btn--warning btn--wide">reserve</a>
        </div> --}}

    </div>
    <div class="clearfix"></div>
</section>
@endsection
@section('script')
    <script>
         $(document).ready(function(){
                            
                            $('#info').click(function(){
                              
                               var idrap= 
                               
                            //    $.ajax({url: "http://localhost:8080/DACN/ajax/get-info-user/", success: function(result){
                            //       $('#data').html(result);
                            //     }
                            //     });
                          //  alert('sss');
                          
                            });
         });
    </script>
@endsection