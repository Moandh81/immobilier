<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

  protected $fillable = ['path', 'bien_id'] ;

  public function biens() {
    return $this->belongsTo('App\Bien');

  }

}
