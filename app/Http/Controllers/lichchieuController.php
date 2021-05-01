<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class lichchieuController extends Controller
{
    public function admin_list_lich(Request $request){
        $list_rap=DB::table('rap')->get();

        $list_lich=$users = DB::table('lichchieu')
        ->join('phim', 'lichchieu.id_phim', '=', 'phim.id')
        ->join('rap', 'lichchieu.id_rap', '=', 'rap.id')
        ->join('phong', 'lichchieu.id_phong', '=', 'phong.id')
        ->select('lichchieu.*', 'phim.tenphim', 'rap.tenrap','phong.tenphong')
        ->paginate(5);
        if ($request->page==null || $request->page==1 ) {
            $page=0;
          }else {
              $page=(($request->page)-1)*5;
          }

        return view('admin.list-lichchieu',compact('list_rap'))->with('list_lich',$list_lich)->with('i',$page);
    }
    public function admin_delete_lich($id){
        DB::table('lichchieu')->where('id',$id)->delete();
        $success='Xóa Thành Công';
        Session::put('success',$success );
        return redirect()->route('admin-list-lich');
    }
    public function admin_detail_lich($id){
        $detail=DB::table('lichchieu')
        ->join('phim', 'lichchieu.id_phim', '=', 'phim.id')
        ->join('rap', 'lichchieu.id_rap', '=', 'rap.id')
        ->join('phong', 'lichchieu.id_phong', '=', 'phong.id')
        ->where('lichchieu.id',$id)
        ->select('lichchieu.*', 'phim.tenphim', 'rap.tenrap','rap.id as id_rap','phong.tenphong')
        ->first();
        $id_rap=$detail->id_rap;
        $list_phim=DB::table('phim')->get();
        $list_room=DB::table('phong')->where('id_rap',$id_rap)->get();
        return view('admin.edit-lichchieu',compact('detail'))->with('list_room',$list_room)
        ->with('list_phim',$list_phim);
    }
    public function admin_edit_lich($id, Request $request){
        $ngay=$request->ngay;
        $gio=$request->gio;
        $phim=$request->phim;
        $phong=$request->phong;
            $data=([
                'ngay'=>$ngay,
                'id_phim'=>$phim,
                'id_phong'=>$phong,
                'gio'=>$gio
            ]);
       $check= DB::table('lichchieu')
       ->where('gio',$gio)
       ->where('id_phong',$phong)
       ->where('id','<>',$id)
       ->where('ngay',$ngay)
       ->first();
        if($check){
            $error='Trùng Lịch rồi vui lòng kiểm tra giờ và phòng';
            Session::put('error',$error);
            return redirect()->route('admin-detail-lich',$id);
        }else{
            DB::table('lichchieu')->where('id',$id)->update($data);
             $success='Cập Nhật thành công';
            Session::put('success',$success );
            //echo"them thanh cong";
            return redirect()->route('admin-list-lich');
        }
        
       
        
    }
    public function admin_add_lich(){
        $list_rap=DB::table('rap')->get();
        return view('admin.add-lich',compact('list_rap'));
    }
    public function admin_insert_lich(Request $request,$id_rap){
        $rap=$id_rap;
        $ngay=$request->ngay;
        $gio=$request->gio;
        $phim=$request->phim;
        $phong=$request->phong;
        $check= DB::table('lichchieu')
       ->where('gio',$gio)
       ->where('id_phong',$phong)
       ->where('ngay',$ngay)
       ->first();
        
        
       
       if($ngay==null || $gio==null || $phim==null || $phong==null){
        $error='Không được bỏ trống !!';
        Session::put('error',$error);
        return redirect()->route('admin-add-lich');
       }
       $data=([
        'id_rap'=>$rap,
        'ngay'=>$ngay,
        'gio'=>$gio,
        'id_phim'=>$phim,
        'id_phong'=>$phong
   ]);
       if($check){
            $error='Trùng Lịch rồi vui lòng kiểm tra ngày giờ và phòng !!';
            Session::put('error',$error);
            return redirect()->route('admin-add-lich');
       }else{
            DB::table('lichchieu')->insert($data);
            $success='Thêm lịch chiếu thành công';
            Session::put('success',$success );
        //echo"them thanh cong";
             return redirect()->route('admin-list-lich');
       }
        
    }
    
}
