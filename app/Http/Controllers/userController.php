<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
  public function getLogin(){
   if (Auth::check()) {
    return redirect('profile');
   }
    return view('user.login');
  }
   public function profile()
  {
    $id=Session::get('id_user');
    $user=User::where('id',$id)->first();
  
    $total=DB::table('ve')
                ->join('lichchieu', 'lichchieu.id', '=', 've.id_lichchieu')
                ->join('phim', 'phim.id', '=', 'lichchieu.id_phim')
                ->join('rap', 'rap.id', '=', 'lichchieu.id_rap')
                ->select('ve.id_lichchieu','lichchieu.ngay','lichchieu.gio','rap.tenrap','phim.tenphim',
                DB::raw('count(id_lichchieu) as total')) 
                ->groupBy('ve.id_lichchieu','lichchieu.ngay','lichchieu.gio','rap.tenrap','phim.tenphim')
                ->where('ve.id_user',$id)
                ->get();
    
 
   return view('user.profile')->with('user',$user)->with('historyve',$total);
  }
  public function login(Request $request){
    $email=$request->input('user_email');
    $password=$request->input('user_password');

    if (Auth::attempt(['email' => $email, 'password' => $password])){
     // code...
     $user=User::where('email', $email)->first();
     $name=$user->name;
     $id=$user->id;
     
     $level=$user->level;
     Session::put('name_user',$name);
     Session::put('id_user',$id);
     Session::put('email_user',$email);
     Session::put('level',$user->level);

    // Session::put('level',$level);
     if (Auth::user()->level==2) {
      return redirect('/');
     }else{
      return redirect('/admin-dashboard');
     }

    }else{
     $error="Sai Email Hoặc Mật Khẩu";
     return view('user.login',compact('error'));

    }


  }
  public function dangkythanhvien(){
   return view('user.dangky');
  }
  public function dangky(Request $r){
   $user_name = $r->user_name;
   $user_phone = $r->user_phone;
   $user_email = $r->user_email;
   $user_pass = $r->user_pass;

   $old_user = User::where('email',$user_email)->first();
  // echo $old_user->name;
   if($old_user){
    echo'
    #myModal';
   }
   else{
    $pass=bcrypt($user_pass);
    if( DB::table('users')->insert(['name'=>$user_name,'email'=>$user_email,'password'=>$pass,'level'=>2])){
       if(Auth::attempt(['email' => $user_email, 'password' => $user_pass])){
       $user=User::where('email', $user_email)->first();
       $name=$user->name;
       $level=$user->level;
       $id=$user->id;
       Session::put('name_user',$name);
       Session::put('id_user',$id);
       Session::put('email_user',$user_email);
       Session::put('level',$user->level);
        echo '#myModal1';
       }

    }


   }
  }
  

}
