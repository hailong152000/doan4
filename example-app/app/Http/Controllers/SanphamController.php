<?php

namespace App\Http\Controllers;

use App\ncc;
use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=product::all()->limit(6);
        $data = DB::table('products')->limit(6)->orderBy('created_at', 'desc')
        ->get();
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        return view ('client.frontend.index',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'products'=>$data,
            'user'=>$user,
            'random'=>$a
        ]);
    }
    public function getdatabyID(Request $request, $id)
    {
        // echo "Văn Vinh";
        // echo $id;
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        $data=product::where('id',$id)
        ->get();
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        $dataa['producttype_id'] = product::find($id);
        $product1 = $dataa['producttype_id']->producttype_id;
        $user1 = DB::table('products')->where('producttype_id',$product1)->whereNotIn('id',[$id])->inRandomOrder()->limit(3)->get();
        $datab['ncc_id'] = product::find($id);
        $product2 = $datab['ncc_id']->ncc_id;
        $user2 = DB::table('products')->where('ncc_id',$product2)->whereNotIn('id',[$id])->inRandomOrder()->limit(5)->get();
        // $result=$data[0];
        return view('client.frontend.detail',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'user'=>$user,
            'result'=>$data[0],
            'random'=>$a,
            'type'=>$user1,
            'NhaCC'=>$user2
            
        ]);
    }
    public function getdatabyLoaiSP(Request $request, $id)
    {
        // echo "Văn Vinh";
        // echo $id;
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $type=DB::table('product_types')->where('producttype_id',$id)->get();
        $data=product::where('producttype_id',$id)->paginate(6);
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        return view('client.frontend.producttype',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'abc'=>$type,
            'result'=>$data,
            'random'=>$a
        ]);
        // dd($result);
    }
    public function getdatabyNCC(Request $request, $id)
    {
        // echo "Văn Vinh";
        // echo $id;
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        // $type=DB::table('nccs')->where('NCC_id',$id)->get();
        $type=ncc::where('NCC_id',$id)->get();
        $data=product::where('ncc_id',$id)->paginate(6);
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        return view('client.frontend.ncc',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'abc'=>$type,
            'result'=>$data,
            'random'=>$a
        ]);
        // dd($result);
    }
    public function getdatabyIDPost(Request $request){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function searchncc(Request $request,$id){
        $result = DB::table('products')->where('name','like','%'.$request->key.'%')->where('ncc_id',$id)->get();
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        return view('client.frontend.searchncc',[
            'result'=>$result,
            'random'=>$a,
            'producttype'=>$producttype,
            'ncc'=>$ncc,    
        ]);
    }
    public function searchtype(Request $request,$id){
        $result = DB::table('products')->where('name','like','%'.$request->key.'%')->where('producttype_id',$id)->get();
        $a=DB::table('products')->inRandomOrder()->limit(5)->get();
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        return view('client.frontend.searchtype',[
            'result'=>$result,
            'random'=>$a,
            'producttype'=>$producttype,
            'ncc'=>$ncc,    
        ]);
    }
}
