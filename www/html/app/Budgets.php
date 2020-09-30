<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budgets extends Model
{
  public function User(){
    return $this->belongsTo(User::class,'id');
  }

  public function income(){
    return $this->belongsTo(Income::class,'id');
  }

  public function outgo(){
    return $this->belongsTo(Outgo::class,'id');
  }
}
