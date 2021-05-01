@extends('user.layout')
@section('body')
@php
    
    $total = Session::get('totalprice');
    $quantity = Session::get('quantity');
    $to_usd = $total/23080;
 
    
@endphp
<section class="container">
   
    <div class="order-container">
        <div class="order">
            <img class="order__images" alt="" src="{{asset('public/frontend/images/tickets.png')}}">
            <p class="order__title">THANH TOÁN <br><span class="order__descript">and have fun movie time</span></p>
           
        </div>
    </div>
        <div class="order-step-area">
            <div class="order-step first--step order-step--disable ">1. Xem gì &amp; Ở đâu &amp; Khi nào</div>
            <div class="order-step second--step order-step--disable">2. Chọn ghế</div>
            <div class="order-step third--step">3. Thanh toán</div>
        </div>

        
            <div class="checkout-wrapper">
                <h2 class="page-heading" id="style">TỔNG TIỀN</h2>
                <ul class="book-result">
                    <li class="book-result__item" id="style">Tổng số lượng vé: <span class="book-result__count booking-ticket">{{$quantity}}</span></li>
                    <li class="book-result__item">Giá vé: <span class="book-result__count booking-price">70000 &nbsp;VNĐ</span></li>
                    <li class="book-result__item">Total: <span class="book-result__count booking-cost">{{$total}} &nbsp;VNĐ</span></li>
                </ul>
    
                <h2 class="page-heading" id="style">CHỌN HÌNH THỨC THANH TOÁN</h2>
                <div class="payment">
                    <a href="#" class="payment__item">
                        <img alt="" src="{{asset('public/frontend/images/payment/pay1.png')}}">
                    </a>
                   
                    <a href="{{route('vnpay')}}" class="payment__item">
                        <img alt="" style="
                       
                        padding: 1px;
                       
                        width: 50px; "  src="{{asset('public/frontend/images/payment/VNPAY.png')}}">
                    </a>
                    <a href="" class="payment__item">
                        <img alt="" style="
                       
                        padding: 1px;
                       
                        width: 35px; "  src="{{asset('public/frontend/images/payment/momo.png')}}">
                    </a>
                    
                    <div class="payment__item"id="paypal-button"></div>
                </div>
    
                
     
                   
                </div>
    
                 <input type="hidden" name="" value="{{$total}}" id="total1">
                 <input type="hidden" name="" value="{{round($to_usd,2)}}" id="usd">
                <input type="hidden" name="" value="{{Cart::count()}}" id="total2"> 
                
</section>
@section('script')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  var usd = $('#usd').val();
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'ATHbVb2jTzahVRgpWdYfeBgakNNAHliW2Swn0Yc5AV8ehf8UaDcFcBUihEAEQJW_ITVJHL7JrDu08DlW',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: `${usd}`,
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thanh toán thành công!');
      });
    }
  }, '#paypal-button');

</script>
@endsection

  
@endsection