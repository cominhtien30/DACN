@extends('user.layout')
@section('body')

<section class="container">
    <div class="order-container">
        <div class="order">
            <img class="order__images" alt="" src="{{asset('public/frontend/images/tickets.png')}}">
            <p class="order__title">THANH TOÁN THÀNH CÔNG <br><span class="order__descript">Vé của bạn</span></p>
        </div>

        
        <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Thanh toán thành công!</h4>
  <p>Vui lòng kiểm tra thông tin vé ngay trong mục thông tin cá nhân của bạn hoặc kiểm tra trong hộp thư của bạn.</p>
  <hr>
  <p class="mb-0">Chúc bạn có một buổi xem phim thật thú vị.</p>
</div>
    </div>
</section>
@endsection