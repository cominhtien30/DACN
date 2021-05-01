<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\User;
//use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    public function Index(){
      //Auth::logout();
      if (Auth::check()) {
        return redirect('/admin-dashboard');
      }
        return view('admin.login');
    }
    public function Dashboard(){
      if (Auth::user()->level==2) {
          Auth::logout();
          return view('admin.login');
      }else{
        return view('admin.dashboard');
      }
    }
    public function Login(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])){
          // code...
          $user=User::where('email', $email)->first();
          $name=$user->name;
          $level=$user->level;
          Session::put('id_user',$user->id);
          Session::put('name_admin',$name);
          Session::put('name_user',$name);
          Session::put('level',$level);
          if (Auth::user()->level==2) {
            Auth::logout();
            return redirect('/');
          }else{
            return view('admin.dashboard');
          }
          
        }else{
          $error="Sai Email Hoặc Mật Khẩu";
          return view('admin.login',compact('error'));

        }
      }
        public function Logout(){
          Auth::logout();
          return view('admin.login');
        }

        public function admin_list_user(Request $request){
          $user=new User();
          $list=$user::paginate(3);
          if ($request->page==null || $request->page==1 ) {
            $page=0;
          }else{
            $page=(($request->page) -1)*3;
          }
          return view('admin.list-user',compact('list'))->with('i',$page);
        }
        public function admin_update_name_user($id,Request $request){

          if(User::where('id',$id)->update(['name'=>$request->name])){
                $success='Cập Nhật Tên Thành Công';
                Session::put('success',$success );
                
          }
          return redirect()->route('admin-list-user');
        }
        public function admin_update_level_user($id,Request $request){

          if(User::where('id',$id)->update(['level'=>$request->level])){
                $success='Cập Nhật chức vụ với Thành Công';
                Session::put('success',$success );
                
          }
          return redirect()->route('admin-list-user');
        }
        public function admin_delete_user($id){
          $user=User::find($id);
          $name=$user->name;
          $success='Đã xóa '.$name.' ra khỏi danh sách';
          Session::put('success',$success );
          if(User::where('id',$id)->delete()){
            return redirect()->route('admin-list-user');
            
          }
        }
        public function admin_resetpass($id){
          if(User::where('id',$id)->update(['password'=>bcrypt(1)])){
            $warning='Mật Khẩu Sau Khi Được Reset Sẽ là : <p><h4>1</h4></p>';
            Session::put('warning',$warning );
          }
          return redirect()->route('admin-list-user');
        }
        public function admin_add_user(Request $request){
          $name=$request->name;
          $email=$request->email;
          $password=$request->password;
          $level=$request->level;
          $user= new User();
            if($user::where('email',$email)->first()){
                $error="Email Đã Tồn Tại";
                Session::put('error',$error );
                return redirect()->route('admin-list-user');
            }else{
                User::create([
                  'name'=>$name,
                  'email'=>$email,
                  'password'=>bcrypt($password),
                  'level'=>$level
                  
                ]);
                $success='Thêm Tài Khoản Thành Công';
                 Session::put('success',$success );
                return redirect()->route('admin-list-user');
            
            }
        }
}
