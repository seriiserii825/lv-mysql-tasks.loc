<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    protected $fillable = ['code', 'model', 'speed', 'ram', 'hd', 'cd', 'price'];

    public function model()
    {
        return $this->hasOne('App\Model\Product', 'model', 'model');
    }
}
