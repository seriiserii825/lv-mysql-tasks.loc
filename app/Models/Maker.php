<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    protected $fillable = ['title'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'maker_id');
    }
}
