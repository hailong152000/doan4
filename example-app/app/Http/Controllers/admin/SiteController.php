<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\site\registerRequest;
use App\Http\Requests\admin\site\loginRequest;
use App\product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    //return view login
    public function index()
    {
        return view('admin.site.dashboard');
    }
    public function login()
    {
        return view('admin.site.login');
    }
    //return view register
    public function register()
    {
        return view('admin.site.register');
    }
    public function post_login(loginRequest $req)
    {   
        $logincustomer = Auth::attempt(['email' => $req->email, 'password' => $req->password ],$req->remember);
        if($logincustomer) {
            return redirect('admin/dashboard');
        }
        else {
            return redirect()->back()->with('login_fail', "Thông tin tài khoản không chính xác");
        }
        

    //    return response(Auth::attempt(['email' => $req->email, 'password' => $req->password,$req->remember]));
    }
    public function post_register(registerRequest $req)
    {
        $req->merge(['password'=>bcrypt($req->password)]);//mã hóa mật khẩu
        $result=User::create($req->all());
        if($result){
            return redirect()->back()->with('create_success','Bạn đã tạo tài khoản thành công');
        }
        else{
            return redirect()->back()->with('create_fail','Bạn phai tao lai tai khoan');
        }
        
    }

    public function addproduct()
    {
        $product = DB::table('product_types')->get();
        $products = DB::table('nccs')->get();
        return view ('admin.site.addproduct',[
            'product'=>$product,
            'products'=>$products
        ]);
        // $products = DB::table('nccs')->get();
        // return view('admin.site.addproduct',[
        //     'products'=>$products
        // ]);
    }
    public function post_addproduct(Request $req)
    {
        // $result=Product::create($req->all());
        $image = $req->file('image');
        $storedPath = $image->move('images', $image->getClientOriginalName());  
        $abc=$image->getClientOriginalName();
        $result=product::create(
            [
                'name'=>$req->name,
                'producttype_id'=>$req->producttype_id,
                'image'=>$abc,
                'price'=>$req->price,
                'quantity'=>$req->quantity,
                'ncc_id'=>$req->ncc_id,
                'description'=>$req->description
            ]);
            if($result){
                return redirect()->back()->with('create_success','Thêm sản phẩm thành công');
            }
            else{
                return redirect()->back()->with('create_fail','Thêm Sản phẩm thất bại');
            }
        // if($result){
        //     return redirect()->back()->with('create_success','Thêm sản phẩm thành công');
        // }
        // else{
        //     return redirect()->back()->with('create_fail','Thêm Sản phẩm thất bại');
        // }
    }
    public function logoutcus()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

