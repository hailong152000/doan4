<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Notifiable;
    protected $fillable=[
        'Ten','Dia_chi','SĐT','UID','Password',
    ];
}
