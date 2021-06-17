<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=product::all();
        return view ('admin.site.allproduct',[
            'Product'=>$data
        ]);
        //
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
        $image = $request->file('image');
        $storedPath = $image->move('images', $image->getClientOriginalName());  
        $abc=$image->getClientOriginalName();
        $update=product::where('id',$id)->update(
        [
            'name'=>$request->name,
            'producttype_id'=>$request->producttype_id,
            'image'=>$abc,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'ncc_id'=>$request->ncc_id,
            'description'=>$request->description
        ]);
        if($update){
            return redirect()->back()->with('create_success','Sửa sản phẩm thành công');
        }
        else{
            return redirect()->back()->with('create_fail','Sửa Sản phẩm thất bại');
        }

    
    // $data=product::where('id',$id)
    // ->get();
    // $result=$data[0];
    // return view('admin.site.updateproduct',compact('result'));



    }
    public function getUpdate(Request $request, $id)
    {
        // echo "Văn Vinh";
        // echo $id;
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $data=product::where('id',$id)->get();
        // dd($products);
        // dd($product);
        // dd($data);
        // $result=$data[0];
        return view ('admin.site.updateproduct',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'result'=>$data[0]
        ]);
        // $data=product::where('id',$id)
        // ->get();
        // $result=$data[0];
        // return view('admin.site.updateproduct',compact('result'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $Request, $id)
    {
        $data=product::where('id',$id)->delete();
        return redirect('admin/product');
    }
    public function delete(Request $Request, $id)
    {
        $data=product::where('id',$id)->delete();
        return redirect('admin/product');
    }
}
