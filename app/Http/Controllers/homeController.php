<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    public function menu_rap()
    {
        $list_rap = DB::table('rap')->get();
        view()->share(compact('list_rap_menu'));
    }
    public function index()
    {
        $show_product = DB::table('phim')->where('trangthai','1')
                                        ->limit(6)
                                        ->get();
        $show_product_ = DB::table('phim')->where('trangthai','0')
                                        ->limit(8)
                                        ->get();
        return view('user.home',compact('show_product','show_product_'));
    }
    
}
