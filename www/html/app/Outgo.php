<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outgo extends Model
{

  
  public function User(){
    return $this->belongsTo(User::class,'id');
  }

  public function category(){
    return $this->belongsTo(Category::class,'id');
  }

  public function income(){
    return $this->belongsTo(Income::class,'id');
  }
}
