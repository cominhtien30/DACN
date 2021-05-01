@extends('user.layout')
@section('body')
@php
    $tenphim = Session::get('tenphim');
    $hinhanh =Session::get('hinhanh');
   $quantity = Session::get('quantity')
    
@endphp
<div id="login-form" class="login"  novalidate="" >

                    <p class="login__title" style="font-family: Rotobo">CHỌN BẮP VÀ NƯỚC <br><span class="login-edition" style="font-family: Rotobo">COMBO CỦA BUGCINE</span></p>
    <div class="container ">
      <div class="col-lg-8">
      <table class="table" id="dataTable">
        <thead class="thead-dark">
          
        </thead>
      
        <tbody>
          @foreach ($combo as $item)
          <tr>
          <th scope="row">{{$item->ten}}</th>
            <td><img alt="" style="border: 1px solid #ddd;
              border-radius: 4px;
              padding: 5px;
              width: 200px; " src="{{asset('public/uploads/thucan/'.$item->image)}}">
            
              
          </td>
          <td>
            <span>{{$item->chitiet}}  <br></span>
           
            <p><b>Giá:</b><span><strong class="gia_combo">{{$item->gia}}</strong></span>&nbsp;VNĐ</p>
          </td>
            <td>
              <div class="quantity">
              <input type="number"  name="" class="units-class combo" id="{{$item->ten}}-{{$item->id}}" value="0" min="0" onchange="calculate()">
              
            </div>
            {{-- <span type="hidden" class="subtotal-class"></span> --}}
           <input type="hidden" class="subtotal-class" name="" id="">
            </td>
           
          </tr>
          @endforeach
          
          
          
        </tbody>
      </table>
     
   
    
      
</div>
</div>
<div class="col col-lg-3">
  <div>
    <span style="font-size: 20px"><strong>{{$tenphim}}</strong> <br></span>
    <img alt="" style="border: 1px solid #ddd;
              border-radius: 4px;
              padding: 5px;
              width: 200px; " src="{{asset('public/uploads/phim/'.$hinhanh)}}">
    {{-- <h4 style="font-size: 14px" id="tentienganh">{{$l->phim->tentienganh}}</h4> --}}
  </div>
  
  <b>Combo:</b>&nbsp;<div class="comboList"> </div>
      <b>Số lượng ghế:</b><span id="seatList">
        {{$quantity}} x (70.000 VNĐ)
      </span>
      
      <p><b>Tổng:</b><span id="total"> </span>&nbsp;VNĐ</p>
      
      
   
      
      <div class="booking-pagination booking-pagination--margin">  
        {{-- <button class="btn" style="margin-left:-40%" id="allseat"><span class="arrow__text arrow--next">1Tiếp tục</span> </button> --}}    
        <a href="#" id="allseat" class="booking-pagination__next login-window">
          <span class="arrow__text arrow--next">TIẾP TỤC</span>
          <span class="arrow__info">Thanh toán</span>
      </a>
               
        </div>
      
</div>
</div>
</div>
<input type="hidden" name="" value="{{$quantity}}" id="quantity">

  
<div class="overlay overlay-hugeinc">
            
  <section class="container">

      <div class="col-sm-4 col-sm-offset-4">
          <button type="button" class="overlay-close">Close</button>
          <form id="login-form" class="login" method='get' novalidate=''>
              <p class="login__title"><br><span class="login-edition">Bạn có chắc tiếp tục</span></p>

             
              
              
              <div class="login__control">
                  
                
                  <a href="{{route('thanhtoan')}}" class="btn btn-md btn--danger btn--wider">Xác nhận</a>
              
              </div>
          </form>
      </div>

  </section>
</div>
@endsection
@section('script')
<script>
  $(document).ready(function(){
    var quantity = $('#quantity').val();
    var total = quantity * 70000;
    
    $('#total').append(total)
    $(".combo").change(function() {
			var slcombo=$(this).val();
			var combo=$(this).attr('id');
			var combo=combo.split("-");
      
			if (slcombo >= 1) {
				if (slcombo > 1) {
					$(".comboList ."+ combo[1]).remove();
					$(".comboList").append('<span class='+ combo[1] +'>'+ combo[0] +'(x'+ slcombo +')&nbsp;,'+'</span>');
          
				}else{
					$(".comboList ."+ combo[1]).remove();
					$(".comboList").append('<span class='+ combo[1] +'>'+ combo[0] +'(x'+ slcombo +')&nbsp;,'+'</span>');
          
				}
			}else{
				$(".comboList ."+ combo[1]).remove();
        
			}
    var prices = [120000,200000,45000,60000];
		var units = document.getElementsByClassName('units-class');
		var subs = document.getElementsByClassName('subtotal-class');
    var prices = document.getElementsByClassName('gia_combo');
		var grand = document.getElementById('total');
    calculate();

		function calculate(){
			let sum = 0;
			for(i = 0; i < subs.length; i++){
				var subTotal = units[i].value * prices[i].textContent;
				subs[i].innerHTML = subTotal;
        
				sum += subTotal;
			}

			grand.innerHTML = sum + total; 
		} 
		});
    
    var allcombo=[];
    var test = 1;
   
     $('#allseat').click(function(){
      var total1 = $('#total').text();
     
       $(".combo").each(function(){
            if ($(this).val()>=1) {
              var combo=$(this).attr('id');
              var combo=combo.split("-");
              var val = $(this).val()
              allcombo.push({
							idcb:combo[1],
							slcb:$(this).val()
						});
            }
           });
           var url="{{route('ajax_dat_combo')}}";
           
        $.get({
            type:'GET',
            url:url,
            data:{
              
              
              allcombo:allcombo,
              total:total1,
            },
            //dataType: 'JSON',
            success:function(response){
            //alert(response);
            }
        });
      //alert(total);
     });
    
  });
</script>











<script>    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
  jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });</script>
<style>.quantity {
  position: relative;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  width: 60px;
  height: 42px;
  line-height: 1.65;
  float: left;
  display: block;
  padding: 0;
  margin: 0;
  padding-left: 20px;
  border: 1px solid #eee;
}

.quantity input:focus {
  outline: 0;
}

.quantity-nav {
  float: left;
  position: relative;
  height: 42px;
}

.quantity-button {
  position: relative;
  cursor: pointer;
  border-left: 1px solid #eee;
  width: 20px;
  text-align: center;
  color: #333;
  font-size: 13px;
  font-family: "Trebuchet MS", Helvetica, sans-serif !important;
  line-height: 1.7;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.quantity-button.quantity-up {
  position: absolute;
  height: 50%;
  top: 0;
  border-bottom: 1px solid #eee;
}

.quantity-button.quantity-down {
  position: absolute;
  bottom: -1px;
  height: 50%;
}</style>
@endsection