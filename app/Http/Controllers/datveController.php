<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\phim;
use App\User;
use App\lichchieu;
use App\ghe;
use App\rap;
use App\ve;
use Mail;

use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
class datveController extends Controller
{
    public  function datve($id)
    {
        
        $id_lichchieu=$id;
        $level=Session::get('level');
        $id_user=Session::get('id_user');
        if($level==2){
            $verify=DB::table('users')->where('id',$id_user)->first();
            $check=$verify->verify;
            if($check=='0'){
                return redirect()->route('verify');
            }
        }
        $lichchieu=lichchieu::where('id',$id)->first();
        $id_phong = $lichchieu->id_phong;
        $ghe=ghe::where('id_phong',$id_phong)->select('hang')->groupby('hang')->distinct()->get();
        for($i=0;$i<count($ghe);$i++){
            $g=ghe::where([['id_phong',$id_phong],['hang',$ghe[$i]->hang]])->get();
            $ghe[$i]['so']=$g;
        }
        $ghe_dat=ghe::where('id_phong',$id_phong);
        $vee=ve::where('id_lichchieu',$id)->first();
        
        return view('user/datve',compact('lichchieu','ghe','vee','ghe_dat','id_lichchieu'));
    }
    public function getcombo(){
        $soluong = Cart::count();
        
        $combo = DB::table('thucan')->limit(4)->get();
        return view('user.combo',compact('combo','soluong'));
    }

    public function thanhtoan(){
        
        
        return view('user.thanhtoan');
    }
    public function test(){
        $id_lich = Session::get('id_lich');
       $id_user = Auth::user()->id;
          $seat = Session::get('seat');
        for ($i=1; $i< $seat  ; $i++) { 
            
            DB::table('ve')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_ghe'=>$seat[$i]]);
        }
              
        //       $combo = Session::get('combo');
        //       for ($i=0; $i< $combo  ; $i++) { 
                      
        //         DB::table('dat_combo')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_combo'=>$combo[$i]['idcb'],'soluong'=>$combo[$i]['slcb']]);
        //           }
        //echo $id_user;
    }
    public function success(){
        $id_lich = Session::get('id_lich');
        $id_user = Auth::user()->id;
        $seat = Session::get('seat');
        $countSeat=count($seat);
        $combo = Session::get('combo');
        $total = Session::get('totalprice');
        $countCombo=null;
        $sendCombo=null;
        
        
        for ($i=1; $i< sizeof($seat)  ; $i++) { 
            
            DB::table('ve')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_ghe'=>$seat[$i]]);
            DB::table('ghe')->where('id',$seat[$i])->update(array('status'=>1));
            
          } 
                  
        if($combo!=null){
            $countCombo=count($combo); 
            for ($i=0; $i< sizeof($combo)  ; $i++) { 
                          
                DB::table('dat_combo')->insert(['id_lichchieu'=>$id_lich,'id_user'=>$id_user,'id_combo'=>$combo[$i]['idcb'],'soluong'=>$combo[$i]['slcb']]);
              }
              
            $sendCombo=DB::table('dat_combo')
            ->join('thucan', 'dat_combo.id_combo', '=', 'thucan.id')
            ->where('dat_combo.id_user',$id_user)->distinct()->orderByDesc('dat_combo.id')->limit($countCombo)
            ->get();
        }     
        
        $sendTicket=DB::table('ve')
        ->join('lichchieu', 'lichchieu.id', '=', 've.id_lichchieu')
        ->join('phim', 'phim.id', '=', 'lichchieu.id_phim')
        ->join('rap', 'rap.id', '=', 'lichchieu.id_rap')
        ->join('ghe','ghe.id','ve.id_ghe')
        ->where('ve.id_user',$id_user)->distinct()->orderByDesc('ve.id')->limit($countSeat-1 )
        ->get();
       
        $time_ticket=DB::table('lichchieu')
        ->join('rap', 'lichchieu.id_rap', '=', 'rap.id')
        ->join('phong', 'lichchieu.id_phong', '=', 'phong.id')
        ->where('lichchieu.id', $id_lich)
        ->select('lichchieu.*', 'rap.tenrap','phong.tenphong')
        ->first();

        
        $email=Auth::user()->email;
  
          $data=[
            'name'=>'tien',
            'code'=>'123456',
            'ticket'=>$sendTicket,
            'time'=>$time_ticket,
            'sendCombo'=>$sendCombo,
          ];
          Mail::send('user.Ticket', $data, function ($message) use ($email) {
            $message->from('lop11a6.nhom6@gmail.com', 'BugCinema');
            $message->to($email, 'You');
            $message->subject('BUGCINE - THANH TOÁN DỊCH VỤ');
    
          });
  
        return view('user.thanhcong');
    }
   
    public function create(Request $request)
    {   
        $total = Session::get('totalprice');
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $id_lich = Session::get('id_lich');
        $id_user = Auth::user()->id;
        $seat = Session::get('seat');
        $countSeat=count($seat);
        $combo = Session::get('combo');
        $vnp_TmnCode = "ZRXRQVOJ"; //Mã website tại VNPAY 
        $vnp_HashSecret = "GMAUJNQYSYLENMNPEEYSUVLOZDMTKRPN"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/DACN/thanhcong";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ BUGCINE";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $total * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
        
        
         
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_BankCode" => "NCB",
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           //$vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            
            
           
           
              //
            //   $request->session()->forget(['id_lich', 'seat','combo','totalprice','hinhanh','quantity','id_lich']);
            // //   session()->forget('id_lich');
            //   session()->forget('seat');
            //   session()->forget('combo');
              
        }
        return redirect($vnp_Url);
    }

    public function return(Request $request)
    {
        
    $url = session('url_prev','/');
    if($request->vnp_ResponseCode == "00") {
        // $this->apSer->thanhtoanonline(session('cost_id'));
        // return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
        //return redirect('user.thanhcong');
      //  DB::table('test')->insert(['test'=>'sadsad','sl'=>'sdsds']);
           
    }
    session()->forget('url_prev');
    return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
