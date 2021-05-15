<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\phim;
use App\User;
use App\lichchieu;

use App\rap;

class phimController extends Controller
{
    //
    public function admin_list_phim(Request $request){
        $string=new Str();
        $list=DB::table('phim')->orderByRaw('id DESC')
                  ->paginate(5);
                  if ($request->page==null || $request->page==1 ) {
                    $page=0;
                  }else {
                      $page=(($request->page)-1)*5;
                  }
  
          return view('admin.list-phim',compact('list'))->with('i',$page)->with('string',$string);
          //để đếm số thứ tự thì lúc nào i cũng bằng số trang trừ cho 1
      }
             
    public function admin_add_phim(Request $request){
        $tenphim=$request->tenphim;
        $tentienganh=$request->tentienganh;
        $nsx=$request->nsx;
        $theloai=$request->theloai;
        $quocgia=$request->quocgia;
        $daodien=$request->daodien;
        $dienvien=$request->dienvien;
        $thoiluong=$request->thoiluong;
        $ngaykhoichieu=$request->ngaykhoichieu;
        $trangthai=$request->trangthai;
        $trailer=$request->trailer;
        $noidung=$request->noidung;
       // $giave=$request->giave;
        //xử lý file
        $phim="phim";
        $fileanh=$request->file('image');
        $goc=$fileanh->getClientOriginalExtension();
        if($goc=='jpg' || $goc=='jpeg' || $goc='png'){
            $image=$phim."-".Str::random(3).rand(0,999).".".$goc;
            $data=array([
                'tenphim'=>$tenphim,
                'tentienganh'=>$tentienganh,
                'nsx'=>$nsx,
                'theloai'=>$theloai,
                'quocgia'=>$quocgia,
                'daodien'=>$daodien,
                'dienvien'=>$dienvien,
                'thoiluong'=>$thoiluong,
                'ngaykhoichieu'=>$ngaykhoichieu,
                'trangthai'=>$trangthai,
                'trailer'=>$trailer,
                'noidung'=>$noidung,
               // 'giave'=>$giave,
                'image'=>$image

            ]);
            $fileanh->move('public\uploads\phim',$image);
            if (DB::table('phim')->insert($data))
            {
                
                $success='Thêm Phòng thành công';
                Session::put('success',$success );
                //echo"them thanh cong";
                return redirect()->route('admin-list-phim');
             }

        }else{
            $error="File bạn chọn phải có đui jpg hoặc jpeg";
            return view('admin.add-phim',compact('error'));
        }
       
        
    }
    public function admin_delete_phim($id){
        $delete=DB::table('phim')->whereId($id)->first();
        if($delete->type=="Off"){
            $path=public_path().'/uploads/phim/'.$delete->image;
            unlink($path);
        }
        DB::table('phim')->where('id',$id)->delete();
        $success='Xóa Thành Công';
        Session::put('success',$success );
        return redirect()->route('admin-list-phim');
    }
    public function admin_detail_phim($id){
        $detail=DB::table('phim')->where('id', $id)
                  ->first();
        return view('admin.edit-phim',compact('detail'));
    }
    public function admin_update_phim($id, Request $request){
        $tenphim=$request->tenphim;
        $tentienganh=$request->tentienganh;
        $nsx=$request->nsx;
        $theloai=$request->theloai;
        $quocgia=$request->quocgia;
        $daodien=$request->daodien;
        $dienvien=$request->dienvien;
        $thoiluong=$request->thoiluong;
        $ngaykhoichieu=$request->ngaykhoichieu;
        $trangthai=$request->trangthai;
        $trailer=$request->trailer;
        $noidung=$request->noidung;
        $giave=$request->giave;
        //xử lý file
        $phim="phim";
        $fileanh=$request->file('image');
        if($fileanh==null){
            $data=[
                'tenphim'=>$tenphim,
                'tentienganh'=>$tentienganh,
                'nsx'=>$nsx,
                'theloai'=>$theloai,
                'quocgia'=>$quocgia,
                'daodien'=>$daodien,
                'dienvien'=>$dienvien,
                'thoiluong'=>$thoiluong,
                'ngaykhoichieu'=>$ngaykhoichieu,
                'trangthai'=>$trangthai,
                'trailer'=>$trailer,
                'noidung'=>$noidung,
               // 'giave'=>$giave,
            ];
            DB::table('phim')->whereId($id)->update($data);
        }else{
            $goc=$fileanh->getClientOriginalExtension();
            if($goc=='jpg' || $goc=='jpeg' || $goc=='png'){
                $image=$phim."-".Str::random(3).rand(0,999).".".$goc;
                $data=[
                    'tenphim'=>$tenphim,
                    'tentienganh'=>$tentienganh,
                    'nsx'=>$nsx,
                    'theloai'=>$theloai,
                    'quocgia'=>$quocgia,
                    'daodien'=>$daodien,
                    'dienvien'=>$dienvien,
                    'thoiluong'=>$thoiluong,
                    'ngaykhoichieu'=>$ngaykhoichieu,
                    'trangthai'=>$trangthai,
                    'trailer'=>$trailer,
                    'noidung'=>$noidung,
                    //'giave'=>$giave,
                    'image'=>$image
    
                ];
                $delete=DB::table('phim')->whereId($id)->first();
                $path=public_path().'/uploads/phim/'.$delete->image;
                 unlink($path);
                if (DB::table('phim')->whereId($id)->update($data))
                {
                   
                    $fileanh->move('public\uploads\phim',$image);
                    
                 }
    
            }else{
                $error="File bạn chọn phải có đui jpg hoặc jpeg,png";
                Session::put('error',$error);
                return redirect()->route('admin-detail-phim',$id);
            }
        }
        $success='Cập Nhật thành công';
        Session::put('success',$success );
        //echo"them thanh cong";
        return redirect()->route('admin-list-phim');
       
        
    }
    ////////////////////////////////// USER ////////////////////////////////////////////////
    public function chitietphim($id)
    {
        session()->forget(['id_lich', 'seat','combo','totalprice','hinhanh','quantity','id_lich']);
      //   session()->forget('id_lich');
        session()->forget('seat');
        session()->forget('combo');
        $chitiet=DB::table('phim')->where('id', $id)
                  ->first();
        $tenphim = $chitiet->tenphim;
        $hinhanh = $chitiet->image;
        Session::put('tenphim',$tenphim);
        Session::put('hinhanh',$hinhanh);
         $lichchieu=DB::table('lichchieu')
        ->join('rap','rap.id','=','lichchieu.id_rap')
        ->select('rap.tenrap','lichchieu.id_rap')
        ->where('lichchieu.id_phim',$id)
        ->groupBy('rap.tenrap','lichchieu.id_rap')->distinct()
        ->get();  
        //check date
        $time=Carbon::now('Asia/Ho_Chi_Minh');
        $array_time =explode(" ",$time) ;
        $ngay=$array_time[0];
        $gio=$array_time[1];
        $check_ngay=lichchieu::get();
        foreach($check_ngay as $c){
            if($ngay>$c->ngay){
                $update=lichchieu::find($c->id);
                $update->status="Off";
                $update->save();
            }
        }
        $lich=lichchieu::where('id_phim',$id)->where('status',"On")->select('id_rap')->groupby('id_rap')->distinct()->get();
        
        for($i=0;$i<count($lich);$i++){
            $n=lichchieu::where([['id_phim',$id],['id_rap',$lich[$i]->id_rap]])->where('status',"On")->select('ngay')->groupby('ngay')->distinct()->get();
            for($j=0;$j<count($n);$j++){
                $t=lichchieu::where([['id_phim',$id],['id_rap',$lich[$i]->id_rap],['ngay',$n[$j]->ngay]])
                ->where('status',"On")->get();
                $n[$j]['gio']=$t;
            }
                                                 
            $lich[$i]['ngay']=$n;
        }
        $phimdangchieu = phim::where('trangthai', '1')->inRandomOrder()->limit(3)->get();
        //cmt
        $list_cmt=DB::table('cmtphim')
        ->join('users','users.id','=','cmtphim.id_user')
        ->where('id_phim',$id)->select('users.name','cmtphim.*')->orderBy('cmtphim.id', 'desc')->get();
        $count_cmt=DB::table('cmtphim')->where('id_phim',$id)->count();

        return view('user/chitietphim',compact('chitiet','lich','phimdangchieu','list_cmt','count_cmt'));
    }
    public function phim_dang_chieu(Request $request){
        $string=new Str();
        $list_dangchieu=DB::table('phim')->orderByRaw('id DESC')
                  ->paginate(5);
                  if ($request->page==null || $request->page==1 ) {
                    $page=0;
                  }else {
                      $page=(($request->page)-1)*5;
                  }
                  
        foreach ($list_dangchieu as $key) {
            
                $lichchieu=DB::table('lichchieu')
                ->join('rap','rap.id','=','lichchieu.id_rap')
                ->select('rap.tenrap','lichchieu.id_rap')
                ->where('lichchieu.id_phim',$key->id)
                ->groupBy('rap.tenrap','lichchieu.id_rap')->distinct()
                ->get();  
                $lich_details=lichchieu::where('id_phim',$key->id)->select('id_rap')->groupby('id_rap')->distinct()->get();
                
                for($i=0;$i<count($lich_details);$i++){
                    $n=lichchieu::where([['id_phim',$key->id],['id_rap',$lich_details[$i]->id_rap]])->select('ngay')->groupby('ngay')->distinct()->get();
                    // for ($k=0; $k <count($n) ; $k++) { 
                    //     $p=lichchieu::where([['id_phim',$id],['id_rap',$lich[$i]->id_rap],['ngay',$n[$k]->ngay]])->select('id_phong')->groupby('id_phong')->distinct()->get();
                    //     for($j=0;$j<count($p);$j++){
                    //         $t=lichchieu::where([['id_phim',$id],['id_rap',$lich[$i]->id_rap],['ngay',$n[$k]->ngay],['id_phong',$p[$j]->id_phong]])->get();
                    //         $p[$j]['gio']=$t;
                    //     }
                        
                    //     $n[$k]['id_phong']=$p;
                    // }
                    for($j=0;$j<count($n);$j++){
                        $t=lichchieu::where([['id_phim',$key->id],['id_rap',$lich_details[$i]->id_rap],['ngay',$n[$j]->ngay]])->get();
                        $n[$j]['gio']=$t;
                    }
                                                         
                    $lich_details[$i]['ngay']=$n;
                }
            
        }
        
        
          return view('user.phimdangchieu',compact('list_dangchieu','lich_details'))->with('i',$page)->with('string',$string);
          //để đếm số thứ tự thì lúc nào i cũng bằng số trang trừ cho 1
      }
 public function comment_user(Request $request){
        $id_user=Session::get('id_user');
        if(!isset($id_user)){
            echo'not login';
        }else{
            $id_phim=$request->id;
            $content=$request->content;
            $time=Carbon::now('Asia/Ho_Chi_Minh');
             $array_time =explode(" ",$time) ;
            $ngay=$array_time[0];
            $gio=$array_time[1];
            $data=(
                [
                'id_phim'=>$id_phim,
                 'id_user'=>$id_user,
                 'noidung'=>$content,
                 'ngay'=>$ngay,
                 'gio'=>$gio
                ]
            );
            if(DB::table('cmtphim')->insert($data)){
               // echo'đúng';
                $list_cmt=DB::table('cmtphim')->where('id_phim',$id_phim)
                ->join('users','users.id','=','cmtphim.id_user')
                ->select('users.name','cmtphim.*')->orderBy('cmtphim.id', 'desc')->get();
                foreach($list_cmt as $list){
                    echo'
                    <div class="comment comment--last">
                        <div class="comment__images">
                            <img alt="" src="http://placehold.it/50x50">
                        </div>
            
                        <a href="#" class="comment__author"><span class="social-used fa fa-facebook"></span>'.$list->name.'</a>
                        <p class="comment__date">'.$list->ngay.' | '.$list->gio .'</p>
                        <p class="comment__message">'.$list->noidung.'</p>
                        <a href="#" class="comment__reply">Reply</a>
                  </div>
                    ';
                }
            }
        }
       
      }
     
}
