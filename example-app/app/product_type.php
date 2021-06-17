<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class product_type extends Model
{
    use Notifiable;
    protected $fillable=[
       'producttype',
    ];
}
