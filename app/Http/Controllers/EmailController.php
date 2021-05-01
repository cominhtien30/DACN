<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class EmailController extends Controller
{
  //
   public function sendEmail(Request $request)
  {
    $email=$request->email;

    //echo $email;
   // $details=$user = DB::table('users')->where('email', $email)->first();
    if($details= DB::table('users')->where('email', $email)->first()){
      $name=$details->name;
      $code=Str::random(3).rand(0,99);
      Session::put('codechangepass', $code);
      $data=[
        'name'=>$name,
        'code'=>$code
      ];
      Mail::send('user.mail', $data, function ($message) use ($email) {
        $message->from('lop11a6.nhom6@gmail.com', 'BugCinema');
        $message->to($email, 'You');
        $message->subject('Change Pass');

      });
      echo ('#thanhcong');

    }else{
      echo('#loi1');
    }


  }
  public function changepass(Request $request){
    $email=$request->email;
    $password=$request->pass;
    $code=$request->code;
    $code1=Session::get('codechangepass');
    if($code!=$code1){
      echo('#codesai');
    }else{
      DB::table('users')->where('email', $email)
      ->update(['password' => bcrypt($password)]);
      Session::forget('codechangepass');
      echo('#successchange');
    }
  }
  public function verify_email(){
    $email=Session::get('email_user');
    if($details= DB::table('users')->where('email', $email)->first()){
      $name=$details->name;
      $code=Str::random(3).rand(0,99);
      Session::put('code_verify', $code);
      $data=[
        'name'=>$name,
        'code'=>$code
      ];
      Mail::send('user.code_verify', $data, function ($message) use ($email) {
        $message->from('lop11a6.nhom6@gmail.com', 'BugCinema');
        $message->to($email, 'You');
        $message->subject('Xác Minh tài Khoản');

      });
    }
    return view('user.veryemail');
  }
  public function check_verify(Request $r){
    $id_user=Session::get('id_user');
  //  $level=Session::get('level');
   $code=$r->code;
    $code1=Session::get('code_verify');
    if($code!=$code1){
      echo('#myModal');
    }else{
      DB::table('users')
      ->where('id', $id_user)
      ->where('level', 2)
      ->update(['verify' => '1']);
      Session::forget('code_verify');
      echo('#myModal1');
    }
  }
}
