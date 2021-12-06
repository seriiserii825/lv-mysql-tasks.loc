<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['model', 'type', 'maker_id'];

    public function maker(){
        return $this->hasOne('App\Models\Maker', 'id');
    }
}
