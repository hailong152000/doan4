<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class detail extends Model{
    use Notifiable;
    protected $fillable=[
        'customer_id','total_price',
    ];
}

