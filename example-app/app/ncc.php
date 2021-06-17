<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ncc extends Model
{
    
  public function product()
  {
    return $this->hasMany('App\product','ncc','ncc');
    }
}
