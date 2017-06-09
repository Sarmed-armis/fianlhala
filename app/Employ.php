<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    public $timestamps=false;
public function user(){

    $this->belongsTo('App\User');
}
}
