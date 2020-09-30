<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
  public function User(){
    return $this->belongsTo(User::class,'id');
  }

  public function category(){
    return $this->belongsTo(Category::class,'id');
  }

  public function outgo(){
    return $this->belongsTo(Outgo::class,'id');
  }
}
