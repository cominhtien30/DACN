@extends('admin.layout')
@section('content')
 
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="movie-container">
        <label for="">Chọn Rạp </label>
        <select id="rap" class="form-check">
          <option>--Chọn Rạp--</option>
          @foreach ($list_rap as $item)
        <option value="{{$item->id}}"> {{ $item->tenrap}} </option>
            @endforeach
        </select>
        
        <label for=""> &nbsp&nbsp&nbspChọn Phòng</label>
        <select id="room" class="form-check">
          <option>---Phòng---</option>
        </select>
    </div>
    <div class="container">
        {{-- <div class="screen"></div> --}}
        <div class="row" id="ghe">
            <div class="hang">A</div>  
        </div>
        <div class="row" id="ghe">
          <div class="hang">B</div>
        </div>
        <div class="row" id="ghe">
          <div class="hang">C</div>    
        </div>
        <div class="row" id="ghe">
            <div class="hang">D</div>  
        </div>
        <div class="row" id="ghe">
            <div class="hang">E</div>
        </div>
        <div class="row" id="ghe">
            <div class="hang">F</div>
        </div>

    </div>

   
</div>
</div>
</div>
    <script src="{{('public/backend/seat/script.js')}}"></script>
   

    <script>
      $(document).ready(function(){
                             
                            $("#rap").change(function(){
                               var idrap=$(this).val();  
                               var url="{{route('admin-list-room-ghe')}}";
                               //alert (idrap);                          
                              //  $.ajax({url:"http://localhost:81/DACN/ajax/admin-list-room-ghe/"+idrap, success: function(result){
                              //       $('#room').html(result);

                              //     }
                              //   });
                              $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                      $('#room').html(response);

                                    }
                                        });
                                
                            });
                             
                         });
        
 </script>
  <script>
    $(document).ready(function(){
                           
                          $("#room").change(function(){
                            
                             $("#ghe .row").hide();  
                            var url="{{route('admin-list-ghe')}}"
                            var idrap=$(this).val();
                            //  $.ajax({url:"http://localhost:81/DACN/ajax/admin-list-ghe/"+idrap, success: function(result){
                            //         $('.container').html(result);
                                   
                                  

                            //       }
                            //     });    
                            $.get({
                                    type:'GET',
                                    url:url,
                                    data:{
                                    id:idrap,
                                    },
                                        //dataType: 'JSON',
                                    success:function(response){
                    
                                      $('.container').html(response);

                                    }
                                        });             
                              
                          });
                           
                       });
      
</script>

@endsection

<style type="text/css" media="screen">
  * {
  box-sizing: border-box;
}
.app-main__inner {
  /* background-color: rgb(62, 66, 129); */
  background-image: url('public/backend/seat/bg.jpg');
  background-size: cover;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 90vh;
  margin: 0;
}
.movie-container {
  margin: 20px 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.movie-container select {
  background-color: #fff;
  border: 0;
  border-radius: 5px;
  font-size: 14px;
  margin-left: 10px;
  padding: 5px 15px;

}

.container {
  perspective: 1000px;
  margin-bottom: 30px;

}
.container .row {
  
  align-items: center;
  justify-content: center;
}

.seat {
  background-color:rgb(223, 235, 238);
  color: black;
  height: 25px;
  width: 40px;
  margin: 13px;
  border-radius: 8px 8px 0 0;
  text-align: center;
}
.hang{
  background: #fe921f; color: #ffffff; display: inline-block; font-family: 'Lato', sans-serif; font-size: 15px; font-weight: bold; line-height: 12px; letter-spacing: 1px;  padding: 10px 15px 8px; text-transform: uppercase;
  margin-bottom: 5px;
}
.seat.occupied {
  background-color: #fff;
}
.seat:nth-of-type(2) {
  margin-right: 15px;

}
.seat:nth-last-of-type(2) {
  margin-left: 15px;
}

.seat:not(.occupied):hover {
  cursor: pointer;
  transform: scale(1.3);
}
.showcase .seat:not(.occupied):hover {
  cursor: default;
  transform: scale(1);
}



.showcase li {
  display: flex;
  align-items: center;
  justify-content: center;
}
.showcase li small {
  margin-left: 2px;
}
.row {
  display: flex;
}

/* .screen {
  background-color: #fff;
  height: 90px;
  width: 100%;
  margin: 15px 0;
  transform: rotateX(-45deg);
  box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
} */

p.text {
  margin: 5px 0;
}
p.text span {
  color: rgb(36, 175, 209);
}

</style>