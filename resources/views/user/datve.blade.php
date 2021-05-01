@extends('user.layout')
@section('body')
@php
$idl=$lichchieu->id;
// $idl=0;
//  foreach ($lichchieu as $lc) 
//  $idl=$lc->id

@endphp

       
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">ĐẶT VÉ <br><span class="order__descript">and have fun movie time</span></p>
                    
                </div>
            </div>
                {{-- <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Choose a sit</div>
                </div> --}}
                <div class="order-step-area">
                    <div class="order-step first--step">Chọn ghế</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Giá</strong></li>
                        <li class="sits-price sits-price--cheap">$70</li>
                        {{-- <li class="sits-price sits-price--middle">$20</li>
                        <li class="sits-price sits-price--expensive">$30</li> --}}
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <div class="sits-anchor">Màn hình</div>
                   

                    <div class="sits ">
                        
                        {{-- <aside class="sits__line">
                            <span class="sits__indecator additional-margin">A</span>
                            <span class="sits__indecator additional-margin">B</span>
                            <span class="sits__indecator additional-margin">C</span>
                            <span class="sits__indecator additional-margin">D</span>
                            <span class="sits__indecator additional-margin">E</span>
                            <span class="sits__indecator additional-margin">F</span>
                            
                        </aside> --}}
                        @foreach ($ghe as $g)   
                            <div class="sits__row additional-margin" >
                                
                        @foreach ($g['so'] as $n)
                           
                        <?php                     
                        $check=DB::table('ve')->where('id_lichchieu',$id_lichchieu)->get();
                        foreach ($check as $c) {
                            if ($n->id==$c->id_ghe) {   
                                ?>
                               
                                <script>
                                    //alert('asdas')
                                    $(document).ready(function(){

                                   var id='<?php echo $n->id ?>';
                                   var url="{{route('check_ghe')}}";       
                                        $.get({
                                                type:'get',
                                                url:url,
                                                data:{
                                               id:id,
                                            
                                                
                                            },
                                        //  dataType: 'JSON',
                                            success:function(s){
                                             $('#'+s+'').addClass("sits-state--not");
                                            //  $('#'+s+'').css("pointer-events", "none");
                                           
                                            
                                            }
                                
                                    });
                                  
                                    
                                    });
                                </script>
                               
                                {{-- <span class="sits__place sits-price--cheap  Active sits-state--your" id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span> --}}
                                <?php
                                     }
                        }
                                ?>
                       
                                {{-- @if (($n->ve->id_lichchieu== $idl ) && ($n->ve->id_user !=null))
                                <span class="sits__place sits-price--cheap " id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span> 
                                @else
                                <span class="sits__place sits-price--cheap sits-state--not" id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span> 
                                @endif --}}
                                 {{-- @if($ghe_dat->status == 1)
                                 <span class="sits__place sits-price--cheap sits-state--not" id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span>
                                 @else
                                 <span class="sits__place sits-price--cheap " id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span> 
                                 @endif --}}
                                 <span class="sits__place sits-price--cheap " id="{{$n->id}}" data-place='{{$n->hang}}{{$n->so}}' data-price='10'>{{$n->hang}}{{$n->so}}</span> 
                                
                        @endforeach 
                            </div>
                            
                     @endforeach
                            
                          

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result">
                                0k
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            
                        </footer>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_n" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_n" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                0  
                            </div>
                    </aside>

                    <img alt="" src="{{asset('public/frontend/images/components/sits_mobile.png')}}">
                </div>
            </div>   
                
            </div>

            </div>
        </section>
        </div>
        <!-- Button trigger modal -->

  
  <!-- Modal -->
 
        

        <div class="clearfix"></div>
        <form id='film-and-time' class="booking-form" method='' action=''>

            <input type='text' name='choosen-number' class="choosen-number">
            <input type='text' name='choosen-number--cheap' class="choosen-number--cheap">
            <input type='text' name='choosen-number--middle' class="choosen-number--middle">
            <input type='text' name='choosen-number--expansive' class="choosen-number--expansive">
            <input type='text' name='choosen-cost' class="choosen-cost">
            <input type='text' name='choosen-sits' class="choosen-sits">


            <div class="booking-pagination booking-pagination--margin">
                
                  
                  {{-- <button  id="allseat" class="btn  " ><span class="arrow__text arrow--next">1Tiếp tục</span></button> --}}
                  {{-- <button id="next" class="btn  " onclick="test1" ><span class="arrow__text arrow--next">Tiếp tụsssc</span></button>
                  <a href="https://www.youtube.com/" id="next1">ssssss</a> --}}
                   
                  <a href="#" id="allseat" class="booking-pagination__next login-window">
                    <span class="arrow__text arrow--next">TIẾP TỤC</span>
                    <span class="arrow__info">Chọn thức ăn</span>
                </a>
                   
            </div>
          
                    
            </div>
        </form>
        
        <div class="clearfix"></div>
       
    
    <input type="hidden" name="" id="id_lich" value="{{$idl}}">
    <!-- Button trigger modal -->
<!-- Button trigger modal -->

  
  <div class="overlay overlay-hugeinc">
            
    <section class="container">

        <div class="col-sm-4 col-sm-offset-4">
            <button type="button" class="overlay-close">Close</button>
            <form id="login-form" class="login" method='get' novalidate=''>
                <p class="login__title"><br><span class="login-edition">Bạn có chắc tiếp tục</span></p>

               
                
                
                <div class="login__control">
                    
                  
                    <a href="{{route('datcombo')}}" class="btn btn-md btn--danger btn--wider">Xác nhận</a>
                
                </div>
            </form>
        </div>

    </section>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        init_BookingTwo();
    });
     
</script>

<script>
    
    
    $(document).ready(function(){
    var allseat=[];
    var id_user = $('#id_user').val();
    var id_lich = $('#id_lich').val();
    var total = $(".checked-result").text();
        $('#allseat').click(function(){
            var selectedSeats = parseInt($(".sits-state--your").length);
            selectedSeats = selectedSeats;
             if(selectedSeats > 0){
                $(".sits-state--your").each(function(){
                    var id = ($(this).attr('id'));
                    allseat.push(id);
                                    
                });
                var url="{{route('ajax_add_ghe')}}";       
                    $.get({
                            type:'get',
                            url:url,
                            data:{
                            id_user: id_user,
                            id_lich: id_lich,
                            allseat:allseat,
                           
                            
                        },
                      //  dataType: 'JSON',
                        success:function(s){
                           //  window.location.assign=""+s+"";
                           // alert(s);
                           
                           
                        }
               
                });
            }else{
                alert('Vui lòng chọn đủ số lượng vé');
             }
            // alert(selectedSeats);
            
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#allseat').hide();
        $('.sits-price--cheap').click(function(){
           $('#allseat').show();
           var selectedSeats = parseInt($(".sits-state--your").length);
            selectedSeats = selectedSeats;
        if(selectedSeats<=0){
            $('#allseat').hide();
        }
        });
        
       
    });
  </script>
  
@endsection