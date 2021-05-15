<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use App\phim;
class apimoviesController extends Controller
{
    //

    public function index(Request $r){
        $client = new \GuzzleHttp\Client();
        $page=(int) $r->page;
        $popularMovies=$client->get('https://api.themoviedb.org/3/movie/popular?api_key='.config('services.tmdb.token').'&language=en-US&page='.$page.'') ;
        $json=json_decode($popularMovies->getBody());
        $list_popular=$json->results;
        return view('user.phimhot')->with('list_populars',$list_popular)->with('page',$page);
    }
    public function detail($id){
        $client = new \GuzzleHttp\Client();
        $popularMovies=$client->get('https://api.themoviedb.org/3/movie/'.$id.'?api_key='.config('services.tmdb.token').'&language=en-US') ;
        $chitiet=json_decode($popularMovies->getBody());
       
        $phimdangchieu = phim::where('trangthai', '1')->inRandomOrder()->limit(2)->get();
        return view('user.chitietPopular')->with('chitiet',$chitiet)->with('phimdangchieu',$phimdangchieu);
    }
    public function list_phim(Request $r){
        $client = new \GuzzleHttp\Client();
        if(isset($r->page) && $r->page>0){
           $countpage=10; // 1 trang co1 10 item
            $stt=($r->page*$countpage)-($countpage-1);
            $page_api=round($r->page/2);
            $popularMovies=$client->get('https://api.themoviedb.org/3/movie/popular?api_key='.config('services.tmdb.token').'&language=en-US&page='.$page_api.'') ;
            $json=json_decode($popularMovies->getBody());
            $list_popular=$json->results;
            if($r->page%2==0){
                $i=$countpage; 
                $countpage=count($list_popular);
            }else{
                $i=0;
            }
        }else{
            $stt=1;
            $i=0;
            $popularMovies=$client->get('https://api.themoviedb.org/3/movie/popular?api_key='.config('services.tmdb.token').'&language=en-US&page=1') ;
            $json=json_decode($popularMovies->getBody());
            $list_popular=$json->results;
            $countpage=count($list_popular)/2;
        }
        $list_bug=DB::table('phim')->get();
        return view('admin.list-phimonline')->with('list_populars',$list_popular)->with('countpage',$countpage)->with('i',$i)->with('stt',$stt)->with("list_bug",$list_bug);
    }
    public function insert_phim(Request $r){
        $client = new \GuzzleHttp\Client();
        $popularMovies=$client->
        get('https://api.themoviedb.org/3/movie/'.$r->id.'?api_key='.config('services.tmdb.token').'&language=en-US') ;
        $chitiet=json_decode($popularMovies->getBody());
      //lấy video của phim online nhé
      $get_video=$client->
      get('https://api.themoviedb.org/3/movie/'.$r->id.'/videos?api_key='.config('services.tmdb.token').'&language=en-US');
      $videos=json_decode($get_video->getBody());
        $data=array([
            'tenphim'=>$chitiet->title,
            'tentienganh'=>$chitiet->title,
            'nsx'=>$chitiet->homepage,
            'theloai'=>"NULL",
            'quocgia'=>$chitiet->original_language,
            'daodien'=>"NULL",
            'dienvien'=>"NULL",
            'thoiluong'=>$chitiet->runtime,
            'ngaykhoichieu'=>$chitiet->release_date,
            'trangthai'=>"1",
            'trailer'=>"https://www.youtube.com/embed/".$videos->results[0]->key,
            'noidung'=>$chitiet->overview,
            'image'=>$chitiet->poster_path,
            'type'=>"On"
        ]);
        if(DB::table('phim')->insert($data)){
            echo $r->id;
            
        }

    }
    public function get_video(){
        // $id=635302;
        // $client = new \GuzzleHttp\Client();
        // $get_video=$client->get('https://api.themoviedb.org/3/movie/'.$id.'/videos?api_key='.config('services.tmdb.token').'&language=en-US') ;
        // $videos=json_decode($get_video->getBody());
        // echo($videos->results[0]->key);
        // $phimdangchieu = phim::where('trangthai', '1')->inRandomOrder()->limit(2)->get();
        // return view('user.chitietPopular')->with('chitiet',$chitiet)->with('phimdangchieu',$phimdangchieu);
    }
}
