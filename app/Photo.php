<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  public function biens() {
    return $this->belongsTo('App\Bien');

  }

}
