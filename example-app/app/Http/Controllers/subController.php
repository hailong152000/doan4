<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class subController extends Controller
{
   
    public function service()
    {
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        return view('client.frontend.service',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'user'=>$user
        ]);
    }
}
