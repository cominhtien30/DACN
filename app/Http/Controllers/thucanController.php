<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class thucanController extends Controller
{
    public function admin_list_thucan(Request $request){
        $list=DB::table('thucan')->paginate(4);
        
        if ($request->page==null || $request->page==1 ) {
            $i=0;
          }else {
              $i=(($request->page)-1)*4;
          }
        return view('admin.list-thucan',compact('list'))->with('i',$i);
    }
    public function admin_add_thucan(){
        return view('admin.add-thucan');
    }
    public function admin_insert_thucan(Request $request){
        $ten=$request->tenthucan;
        $gia=$request->giathucan;
        echo $gia;
        $combo="combo";
        $fileanh=$request->file('image');
        $goc=$fileanh->getClientOriginalExtension();
        if($goc=='jpg' || $goc=='jpeg' || $goc='png'){
            $image=$combo."-".Str::random(3).rand(0,999).".".$goc;
            $data=array([
                'ten'=>$ten,
                'image'=>$image,
                'gia'=>$gia
            ]);
            $fileanh->move('public\uploads\thucan',$image);
            if (DB::table('thucan')->insert($data))
            {
                
                $success='Thêm Phòng thành công';
                Session::put('success',$success );
                return redirect()->route('admin-list-thucan');
             }

        }else{
            $error="File bạn chọn phải có đui jpg hoặc jpeg";
            return view('admin.add-thucan',compact('error'));
        }
       
        
    }
    public function admin_delete_thucan($id){
        $delete=DB::table('thucan')->whereId($id)->first();
        $path=public_path().'/uploads/thucan/'.$delete->image;
        unlink($path);
        DB::table('thucan')->where('id',$id)->delete();
        $success='Xóa Thành Công';
        Session::put('success',$success );
        return redirect()->route('admin-list-thucan');
    }
    public function  admin_detail_thucan($id){
        $detail=DB::table('thucan')->whereId($id)->first();
        return view('admin.edit-thucan',compact('detail'));
    }
    public function admin_update_thucan(Request $request, $id){
        $ten=$request->tenthucan;
        $gia=$request->giathucan;
        
        //xử lý file
        $combo="combo";
        $fileanh=$request->file('image');
        if($fileanh==null){
            $data=[
                'ten'=>$ten,
                'gia'=>$gia,
            ];
            DB::table('thucan')->whereId($id)->update($data);
        }else{
            $goc=$fileanh->getClientOriginalExtension();
            if($goc=='jpg' || $goc=='jpeg' || $goc=='png'){
                $image=$combo."-".Str::random(3).rand(0,999).".".$goc;
                $data=[
                    'ten'=>$ten,
                    'gia'=>$gia,
                    'image'=>$image
    
                ];
                $delete=DB::table('thucan')->whereId($id)->first();
                $path=public_path().'/uploads/thucan/'.$delete->image;
                 unlink($path);
                if (DB::table('thucan')->whereId($id)->update($data))
                {
                   
                    $fileanh->move('public\uploads\thucan',$image);
                    
                 }
    
            }else{
                $error="File bạn chọn phải có đui jpg hoặc jpeg,png";
                Session::put('error',$error);
                return redirect()->route('admin-detail-thucan',$id);
            }
        }
        $success='Cập Nhật thành công';
        Session::put('success',$success );
        //echo"them thanh cong";
        return redirect()->route('admin-list-thucan');
       

    }
}
