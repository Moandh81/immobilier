<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'] ;



    public function users()
       {
           return $this->belongsTo('App\Users');
       }



}
