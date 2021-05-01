<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class rapController extends Controller
{
    //
    public function admin_list_rap(){
      $list=DB::table('rap')->get();

      return view('admin.list-rap',compact('list'))->with('i',1);
    }
    public function admin_add_rap(Request $request){
        if (DB::table('rap')->insert(['tenrap'=>$request->tenrap,'thongtin'=>$request->thongtin]))
        {
          $success='Thêm rạp thành công';
          Session::put('success',$success );
            return redirect()->route('admin-list-rap');
        }  else {
          $error='Đã có lỗi xảy ra';
          return redirect()->route('list-rap',compact('error'));

          }
    }
    public function admin_delete_rap($id){
          DB::table('rap')->where('id',$id)->delete();
          $success='Xóa Thành Công';
          Session::put('success',$success );
          return redirect()->route('admin-list-rap');
    }
    public function admin_detail_rap($id){
        $detail=DB::table('rap')->where('id',$id)->first();
        return view('admin.edit-rap',compact('detail'));
    }
    public function admin_update_rap($id,Request $request){
      $name=$request->name;
      $thongtin=$request->thongtin;
      $updates=[
      'tenrap'=>$name,
      'thongtin'=>$thongtin
    ];

      if (DB::table('rap')->whereId($id)->update($updates)) {
        $success='Cập nhật thành công';
          Session::put('success',$success );
          return redirect()->route('admin-list-rap');
      }
    }
    public function list_rap_dropdow(){
      $list_rap=DB::table('rap')->get();
     return view('admin.list-ghe',compact('list_rap'));
    }
    //userController.php
    //  public function header_rap()
    // {
    //   $list_rap = DB::table('rap')->get();
    //   return redirect('user.layout',compact('list_rap'));
    // }
}
