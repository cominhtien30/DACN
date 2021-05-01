<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class roomController extends Controller
{
    public function admin_list_room(Request $request){
      $list=DB::table('phong')
                ->join('rap','phong.id_rap','=','rap.id')
                ->select('phong.*','rap.tenrap')->orderByRaw('phong.tenphong DESC')
                ->paginate(3);
                if ($request->page==null || $request->page==1 ) {
                  $page=0;
                }else {
                    $page=(($request->page)-1)*3;
                }

        return view('admin.list-room',compact('list'))->with('i',$page);
        //để đếm số thứ tự thì lúc nào i cũng bằng số trang trừ cho 1
    }
    public function admin_add_room(Request $request){
        if (DB::table('phong')->insert(['tenphong'=>$request->name,'id_rap'=>$request->rap]))
        {
          $success='Thêm Phòng thành công';
            Session::put('success',$success );
            return redirect()->route('admin-list-room');
        }
    }
    public function admin_list_rap_dropdown(){
      $list=DB::table('rap')->get();

      return view('admin.add-room',compact('list'));
    }
    public function admin_list_rap_tag(){
      $list_rap=DB::table('rap')->get();

      return view('admin.list-room',compact('list_rap'));
    }
    public function admin_delete_room($id){
          DB::table('phong')->where('id',$id)->delete();
          $success='Xóa Thành Công';
          Session::put('success',$success );
          return redirect()->route('admin-list-room');
    }
    public function admin_detail_room($id){
        $detail=DB::table('phong')->where('phong.id', $id)
                  ->join('rap','phong.id_rap','=','rap.id')
                  ->select('phong.tenphong','phong.id','rap.tenrap','rap.id as id_rap')->first();
        $list=DB::table('rap')->get();
        return view('admin.edit-room',compact('detail'))->with('list',$list);
    }
    public function admin_update_room($id,Request $request){
      $name=$request->name;
      $rap=$request->rap;
      if($rap==null){
        $updates=[
          'tenphong'=>$name,
         
        ];
      }else{
        $updates=[
          'tenphong'=>$name,
          'id_rap'=>$rap
        ];
      }
     

      if (DB::table('phong')->whereId($id)->update($updates)) {
        $success='Cập nhật thành công';
          Session::put('success',$success );
          return redirect()->route('admin-list-room');
      }
    }

}
