<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\product;
use App\Http\Requests\admin\site\registercusRequest;
use App\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;
use App\detail;
use App\Http\Requests\admin\site\checkoutRequest;

class defaultController extends Controller
{
    public function logina(){
        return view('client.frontend.logina');
    }
    public function registera(){
        return view('client.frontend.registera');
    }
    public function home()
    {
        $data = DB::table('products')->limit(12)->orderBy('created_at', 'desc')
        ->get();
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        return view('client.frontend.home',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'product'=>$data
        ]);
    }
    public function aboutUs()
    {
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        return view('client.frontend.aboutUs',[
            'producttype'=>$producttype,
            'user'=>$user,
            'ncc'=>$ncc
        ]);
    }
    public function Contact()
    {
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        return view('client.frontend.contact',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'user'=>$user
        ]);
    }
    public function product_type()
    {
        $product = DB::table('product_types')->get();
        return view ('admin.site.addproduct',[
            'product'=>$product
        ]);
       
        //
    }
    public function relate($id)
    {
        $data['producttype_id'] = product::find($id);
        $product = $data['producttype_id']->producttype_id;
        $user = DB::table('products')->where('producttype_id',$product)->whereNotIn('id',[$id])->inRandomOrder()->limit(3)->get();
    //     return view('admin.site.cartoff1',[
    //         'result2'=>$users,
    //    ]);
    // dd($users);
    dd($user);
    }
    public function relatetype($id)
    {
       $abc=DB::table('products') ->where('producttype_id', $id)->limit(3)->get();
       return view('client.frontend.detail',[
        'relatetype'=>$abc,
        
    ]);
       }
    public function relateNCC($id)
    {
       $abc=DB::table('products') ->where('ncc_id', $id)->limit(3)->get();
       return view('client.frontend.detail',[
        'relatencc'=>$abc,
        
    ]); 
    }
    public function random()
    {
    $a=DB::table('products')->inRandomOrder()->limit(5)->get();
    dd($a);
        //
    }
    public function ran()
    {
        $a=DB::table('carts')->select('TenSP','image','price','quantity')->groupBy('TenSP')->get();
        dd($a);
    }
    public function logincus()
    {
        return view('client.frontend.logincus');
    }
    public function registercus()
    {
        return view('client.frontend.registercus');
    }
    public function post_logincus(Request $request){ 
        $email = $request->UID;
        $password = $request->password;
        $result = DB::table('customers')->where('UID',$email)->where('password',$password)->first();
        if($result){
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->Ten);
            Session::put('customer_DC',$result->Dia_chi);
            Session::put('customer_SDT',$result->SĐT);
            Session::put('customer_image',$result->image);
            return redirect('home');
        } else {
            return redirect()->back()->with('login_fail', "Thông tin tài khoản không chính xác");
        }
    }
    public function post_registercus(registercusRequest $req)
    {
        $req->merge(['Password'=>bcrypt($req->Password)]);//mã hóa mật khẩu
        $result=Customer::create($req->all());
        if($result){
            return redirect()->back()->with('create','Bạn đã tạo tài khoản thành công');
        }
        else{
            return redirect()->back()->with('fail','Bạn phải tạo lại tài khoản');
        }
        
    }
    public function logoutcus()
    {
            Session::put('customer_id','');
            return redirect('home');
    }
    // public function adddetail(Request $req)
    // {
    //     $result=detail::create($req->all());
    //     if($result){
    //         return redirect()
	// 	->route('checkout', [$result->customer_id]);
    // }
// }
    public function adddetail(Request $req)
    {
        $result=detail::create($req->all());
        if($result){
            return redirect()
		->route('checkout', [$result->customer_id]);
    }
}
    public function checkout($id)
    {
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $users = DB::table('carts')->where('customer_id', $id)->where('check', '0')->distinct()->get();
        $detail = DB::table('details')->where('customer_id', $id)->where('checks', '0')->orderBy('created_at', 'desc')->limit(1)->get();
        return view('client.frontend.checkout',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'cart'=>$users,
            'detail'=>$detail
        ]);
    }
    
}
