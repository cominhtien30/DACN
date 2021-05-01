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
}
