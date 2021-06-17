<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Customer;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\admin\site\PasswordRequest;
use App\Http\Requests\admin\site\registercusRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $user=DB::table('customers')->where('customer_id',$id)->get();
        return view('client.frontend.customer',[
            'user'=>$user[0]
        ]);
    }
    public function password($id)
    {
        $user=DB::table('customers')->where('customer_id',$id)->get();
        return view('client.frontend.password',[
            'user'=>$user[0]
        ]);
    }
    public function postpass(Request $req, $id)
    {
        $update=Customer::where('customer_id',$id)->update(
            [
                'Password'=>$req->Password
            ]);
            if($update){
                return redirect()->back()->with('create_success','Đổi mật khẩu thành công');
            }
            else{
                return redirect()->back()->with('create_fail','Đổi mật khẩu thất bại');
            }
    }
    public function update(Request $req, $id)
    {
        $image = $req->file('image');
        $storedPath = $image->move('user_images', $image->getClientOriginalName());  
        $abc=$image->getClientOriginalName();
        $update=Customer::where('customer_id',$id)->update(
            [
                'Ten'=>$req->Ten,
                'Dia_chi'=>$req->Dia_chi,
                'image'=>$abc,
                'SĐT'=>$req->SĐT,
            ]);
            if($update){
                return redirect()->back()->with('create_success','Đổi thông tin cá nhân thành công');
            }
            else{
                return redirect()->back()->with('create_fail','Đổi thông tin cá nhân thất bại');
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
        return view('admin.site.allproduct');
    }
    public function delete(Request $Request, $id)
    {
        $data=product::where('id',$id)->delete();
        return view('admin.site.allproduct');
    }
    public function cart1($id)
        {
            // $users = DB::table('users')->join('details', 'users.id', '=', 'details.user_id')->where('check','1')->get();
            $users =  DB::table('details')->where('customer_id',$id)
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('carts')
                      ->whereRaw('carts.details_id = details.id')->where('checks','0');
            })
            ->get();
            return view('client.frontend.cart1',[
                'result'=>$users,
           ]);
       
        }
        public function Cart2($id)
        {$users = DB::table('details')->where('customer_id',$id)->where('checks','1')->get();
            return view('client.frontend.cart2',[
                'result'=>$users,
           ]);
        
        }
        public function Cart3($id)
        {$users = DB::table('details')->where('customer_id',$id)->where('checks','2')->get();
            return view('client.frontend.cart3',[
                'result'=>$users,
           ]);
        
        }
        public function Cartdetail( $id)
        {
            // echo "Văn Vinh";
            // echo $id;
            $users = DB::table('details')->join('carts', 'details.id', '=', 'carts.details_id')->where('details_id',$id)->get();
            $user = DB::table('details')->where('id',$id)->get();
            if($user){
                Session::put('checks',$user[0]->checks);
            }
            return view('client.frontend.cartdetail',[
                'result'=>$users,
                'result1'=>$user
            ]);
           
        }
        public function deletedetail($id)
        {
            $delete=DB::table('details')->where('id',$id)->delete();
            return redirect('home');
        }
}
