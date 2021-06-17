<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use Notifiable;
    protected $table = 'carts';
    protected $guarded  = [];
    protected $fillable=[
        'product_id','customer_id','TenSP','image','price','details_id','quantity',
    ];
}


// public $products=null;
//     public $totalPrice=0;
//     public $totalQuantity=0;

//     public function __construct($cart)
//     {
//           if($cart){
//           $this->products=$cart->products;
//           $this->totalPrice=$cart->totalPrice;
//           $this->totalQuantity=$cart->totalQuantity;

//           }
//     }
//     public function AddCart($product,$id)
//     {
//         $newProduct=['quantity'=> 0,'price'=>$product->price,'producti4'=>$product];
//         if($this->products){
//             if(array_key_exists($id,$this->products)){
//                 $newProduct=$this->products[$id];
//             }
//         }
//         $newProduct['quantity']++;
//         $newProduct['price']=$newProduct['quantity']*$product->price;
//         $this->products[$id]=$newProduct;
//         $this->totalPrice+= $product->price;
//         $this->totalQuantity++;
//     }
