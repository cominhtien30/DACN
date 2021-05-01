<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gheController extends Controller
{
    //
    public function admin_list_ghe(){
        return view('admin.list-ghe');
    }
}
