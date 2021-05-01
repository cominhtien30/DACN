<link rel="preconnect" href="https://fonts.gstatic.com">

    


<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Roboto -->
   

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/frontend/js/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Stylesheets -->

    <!-- Mobile menu -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="{{asset('public/frontend/css/gozha-nav.css')}}" rel="stylesheet" />
    <!-- Select -->
    <link href="{{asset('public/frontend/css/external/jquery.selectbox.css')}}" rel="stylesheet" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/rs-plugin/css/settings.css')}}" media="screen" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <!-- Custom -->
    <link href="{{asset('public/frontend/css/style.css?v=1')}}" rel="stylesheet" />
    
    <script src="{{asset('public/frontend/js/external/modernizr.custom.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.datetimepicker.full.js')}}"></script>
<section class="container">
    <div class="order-container">
        <div class="order">
            <img class="order__images" alt="" src="{{asset('public/frontend/images/tickets.png')}}">
            <p class="order__title">Cám ơn bạn  <br><span class="order__descript">Vé của bạn đã đặt thành công</span></p>
        </div>

        <div class="ticket">
            <div class="ticket-position">
                
                <div class="ticket__inner">

                   

                    <div class="ticket-primery">
                        
                        <span class="ticket__item ticket__item--primery ticket__film">Tên phim : <strong class="ticket__movie">{{Session::get('tenphim')}}</strong></span>
                        <br>
                        <span class="ticket__item ticket__item--primery ticket__film">Rạp : {{$time->tenrap}}</span>
                        <br>
                        <span class="ticket__item ticket__item--primery ticket__film">Phòng : {{$time->tenphong}}</span>
                        <br>
                        <span class="ticket__item ticket__item--primery">
                            Ngày : {{$time->ngay}}
                        </span>
                        <br>
                        <span class="ticket__item ticket__item--primery">
                            Giờ : {{$time->gio}}
                        </span>
                        <br>
                        <span class="ticket__item ticket__item--primery">Ghế: 
                            @foreach ($ticket as $item)
                            <span class="ticket__place text-danger" >{{$item->hang}}{{ $item->so}}</span>
                            @endforeach
                        </span>
                        <br>
                        @if(isset($sendCombo))
                        <span class="ticket__item ticket__item--primery">Combo: 
                            @foreach ($sendCombo as $item)
                            <span class="ticket__place text-danger" >{{$item->ten}} {{ $item->soluong}}</span>
                            @endforeach
                        </span>
                        @endif
                    </div>


                </div>
               
            </div>
        </div>


    </div>
</section>