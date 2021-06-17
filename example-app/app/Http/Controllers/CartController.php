<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use App\detail;
use Session;
use App\product;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class CartController extends Controller
{
   
    public function Cart(Request $req,$id)
    {
        $nguoi = session()->get('customer_id');
        if($nguoi){
        $producttype = DB::table('product_types')->get();
        $ncc = DB::table('nccs')->get();
        $user = Auth::user();
        $users = DB::table('carts')->where('customer_id', $id)->where('check', '0')->distinct()->get();
        $total = 0;
        // $a=$userb*$usera;
        // $newProduct['price']=$newProduct['quantity']*$product->price;
        return view('client.frontend.cart',[
            'producttype'=>$producttype,
            'ncc'=>$ncc,
            'user'=>$user,
            'cart'=>$users,
            'total'=>$total
        ]);
        }
        else{
            return redirect('home/logincus');
        }   
    }
    public function Addtocart(Request $req,$id)
    {
        $user = session()->get('customer_id');
        if ($user) {
            $cart = DB::table('carts')->where('product_id',$id)->where('customer_id',$user)->where('check','0')->get();        
                if($cart->count()>0){                    
                    $carts = Cart::find($cart[0]->id);
                    DB::table('carts')
                ->where('id', $cart[0]->id)->where('check','0')
                ->update(['quantity' => $carts->quantity+1]);                        
                }
                else{
                    Cart::create($req->all());
                }
                return redirect()->back();
        }
        else{
            return redirect('home/logincus');
        }
    }
    public function AddCart(request $req,$id)
    {
       $product = DB::table('products')->where('id',$id)->first();
        if($product !=null){
            $oldcart = Session('Cart') ? Session('Cart'):null;
            $newCart=new Cart($oldcart);
            $newCart->AddCart($product,$id);
            $req->session()->put('Cart',$newCart);
        }
        // $data=product::all();
        // return view ('client.frontend.index',[
        //     'products'=>$data
        // ]);
        // dd($products);
    }
    public function updatecart(Request $request, $id)
    {
            DB::table('carts')
            ->where('customer_id', $id)->where('check','0')
            ->update(['check' => 1,'details_id'=>$request->details_id]);
            $alert='Bạn đã tiến hành thanh toán thành công';
            return redirect('home')->with('alert',$alert);
    }
    public function Cartoff1()
        {
            $users =  DB::table('details')->join('customers', 'customers.customer_id', '=', 'details.customer_id')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('carts')
                      ->whereRaw('carts.details_id = details.id')->where('checks','0');
            })
            ->get();
            return view('admin.site.cartoff1',[
                'result'=>$users,
           ]);
       
        }
    public function Carton()
        {$users = DB::table('customers')->join('details', 'customers.customer_id', '=', 'details.customer_id')->where('checks','1')->get();
            return view('admin.site.carton1',[
                'result'=>$users,
           ]);
        
        }
        public function CartGiao()
        {$users = DB::table('customers')->join('details', 'customers.customer_id', '=', 'details.customer_id')->where('checks','2')->get();
            return view('admin.site.cartGiao',[
                'result'=>$users,
           ]);
        
        }
    public function deleteCart(Request $Request, $id)
        {
            $data=DB::table('carts')->where('id',$id)->delete();
            return redirect()->back();
        }
    public function updatequantityCart(Request $Request, $id)
        {
            DB::table('carts')
            ->where('id', $id)
            ->update(['quantity' => $Request->quantity]);
            return redirect()->back();
        }
   
    public function Cartoff2(){
            // $data=DB::table('carts')->where('customer_id',$id)->where('check','1')->get();
            // dd($data);
            // $users = DB::table('users')->join('carts', 'users.id', '=', 'carts.customer_id')->where('check','1')->get();
          
            // $users = DB::table('carts')->join('users', 'carts.customer_id', '=', 'users.id')->where('check','1')->get();
            $user = Auth::user();
            $abc= DB::table('carts')->where('check', '1')->get();
            return view('admin.site.cartoff',[
                'result'=>$abc,
                'user'=>$user,
           ]);
    }
    public function updatecart1(Request $request, $id)
    {
            DB::table('details')
            ->where('id', $id)->where('checks','0')
            ->update(['checks' => 1]);
            return redirect('admin/Carton');
        }
        public function updatecart2(Request $request, $id)
    {
            DB::table('details')
            ->where('id', $id)->where('checks','1')
            ->update(['checks' => 2]);
            return redirect('admin/CartGiao');
        }
        
    
        public function updatecartdetail(Request $request, $id)
    {
            DB::table('details')
            ->where('user_id', $id)->where('check','1')
            ->update(['check' => 2]);
            return view('admin.site.carton');
        }
        public function getdetailbyID(Request $request, $id)
        {
            // echo "Văn Vinh";
            // echo $id;
            $users = DB::table('details')->join('carts', 'details.id', '=', 'carts.details_id')->where('details_id',$id)->get();
            $user = DB::table('details')->where('id',$id)->get();
            return view('admin.site.cartoff',[
                'result'=>$users,
                'result1'=>$user
            ]);
           
        }
        public function getdetail1byID(Request $request, $id)
        {
            // echo "Văn Vinh";
            // echo $id;
            $users = DB::table('details')->join('carts', 'details.id', '=', 'carts.details_id')->where('details_id',$id)->get();
            $user = DB::table('details')->where('id',$id)->get();
            return view('admin.site.carton',[
                'result'=>$users,
                'result1'=>$user
            ]);
           
        }
        public function getdetail2byID(Request $request, $id)
        {
            // echo "Văn Vinh";
            // echo $id;
            $users = DB::table('details')->join('carts', 'details.id', '=', 'carts.details_id')->where('details_id',$id)->get();
            $user = DB::table('details')->where('id',$id)->get();
            return view('admin.site.cartGiaochitiet',[
                'result'=>$users,
                'result1'=>$user
            ]);
           
        }
    
}
