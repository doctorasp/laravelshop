<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    public function orders(){
        return $this->belongsToMany('App\Goods','goods__orders')->withPivot('amount');
    }
}
