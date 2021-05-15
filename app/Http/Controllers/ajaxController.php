<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\phim;
use App\User;
use App\lichchieu;
use App\ghe;
use App\rap;
use App\ve;
use App\seat;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ajaxController extends Controller
{
    //
    public $quantity = 0;
    public function admin_get_rom_by_id_rap(Request $request){
      $id=$request->id;
        $room=DB::table('phong')
                ->join('rap','phong.id_rap','=','rap.id')->where('phong.id_rap',$id)
                ->select('phong.*','rap.tenrap')->orderByRaw('phong.tenphong DESC')->get();
                if ($request->page==null || $request->page==1 ) {
                  $i=0;
                }else {
                    $i=(($request->page)-1)*3;
                }
          
          $head='<table class="mb-0 table table-hover ">
          <thead class="thead-light">
          <tr>
        <th>Stt</th>
        <th>Tên Phòng</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
           ';

            $footer='</tr>
         
            </tbody>
          </table>';



        echo $head;
        foreach($room as $item){
        echo '
        
    <tbody>
      

      <tr>
        <th scope="row">'.$i++.'</th>
        <td>'.$item->tenphong.'</td>
        <td><a onclick="xacnhan()" href="/DACN/admin-delete-room/'.$item->id.'"><i class="fas fa-trash" ></i></a>  ||  <a href="/DACN/admin-detail-room/'.$item->id.'"><i class="fas fa-edit"></i></a> </td>';
         }
         ;
         echo $footer;
        

       
    }
    public function admin_get_rom_by_id_rap_dropdown(Request $r){
      $id=$r->id;
        $list_room=DB::table('phong')->where('id_rap',$id)->get();
        echo'<option>---Phòng---</option>';
        foreach($list_room as $item){
          echo '<option value="'.$item->id.'">'.$item->tenphong.' </option>
          ';
        }

    }
    
    public function admin_get_seat_by_id_room(Request $r){
      $id=$r->id;
      $list_a=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'A')->orderByRaw('so ASC')->get();
      
      echo'<div class="row">
      <div class="hang">A</div>
      ';
      foreach($list_a as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      $list_b=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'B')->orderByRaw('so ASC')->get();
      echo'<div class="row">
      <div class="hang">B</div>
      ';
      foreach($list_b as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      $list_c=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'C')->orderByRaw('so ASC')->get();
      echo'<div class="row">
      <div class="hang">C</div>
      ';
      foreach($list_c as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      $list_d=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'D')->orderByRaw('so ASC')->get();
      echo'<div class="row">
      <div class="hang">D</div>
      ';
      foreach($list_d as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      $list_e=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'E')->orderByRaw('so ASC')->get();
      echo'<div class="row">
      <div class="hang">E</div>
      ';
      foreach($list_e as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      $list_f=DB::table('ghe')->where('id_phong','=',$id)->where('hang', 'F')->orderByRaw('so ASC')->get();
      echo'<div class="row">
      <div class="hang">F</div>
      ';
      foreach($list_f as $item){
        echo'<div class="seat">'.$item->so.'</div>';
      }
      echo'</div>';
      echo'</div>';

    }
    public function admin_find_lich_by_rap(Request $r){
      $id=$r->id;
      $list = DB::table('lichchieu')
      ->join('phim', 'lichchieu.id_phim', '=', 'phim.id')
      ->join('rap', 'lichchieu.id_rap', '=', 'rap.id')
      ->join('phong', 'lichchieu.id_phong', '=', 'phong.id')
      ->where('rap.id','=',$id)
      ->select('lichchieu.*', 'phim.tenphim', 'rap.tenrap','phong.tenphong')
      ->get();
      $i=0;
      echo' <thead class="thead-light">
      <tr>
        <th>Stt</th>
        <th>Ngày</th>
        <th>Giờ</th>
        <th>Tên Phim</th>
        <th>Rạp</th>
        <th>Phòng</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>';
    
    foreach($list as $item){
      echo'<tr>
                                         
      <th scope="row">'.$i++.'</th>
    <td>'.$item->ngay.'</td>
      <td>'.$item->gio.'</td>
      <td>'.$item->tenphim.'</td>
      <td>'.$item->tenrap.'</td>
      <td>'.$item->tenphong.'</td>
      <td><a onclick="xacnhan()" href="/DACN/delete-lich/'.$item->id.'"><i class="fas fa-trash" ></i></a>  ||  <a href="/DACN/edit-lich/'.$item->id.'"><i class="fas fa-edit"></i></a> </td>
     
    </tr>';
    echo'</tbody>';
    }
    }
    public function admin_find_lich_by_room(Request $r){
      $id=$r->id;
      $list = DB::table('lichchieu')
      ->join('phim', 'lichchieu.id_phim', '=', 'phim.id')
      ->join('rap', 'lichchieu.id_rap', '=', 'rap.id')
      ->join('phong', 'lichchieu.id_phong', '=', 'phong.id')
      ->where('phong.id','=',$id)
      ->select('lichchieu.*', 'phim.tenphim', 'rap.tenrap','phong.tenphong')
      ->get();
      $i=0;
      echo' <thead class="thead-light">
      <tr>
        <th>Stt</th>
        <th>Ngày</th>
        <th>Giờ</th>
        <th>Tên Phim</th>
        <th>Rạp</th>
        <th>Phòng</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>';
    
    foreach($list as $item){
      
      echo'<tr>
                                         
      <th scope="row">'.$i++.'</th>
    <td>'.$item->ngay.'</td>
      <td>'.$item->gio.'</td>
      <td>'.$item->tenphim.'</td>
      <td>'.$item->tenrap.'</td>
      <td>'.$item->tenphong.'</td>
      <td><a onclick="xacnhan()" href="admin-add-lich/'.$item->id.'"><i class="fas fa-trash" ></i></a>  ||  <a href="edit-lich/'.$item->id.'"><i class="fas fa-edit"></i></a> </td>
     
    </tr>';
    echo'</tbody>';
    }
    }
    public function get_form_bugsg(Request $r){
      $id=$r->id;
      $room=DB::table('phong')->where('id_rap',$id)->get();
      $phim=DB::table('phim')->where('trangthai','1')->get();
      echo'<form class="needs-validation" novalidate action="/DACN/admin-add-lich/'.$id.'" method="POST">'.
      csrf_field().'
      <div class="form-row">
        <div class="col-md-12 mb-3">
          <label for="validationCustom01">Tên Phim</label>
          <select name="phim" id="" class="form-control" required>
          <option selected value="">--Chọn Phim--</option>';
          foreach($phim as $item){
            echo '<option  value="'.$item->id.'"> '.$item->tenphim.'</option>';
          }
           
            
     echo '</select>
        </div>
        <div class="col-md-4 select-outline">

          <label for="inputState">Ngày</label>
          <input type="date" name="ngay" class="form-control" id="validationCustom01" placeholder="Ngày" value="" required>
          <br />
        </div>
        <div class="col-md-4 select-outline">
          <label for="inputState">giờ</label>
          <select name="gio" id="" class="form-control" required>
              
              <option selected value="8:00"> 8:00</option>
              <option  value="11:30"> 11:30</option>
              <option  value="14:30"> 14:30</option>
              <option  value="18:00"> 18:00</option>
              <option  value="21:00"> 21:00</option>
          </select>
        </div>
        <div class="col-md-4 select-outline">
        <label for="inputState">Phòng</label>
        <select name="phong" id="" class="form-control" required>';
        foreach($room as $item){
          echo'<option selected  value="'.$item->id.'">'.$item->tenphong.'</option>';
        }
        echo'</select>
        <br />
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Thêm Vào</button>
  </form>';

      
    }
    public function admin_find_phim(Request $r){
      $key=$r->key;
      $list=DB::table('phim')->where('tenphim', 'like', '%'.$key.'%')->get();
     
     $i=0;
     echo'<thead class="thead-light">
     <tr>
       <th>Stt</th>
       <th>Tên Phim</th>
       <th>Đạo Diễn</th>
       <th>Diễn Viên</th>
       <th>Thời Lượng</th>
       <th>Ngày Khởi Chiếu</th>
       <th>Trạng Thái</th>
       <th>Nội Dung</th>
       <th>Ảnh</th>
       <th>Thao Tác</th>
     </tr>
   </thead>
   <tbody>';
   foreach($list as $item){
     echo'<tr>
     <th scope="row">'.$i.'</th>
     <td>'.$item->tenphim.'</td>
     <td>'.$item->daodien.'</td>
     <td>'. substr($item->dienvien, 0, 20)."..." .'</td>
     <td>'.$item->thoiluong.'</td>
     <td>'.$item->ngaykhoichieu.'</td>';
     if($item->trangthai==0){
       echo'<td>Sắp Khởi Chiếu</td>';
     }else{
       echo' <td>Đang Khởi Chiếu</td>';
     }
     echo'<td>'.substr($item->noidung, 0, 25)."...".' </td>
     <td><img width="42" src="public/uploads/phim/'.$item->image.'" alt=""></td>
       <td><a onclick="xacnhan()" href="/DACN/admin-delete-phim/'.$item->id.'"><i class="fas fa-trash" ></i></a>  ||  <a href="/DACN/admin-detail-phim/'.$item->id.'"><i class="fas fa-edit"></i></a> </td>
      
     </tr>';
      }
     echo' </tbody>';
   }


    //////user/////
   

   
     public function list_ghe(Request $req){
      
      $ghe= $req->allseat;
       $quantity =0;
      $id_lich = $req->id_lich;
       for ($i=1; $i < count($ghe) ; $i++) {
       
           
            $quantity++;
            
        }
      Session::put('quantity',$quantity);
      Session::put('seat',$ghe);
      Session::put('id_lich',$id_lich);
         
      
    }
    public function dat_combo(Request $r){
       $cb = $r->allcombo;
      Session::put('combo',$cb);
      $total = $r->total;
       Session::put('totalprice',$total);
        for ($i=1; $i < count($cb) ; $i++) {
         
             
               Cart::add($cb[$i], 'cb', 1, 0, 0);
              
          }
    //    $seat = Session::get('totalprice');
    //   // $quan = Session::get('quantity');
    //   // $total = $quan * 70000;
    //   // $t = 0;
    //   // for($i =0;$i<count($cb);$i++){
    //   //   $t= $t + ($cb[$i]['idcb'] * $cb[$i]['slcb']);
    //   // }
    //  // echo $seat;
    //  $seat = Session::get('quantity');
    //  echo count($seat);
     
    }
    public function insert_ghe(){
      $id_lich = Session::get('id_lich');
       $id_user = Auth::user()->id;
        $seat = Session::get('seat');
        $combo = Session::get('combo');
      for ($i=1; $i< $seat  ; $i++) { 
            
        DB::table('ve')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_ghe'=>$seat[$i]]);
      }
              
              
      for ($i=0; $i< $combo  ; $i++) { 
                      
        DB::table('dat_combo')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_combo'=>$combo[$i]['idcb'],'soluong'=>$combo[$i]['slcb']]);
      }
    }
    
  public function CheckGhe(Request $r){
        
    echo $r->id;
}

}
