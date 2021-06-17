<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\product_type;
use App\ncc;
use Illuminate\Notifications\Notifiable;

class product extends Model{
    use Notifiable;
    protected $fillable=[
        'name','image','description','price','quantity','producttype_id','ncc_id',
    ];
}

